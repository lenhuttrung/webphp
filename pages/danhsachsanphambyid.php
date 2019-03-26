<?php
	$id= $_GET['id'];
	$danhsach = danhsachsanphambyid($id);
	$row_danhsach = mysqli_fetch_array($danhsach);
?>
<div class="c-content-title-1">
	<div style="padding-top: 30px"></div>
					<h3 class="c-font-uppercase c-center c-font-bold"><a href=""><?php echo $row_danhsach['TenLoaiSanPham']; ?></a></h3>
					<div class="c-line-center c-theme-bg"></div>
				</div>
<div class="c-bs-grid-small-space">

					<div class="row">
						<?php
							$id= $_GET['id'];
							$danhsach = danhsachsanphambyid($id);
							while($row_danhsach=mysqli_fetch_array($danhsach)){
						?>
						<div class="col-md-3 col-sm-6 c-margin-b-20">
							<div class="c-content-product-2 c-bg-white c-border">
								<div class="c-content-overlay">
									<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
									<div class="c-overlay-wrapper">
										<div class="c-overlay-content">
											<a href="aitifashion.php?p=chitietsanpham&id=<?php echo $row_danhsach['MaSanPham'] ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Chi tiết</a>
										</div>
									</div>
									<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(../admin/uploads/sanpham/<?php echo $row_danhsach['IMG1']; ?>);"></div>
								</div>
								<div class="c-info">
									<p class="c-title c-font-16 c-font-slim"><?php echo $row_danhsach['TenSanPham']; ?></p>
									<p class="c-price c-font-14 c-font-slim"><?php echo $row_danhsach['Gia']; ?> &nbsp;
										<span class="c-font-14 c-font-line-through c-font-red">$600</span>
									</p>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<div class="btn-group c-border-top" role="group">
										<a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Yêu thích</a>
									</div>
									<div class="btn-group c-border-left c-border-top" role="group">
										<a href="aitifashion.php?p=addtocart&id=<?php echo $row_danhsach['MaSanPham'] ?>" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Thêm vào giỏ hàng</a>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						?>
						
					</div>

					

				</div><!-- END: CONTENT/SHOPS/SHOP-2-7 -->