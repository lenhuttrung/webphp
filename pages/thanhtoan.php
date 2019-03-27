<?php
	$conn = connect();
	if($_POST['docdk']){
		if(isset($_POST['xacnhan'])){
			$taikhoan = $_POST['taikhoan'];
			$password = md5($_POST['password']);
			$hoten 	  = $_POST['hoten'];
			$email    = $_POST['email'];
			$diachi   = $_POST['diachi'];
			$ngaytao  = date('Y-m-d H:i:s'); // ngày mua
			$sdt      = $_POST['sdt'];
			$ngaycapnhap = null;


			$query = "SELECT taikhoan FROM USER WHERE taikhoan = '$taikhoan'";
			$query_insertKH = "INSERT INTO KHACHHANG VALUES (null,'$hoten','$email','$diachi','$sdt','$ngaytao','$ngaycapnhap')";



			//CÒN PHẢI KIỂM TRA ĐÃ ĐĂNG NHẬP CHƯA
			//NẾU RỒI THÌ CÁC INPUT NHẬN DỮ LIỆU
			//NẾU CHƯA CHO CHẠY CÁC IF DƯỚI
			if($_POST['checkbox']){  // nếu checkbox đăng kí được check thì thêm vào table user
				// insert vào user id mới		
				$user  = mysqli_query($conn,$query);
				$row_user = mysqli_fetch_array($user);
				if(count($row_user)==0){
					$insert = "INSERT INTO USER VALUES ('$taikhoan','$password','$hoten','$email','PSDITSTUDIO1.PNG','$ngaytao','$ngaycapnhap',0)";
					mysqli_query($conn,$insert);
				}else{
					echo "Tài khoản này đã được sử dụng";
					//echo count($user);
				}
				//$makh=null;

			}
			else // nếu checkbox đăng kí k được check thì thêm thông tin vào table khách hàng
			{	
				
				
			}
			mysqli_query($conn,$query_insertKH);
			//SAU KHI KIỂM TRA ĐĂNG NHẬP XONG, KIỂM TRA CÓ ĐĂNG KÍ HAY KHÔNG BẮT ĐẦU THÊM VÀO HÓA ĐƠN
			$query_KH_max = "Select MaKhachHang from khachhang Where 
							MaKhachHang>(select MAX(MaKhachHang-1) from khachhang)
							order by MaKhachHang desc limit 1";
				$makhachhang = mysqli_query($conn,$query_KH_max);
				$row_makhachhang = mysqli_fetch_array($makhachhang);
				$makh = $row_makhachhang['MaKhachHang'];
			$ghichu = $_POST['ghichu'];

			$query_insertHD = "INSERT INTO HOADON VALUES (null,'$makh','$ngaytao','$thanhtien','$ghichu',0,0,1,'$ngaytao','$ngaycapnhap')";
			mysqli_query($conn,$query_insertHD);
			// THUC HIỆN XONG THÊM VÀO HÓA ĐƠN
			// THỰC HIỆN THÊM VÀO CHI TIẾT HÓA ĐƠN
			$query_MaHD_Max = "Select MaHoaDon from hoadon Where 
							MaHoaDon>(select MAX(MaHoaDon-1) from hoadon)
							order by MaHoaDon desc limit 1";
			$mahoadon = mysqli_query($conn,$query_MaHD_Max);
			$row_mahoadon = mysqli_fetch_array($mahoadon);
			$mahd = $row_mahoadon['MaHoaDon'];
			echo "ma hoa don ". $mahd;

			foreach ($_SESSION as $name => $value) {
								//echo $name . '  '. $value .'</br>';
				if($value > 0 ){
					if(substr($name,0,5)=="cart_"){
						$id = substr($name, 5,strlen($name)-5);
						$query1 = "SELECT*FROM SANPHAM WHERE MaSanPham = $id";
						$sanpham1 = mysqli_query($conn,$query1);
						while ($row_sanpham = mysqli_fetch_array($sanpham1)){
							$masp = $row_sanpham['MaSanPham'];
							$soluong = $value;
							$gia = $row_sanpham['Gia'];
							//echo "ma san pham ". $masp . " so luong " . $soluong;

							$query_chitiethoadon = "INSERT INTO CHITIETHOADON VALUES(null,'$mahd','$masp','$gia','$soluong','$ngaytao','$ngaycapnhap')";
							mysqli_query($conn,$query_chitiethoadon);

						// update lại số lượng sản phẩm tồn
							// cần xét thêm trường hợp mua lớn hơn số lượng đang có, show ra table thông báo không còn đủ hàng
							$soluongmua = $value;
							$soluongcon = $row_sanpham['SoLuong'] - $soluongmua;
							$update_soluong_sp = "UPDATE SANPHAM SET SoLuong = '$soluongcon' WHERE MaSanPham = $id";
							mysqli_query($conn,$update_soluong_sp);
						}
					}
				}
			}
			session_destroy();	
		}
?>
<html>
<head>
    <title>Thêm thành công...</title>
    <meta http-equiv="refresh" 
        content="0;URL=aitifashion.php?p=xacnhanmuahang">
</head>
<body>
    
</body>
</html>
<?php
	}
	else
	{
?>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<!-- BEGIN: PAGE CONTENT -->
		<div class="c-content-box c-size-lg">
	<div class="container">
		<form action="" method="post" class="c-shop-form-1">
			<div class="row">
				<!-- BEGIN: ADDRESS FORM -->
				<div class="col-md-7 c-padding-20">
					<!-- BEGIN: BILLING ADDRESS -->
					<h3 class="c-font-bold c-font-uppercase c-font-24">Thông tin người nhận hàng!</h3>
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="form-group col-md-6">
									<label class="control-label">Họ và tên</label>
									<input type="text" name="hoten" class="form-control c-square c-theme" placeholder="Họ và tên">
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="form-group col-md-12">
							<label class="control-label">Địa chỉ</label>
							<input type="text" name="diachi" class="form-control c-square c-theme" placeholder="Street Address">
						</div>
					</div>
					
					
					
					<div class="row">
						<div class="form-group col-md-12">
							<div class="row">
								<div class="form-group col-md-6">
									<label class="control-label">Email</label>
									<input type="email" name="email" class="form-control c-square c-theme" placeholder="Email Address">
								</div>
								<div class="col-md-6">
									<label class="control-label">Số điện thoại</label>
									<input type="text" name="sdt" class="form-control c-square c-theme" placeholder="Số điện thoại">
								</div>
							</div>
						</div>
					</div>
					<div class="row c-margin-t-15">
						<div class="form-group col-md-12">
							<div class="c-checkbox c-toggle-hide" data-object-selector="c-account" data-animation-speed="600">
								<input type="checkbox" name="checkbox" id="checkbox1-77" class="c-check">
								<label for="checkbox1-77">
									<span class="inc"></span>
									<span class="check"></span>
									<span class="box"></span>
									Đăng kí?
								</label>
							</div>
							<p class="help-block">Đăng kí người dùng để được hổ trợ tốt nhất.</p>
						</div>
					</div>
					<div class="row c-account">
						<div class="form-group col-md-12">
							<label class="control-label">Nhập tài khoản</label>
							<input type="text" name="taikhoan"  class="form-control c-square c-theme" placeholder="Tài khoản">
							<label class="control-label">Nhập mật khẩu</label>
							<input type="password" name="password" class="form-control c-square c-theme" placeholder="Password">
						</div>
					</div>
					<!-- BILLING ADDRESS -->
					<!-- SHIPPING ADDRESS -->
					
					<!-- SHIPPING ADDRESS -->
					<div class="row">
						<div class="form-group col-md-12">
							<label class="control-label">Ghi chú đơn hàng</label>
							<textarea class="form-control c-square c-theme" rows="3" name="ghichu" placeholder="Mô tả chi tiết sản phẩm nếu sản phẩm có nhiều lực chọn màu sắc, kích cơ...Hoặc nhập địa chỉ bạn muốn nhận hàng tại đây."></textarea>
						</div>
					</div>
				</div>
				<!-- END: ADDRESS FORM -->
				<!-- BEGIN: ORDER FORM -->
				<div class="col-md-5">
					<div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
					<h1 class="c-font-bold c-font-uppercase c-font-24">Hóa đơn</h1>
					<ul class="c-order list-unstyled">
						<li class="row c-margin-b-15">
							<div class="col-md-6 c-font-20"><h2>Sản phẩm</h2></div>
							<div class="col-md-6 c-font-20"><h2>Tổng cộng</h2></div>
						</li>
						<li class="row c-border-bottom"></li>
						<?php
							session_start();
							$conn = connect();
							$thanhtien = 0;
							foreach ($_SESSION as $name => $value) {
								echo $name . '  '. $value .'</br>';
								if($value > 0 ){
									if(substr($name,0,5)=="cart_"){
										$id = substr($name, 5,strlen($name)-5);
										$query = "SELECT*FROM SANPHAM WHERE MaSanPham = $id";
										$sanpham = mysqli_query($conn,$query);
										while($row_sanpham = mysqli_fetch_array($sanpham)){
										$thanhtien += $row_sanpham['Gia']*$value;

						?>
						<li class="row c-margin-b-15 c-margin-t-15">
							<div class="col-md-6 c-font-20"><a href="shop-product-details.html" class="c-theme-link"><?php echo $row_sanpham['TenSanPham'] ?> x <?php echo $value ?></a></div>
							<div class="col-md-6 c-font-20">
								<p class=""><?php echo number_format($row_sanpham['Gia']) ?></p>
							</div>
						</li>
						
						<?php
						}
									}
								}
							}
						?>
						<li class="row c-margin-b-15 c-margin-t-15">
							<div class="col-md-6 c-font-20">Tổng cộng</div>
							<div class="col-md-6 c-font-20">
								<p class=""><span class="c-subtotal"><?php echo number_format($thanhtien) ?> VND</span></p>
							</div>
						</li>

						<li class="row c-border-top c-margin-b-15"></li>
						<li class="row">
							<div class="col-md-6 c-font-20">Phí ship</div>
							<div class="col-md-6">
								<div class="c-radio-list c-shipping-calculator" data-name="shipping_price" data-subtotal-selector="c-subtotal" data-total-selector="c-shipping-total">
									<p class="c-shipping-price c-font-bold c-font-20">Đợi nhân viên liên hệ để xác nhận phí ship</p>
									
								</div>
							</div>
						</li>
						<li class="row c-margin-b-15 c-margin-t-15">
							<div class="col-md-6 c-font-20">
								<p class="c-font-30">Thành tiền</p>
							</div>
							<div class="col-md-6 c-font-20">
								<p class="c-font-bold c-font-30"><span class="c-shipping-total"><?php echo number_format($thanhtien) ?></span> VND</p>
							</div>
						</li>
						<li class="row">
							<div class="col-md-12">
								<div class="c-radio-list">
									<div class="c-radio">
										<input type="radio" checked="checked" id="radio" class="c-radio" name="payment">
										<label for="radio3" class="c-font-bold c-font-20">
											<span class="inc"></span>
											<span class="check"></span>
											<span class="box"></span>
											SHIPCODE
										</label>
										<img class="img-responsive" width="250" src="../../../../../www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" />
									</div>
								</div>
							</div>
						</li>
						<li class="row c-margin-b-15 c-margin-t-15">
							<div class="form-group col-md-12">
								<div class="c-checkbox">
									<input type="checkbox" name="docdk" id="checkbox1-11" class="c-check">
									<label for="checkbox1-11">
										<span class="inc"></span>
										<span class="check"></span>
										<span class="box"></span>
										Tôi đã đọc và đồng ý với tất cả điều khoản!
									</label>
								</div>
							</div>
						</li>
						<li class="row">
							<div class="form-group col-md-12" role="group">
								<a href="aitifashion.php"><button type="submit" name="xacnhan" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Xác nhận</button></a>
								<a href="aitifashion.php?p=addtocart"><button type="submit" name="huy" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Hủy</button></a>
							</div>
						</li>
					</ul>
				</div>
				</div>
				<!-- END: ORDER FORM -->
			</div>
		</form>
	</div>
</div>  
<?php
	}
?>