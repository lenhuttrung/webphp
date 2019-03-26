<?php
	if(isset($_GET['id']) && !empty($_GET['id'])){
		$id = $_GET['id'];
		@$_SESSION['cart_'.$id]+=1;	
?>
<html>
<head>
    <title>Thêm thành công...</title>
    <meta http-equiv="refresh" 
        content="0;URL=aitifashion.php?p=addtocart">
</head>
<body>
</body>
</html>
<?php
}
 	else
  		if(isset($_GET['them'])){
			$_SESSION['cart_'.$_GET['them']]+=1;	
?>

<html>
<head>
    <title>Thêm thành công...</title>
    <meta http-equiv="refresh" 
        content="0;URL=aitifashion.php?p=addtocart">
</head>
<body>
</body>
</html>
<?php
	}
		else
			if(isset($_GET['tru'])){
				$_SESSION['cart_'.$_GET['tru']]--;
?>
<html>
<head>
    <title>Thêm thành công...</title>
    <meta http-equiv="refresh" 
        content="0;URL=aitifashion.php?p=addtocart">
</head>
<body>
</body>
</html>
<?php
	}
	else
	{
?>
<div class="c-content-box c-size-lg">
	<div class="container">
		<div class="c-shop-cart-page-1">
			<div class="row c-cart-table-title">
				<div class="col-md-2 c-cart-image">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Hình ảnh</h3>
				</div>
				<div class="col-md-4 c-cart-desc">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Mô tả</h3>
				</div>
				<div class="col-md-1 c-cart-ref">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Mã sản phẩm</h3>
				</div>
				<div class="col-md-1 c-cart-qty">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Số lượng</h3>
				</div>
				<div class="col-md-2 c-cart-price">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Đơn giá</h3>
				</div>
				<div class="col-md-1 c-cart-total">
					<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Tổng tiền</h3>
				</div>
				<div class="col-md-1 c-cart-remove"></div>
			</div>
			<!-- BEGIN: SHOPPING CART ITEM ROW -->
			<?php
				$conn = connect();
			
			// xóa sp khỏi cart
			if(isset($_GET['xoa'])){
				$_SESSION['cart_'.$_GET['xoa']]=0;
			}
			$thanhtien = 0;
			foreach ($_SESSION as $name => $value) {
				echo $name . '  '. $value .'</br>';
				if($value>0){
					if(substr($name, 0,5)=='cart_'){
						$id = substr($name,5,strlen($name)-5);
						$query = "SELECT * FROM SANPHAM  where masanpham =$id";
						$sanpham = mysqli_query($conn,$query);
						while($row_sanpham = mysqli_fetch_array($sanpham)){
						$thanhtien = $thanhtien + $value*$row_sanpham['Gia'];
				
			?>
			<div class="row c-cart-table-row">
				<h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first"><?php echo $row_sanpham['IMG1'] ?></h2>
				<div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
					<img src="../admin/uploads/sanpham/<?php echo $row_sanpham['IMG1'] ?>"/>
				</div>
				<div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
					<h3><a href="aitifashion.php?p=chitietsanpham&id=<?php echo $row_sanpham['MaSanPham'] ?>" class="c-font-bold c-theme-link c-font-22 c-font-dark">#<?php echo $row_sanpham['TenSanPham'] ?></a></h3>
					<p>Màu: <?php echo $row_sanpham['Mau'] ?></p>
					<p>Size: <?php echo $row_sanpham['Size'] ?></p>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">SKU</p>
					<p>#<?php echo $row_sanpham['MaSanPham'] ?></p>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>
					<div class="c-input-group c-spinner">
					    
					    <div class="c-input-group-btn-circle">
					    	<input type="text" class="form-control c-item-1"  value="<?php echo $value ?>">
					    	<a href="aitifashion.php?p=addtocart&them=<?php echo $row_sanpham['MaSanPham'] ?>"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-plus"></i></button></a>
					    	<a href="aitifashion.php?p=addtocart&tru=<?php echo $row_sanpham['MaSanPham'] ?>"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-minus"></i></button></a>
					    </div>
					</div>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
					<p class="c-cart-price c-font-bold"><?php echo number_format($row_sanpham['Gia']) ?></p>
				</div>
				<div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
					<p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Total</p>
					<p class="c-cart-price c-font-bold"><?php echo number_format($row_sanpham['Gia']*$value) ?></p>
				</div>
				<div class="col-md-1 col-sm-12 c-cart-remove">
					<a href="aitifashion.php?p=addtocart&xoa=<?php echo $row_sanpham['MaSanPham'] ?>" class="c-theme-link c-cart-remove-desktop">×</a>
					<a href="aitifashion.php?p=addtocart&xoa=<?php echo $row_sanpham['MaSanPham'] ?>" class="c-cart-remove-mobile btn c-btn c-btn-md c-btn-square c-btn-red c-btn-border-1x c-font-uppercase">Xóa Sản Phẩm Khỏi Giỏ Hàng</a>
				</div>
			</div>
			<?php
							}
						}
					}
				}
			?>
			<!-- END: SHOPPING CART ITEM ROW -->
			<!-- BEGIN: SHOPPING CART ITEM ROW -->
			
			<!-- END: SHOPPING CART ITEM ROW -->
			<!-- BEGIN: SUBTOTAL ITEM ROW -->
			<div class="row">
				<div class="c-cart-subtotal-row c-margin-t-20">
					<div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2"> Tổng tiền (VND)</h3>
					</div>
					<div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
						<h3 class="c-font-bold c-font-16" id ="thanhtien"><?php echo  number_format($thanhtien) ?> </h3>
					</div>
				</div>
			</div>
			<!-- END: SUBTOTAL ITEM ROW -->
			<!-- BEGIN: SUBTOTAL ITEM ROW -->
			
			<!-- END: SUBTOTAL ITEM ROW -->
			<div class="c-cart-buttons">
				<a href="aitifashion.php" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">Tiếp tục mua sắm</a>
				<a href="aitifashion.php?p=thanhtoan" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">THANH TOÁN</a>
			</div>
		</div>
	</div>
</div><!-- END: CONTENT/SHOPS/SHOP-CART-1 -->
<?php
	}
?>