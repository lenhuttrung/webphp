<?php
	session_start();
	$id = $_GET['id'];
	$chitiet = chitietsanpham($id);
	$row_chitiet = mysqli_fetch_array($chitiet);
	if(isset($_POST['post_sl'])){
		$_SESSION['cart_'.$id]+=$_POST['soluong'];
?>
<html>
<head>
    <title>Thêm thành công...</title>
    <meta http-equiv="refresh" 
        content="0;URL=/aitiphoto.com/pages/aitifashion.php?p=addtocart">
</head>
<body>
    
</body>
</html>
<?php
	}else{
?>
		<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
			<div class="container">
				<div class="c-page-title c-pull-left">
					<h3 class="c-font-uppercase c-font-sbold">Product Details 1</h3>
					<h4 class="">Page Sub Title Goes Here</h4>
				</div>
				<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
					<li><a href="shop-product-details.html">Product Details 1</a></li>
					<li>/</li>
					<li class="c-state_active">Jango Components</li>

				</ul>
			</div>
		</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
		<div class="container">
			<div class="c-layout-sidebar-menu c-theme ">
				<!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU-2 -->
				<div class="c-sidebar-menu-toggler">
					<h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
					<a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
						<span class="c-line"></span>
						<span class="c-line"></span>
						<span class="c-line"></span>
					</a>
				</div>

				<!-- BEGIN: CONTENT/SHOPS/SHOP-FILTER-SEARCH-1 -->
				<ul class="c-shop-filter-search-1 list-unstyled">
					<li>
						<label class="control-label c-font-uppercase c-font-bold">Loại sản phẩm</label>
						<select class="form-control c-square c-theme">
							<option value="0">All Categories</option>
							<option value="1">Art</option>
							<option value="2">Baby</option>
							<option value="3">Books</option>
							<option value="4">Business &amp; Industrial</option>
							<option value="5">Cameras &amp; Photo</option>
							<option value="6">Cell Phones &amp; Accessories</option>
							<option value="7">Clothing, Shoes &amp; Accessories</option>
							<option value="8">Coins &amp; Paper Money</option>
							<option value="9">Collectibles</option>
							<option value="10">Computers/Tablets &amp; Networking</option>
						</select>
					</li>
					<li>
						<label class="control-label c-font-uppercase c-font-bold">Availability</label>
						<div class="c-checkbox">
							<input type="checkbox" id="checkbox-sidebar-3-1" class="c-check"> <label for="checkbox-sidebar-3-1">
								<span class="inc"></span> <span class="check"></span> <span class="box"></span>
								<p>Not Available (3)</p>
							</label>
						</div>
						<div class="c-checkbox c-checkbox-height">
							<input type="checkbox" id="checkbox-sidebar-3-2" class="c-check"> <label for="checkbox-sidebar-3-2">
								<span class="inc"></span> <span class="check"></span> <span class="box"></span>
								<p>In Stock (23)</p>
							</label>
						</div>
					</li>
					<li>
						<label class="control-label c-font-uppercase c-font-bold">Price Range</label>
						<div class="c-price-range-box input-group">
							<div class="c-price input-group col-md-6 pull-left">
								<span class="input-group-addon c-square c-theme">$</span>
								<input type="text" class="form-control c-square c-theme" placeholder="from">
							</div>
							<div class="c-price input-group col-md-6 pull-left">
								<span class="input-group-addon c-square c-theme">$</span>
								<input type="text" class="form-control c-square c-theme" placeholder="to">
							</div>
						</div>
					</li>
					<li>
						<label class="control-label c-font-uppercase c-font-bold">Price Range Slider Color</label>
						<p>Price Range: $1 - $ 500</p>
						<div class="c-price-range-slider c-theme-1 input-group">
							<input type="text" class="c-price-slider" value="" data-slider-min="1" data-slider-max="500" data-slider-step="1"
							 data-slider-value="[100,250]">
						</div>
					</li>
					<li>
						<label class="control-label c-font-uppercase c-font-bold">Price Range Slider Color</label>
						<p>Price Range: $1 - $ 500</p>
						<div class="c-price-range-slider c-theme-2 input-group">
							<input type="text" class="c-price-slider" value="" data-slider-handle="square" data-slider-min="1"
							 data-slider-max="500" data-slider-step="1" data-slider-value="[100,250]">
						</div>
					</li>
					<li>
						<label class="control-label c-font-uppercase c-font-bold">Price Group</label>
						<div class="input-group">
							<div class="c-checkbox">
								<input type="checkbox" id="checkbox-sidebar-1-1" class="c-check"> <label for="checkbox-sidebar-1-1">
									<span class="inc"></span> <span class="check"></span> <span class="box"></span> $0 - $10 (15)
								</label>
							</div>
							<div class="c-checkbox">
								<input type="checkbox" id="checkbox-sidebar-1-2" class="c-check"> <label for="checkbox-sidebar-1-2">
									<span class="inc"></span> <span class="check"></span> <span class="box"></span> $11 - $20 (17)
								</label>
							</div>
							<div class="c-checkbox">
								<input type="checkbox" id="checkbox-sidebar-1-3" class="c-check"> <label for="checkbox-sidebar-1-3">
									<span class="inc"></span> <span class="check"></span> <span class="box"></span> $21 - $30 (23)
								</label>
							</div>
							<div class="c-checkbox c-checkbox-height">
								<input type="checkbox" id="checkbox-sidebar-1-4" class="c-check"> <label for="checkbox-sidebar-1-4">
									<span class="inc"></span> <span class="check"></span> <span class="box"></span> $31 - $40 (19)
								</label>
							</div>
						</div>
					</li>
					<li class="c-margin-b-40">
						<label class="control-label c-font-uppercase c-font-bold">Review Rating</label>
						<div class="c-checkbox">
							<input type="checkbox" id="checkbox-sidebar-2-1" class="c-check"> <label for="checkbox-sidebar-2-1">
								<span class="inc"></span> <span class="check"></span> <span class="box"></span>
								<p class="c-review-star">
									<span class="fa fa-star c-theme-font"></span> <span class="fa fa-star c-theme-font"></span> <span class="fa fa-star c-theme-font"></span>
									<span class="fa fa-star c-theme-font"></span> <span class="fa fa-star c-theme-font"></span> (18)
								</p>
							</label>
						</div>
						<div class="c-checkbox">
							<input type="checkbox" id="checkbox-sidebar-2-2" class="c-check"> <label for="checkbox-sidebar-2-2">
								<span class="inc"></span> <span class="check"></span> <span class="box"></span>
								<p class="c-review-star">
									<span class="fa fa-star c-theme-font"></span> <span class="fa fa-star c-theme-font"></span> <span class="fa fa-star c-theme-font"></span>
									<span class="fa fa-star c-theme-font"></span> (20)
								</p>
							</label>
						</div>
						<div class="c-checkbox">
							<input type="checkbox" id="checkbox-sidebar-2-3" class="c-check"> <label for="checkbox-sidebar-2-3">
								<span class="inc"></span> <span class="check"></span> <span class="box"></span>
								<p class="c-review-star">
									<span class="fa fa-star c-theme-font"></span> <span class="fa fa-star c-theme-font"></span>
									<span class="fa fa-star c-theme-font"></span> (9)
								</p>
							</label>
						</div>
						<div class="c-checkbox">
							<input type="checkbox" id="checkbox-sidebar-2-4" class="c-check"> <label for="checkbox-sidebar-2-4">
								<span class="inc"></span> <span class="check"></span> <span class="box"></span>
								<p class="c-review-star">
									<span class="fa fa-star c-theme-font"></span> <span class="fa fa-star c-theme-font"></span> (4)
								</p>
							</label>
						</div>
						<div class="c-checkbox">
							<input type="checkbox" id="checkbox-sidebar-2-5" class="c-check"> <label for="checkbox-sidebar-2-5">
								<span class="inc"></span> <span class="check"></span> <span class="box"></span>
								<p class="c-review-star">
									<span class="fa fa-star c-theme-font"></span> (1)
								</p>
							</label>
						</div>
						<div class="c-checkbox">
							<input type="checkbox" id="checkbox-sidebar-2-6" class="c-check"> <label for="checkbox-sidebar-2-6">
								<span class="inc"></span> <span class="check"></span> <span class="box"></span>
								<p class="c-review-star">No yet rated (10)</p>
							</label>
						</div>
					</li>
				</ul><!-- END: CONTENT/SHOPS/SHOP-FILTER-SEARCH-1 -->

				
			</div>
			<div class="c-layout-sidebar-content ">
				<!-- BEGIN: PAGE CONTENT -->
				<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-1 -->
				<div class="c-shop-product-details-2 c-opt-1">
						<div class="row">
						<div class="col-md-6">
							<div class="c-product-gallery">
								<div class="c-product-gallery-content">
									<div class="c-zoom">
										<img src="../admin/uploads/sanpham/<?php echo $row_chitiet['IMG1'] ?>">
									</div>
									<div class="c-zoom">
										<img src="../admin/uploads/sanpham/<?php echo $row_chitiet['IMG2'] ?>">
									</div>
									<div class="c-zoom">
										<img src="../admin/uploads/sanpham/<?php echo $row_chitiet['IMG3'] ?>">
									</div>
									<div class="c-zoom">
										<img src="../admin/uploads/sanpham/<?php echo $row_chitiet['IMG4'] ?>">
									</div>
								</div>
								<div class="row c-product-gallery-thumbnail">
									<div class="col-xs-3 c-product-thumb">
										<img src="../admin/uploads/sanpham/<?php echo $row_chitiet['IMG1'] ?>">
									</div>
									<div class="col-xs-3 c-product-thumb">
										<img src="../admin/uploads/sanpham/<?php echo $row_chitiet['IMG2'] ?>">
									</div>
									<div class="col-xs-3 c-product-thumb">
										<img src="../admin/uploads/sanpham/<?php echo $row_chitiet['IMG3'] ?>">
									</div>
									<div class="col-xs-3 c-product-thumb c-product-thumb-last">
										<img src="../admin/uploads/sanpham/<?php echo $row_chitiet['IMG4'] ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="c-product-meta">
								<div class="c-content-title-1">
									<h3 class="c-font-uppercase c-font-bold"><?php echo $row_chitiet['TenSanPham'] ?></h3>
									<div class="c-line-left"></div>
								</div>
								<div class="c-product-badge">
									<div class="c-product-sale">Sale</div>
									<div class="c-product-new">New</div>
								</div>
								<div class="c-product-review">
									<div class="c-product-rating">
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star-half-o c-font-red"></i>
									</div>
									<div class="c-product-write-review">
										<a class="c-font-red" href="#">Write a review</a>
									</div>
								</div>
								<div class="c-product-price"><?php echo $row_chitiet['Gia'] ?></div>
								<div class="c-product-short-desc">
									<?php echo $row_chitiet['khuyenmai'] ?>
								</div>
								<div class="row c-product-variant">
									<div class="col-sm-12 col-xs-12">
										<p class="c-product-meta-label c-product-margin-1 k2c-font-uppercase c-font-bold">Size:</p>
										<div class="c-product-size">
											<p><?php echo $row_chitiet['Size'] ?></p>
										</div>
									</div>
									<div class="col-sm-12 col-xs-12 c-margin-t-20">
										<div class="c-product-color">
											<p class="c-product-meta-label c-font-uppercase c-font-bold">Màu sắc:</p>
											<p><?php echo $row_chitiet['Mau'] ?></p>
										</div>
									</div>
									<div class="col-sm-12 col-xs-12 c-margin-t-20">
										<div class="c-product-color">
											<p class="c-product-meta-label c-font-uppercase c-font-bold">Số lượng còn:</p>
											<p><?php echo $row_chitiet['SoLuong'] ?></p>
										</div>
									</div>
								</div>
								<div class="c-product-add-cart c-margin-t-20">
									<div class="row">
										<form action="" method="post">
											<div class="col-sm-4 col-xs-12">
												<div class="c-input-group c-spinner">
													<p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">Số lượng:</p>
													<input type="text" class="form-control c-item-1" name="soluong" value="1">
													<div class="c-input-group-btn-vertical">
														<button class="btn btn-default"  type="button" data_input="c-item-1"><i class="fa fa-caret-up"></i></button>
														<button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-down"></i></button>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-xs-12 c-margin-t-20">
											<a href="aitifashion.php?p=addtocart&id=<?php echo $row_chitiet['MaSanPham'] ?>"><button type="submit" name="post_sl" class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase">Thêm vào giỏ hàng</button></a>
											</div>
										</form>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-1 -->

				<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-2 -->
				<div class="c-content-box c-size-md c-no-padding c-margin-t-60">
					<div class="c-shop-product-tab-1" role="tabpanel">
						<div class="c-product-tab-container">
							<ul class="nav nav-justified" role="tablist">
								<li role="presentation" class="active">
									<a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Mô tả</a>
								</li>
								<li role="presentation">
									<a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Thông tin cơ bản</a>
								</li>
								<li role="presentation">
									<a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">Reviews (3)</a>
								</li>
							</ul>
						</div>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="tab-1">
								<div class="c-product-desc c-center c-opt-2">
									<div class="c-product-tab-container">
										<?php echo $row_chitiet['Mota'] ?>
									</div>
								</div>
								<div class="c-product-desc c-bg-dark c-opt-2">
									<div class="c-product-tab-container">
										<?php
												$sptuongtu1 = sptuongtu1($row_chitiet['TenSanPham']);
												while($row_sptuongtu1=mysqli_fetch_array($sptuongtu1)){
											?>
										<div class"row">
											<div class="col-md-6">
												<img src="../admin/uploads/sanpham/<?php echo $row_sptuongtu1['IMG1']  ?>" />
											</div>
											<div class="col-md-6">
												<div class="c-content-title-1">
													<h3 class="c-font-uppercase c-font-white c-font-bold"><?php echo $row_sptuongtu1['TenSanPham']  ?></h3>
													<div class="c-line-left"></div>
												</div>
												<p class="c-font-grey">
													<?php echo $row_sptuongtu1['Mota']  ?>
												</p>
												<br>
												<a href="aitifashion.php?p=addtocart&id=<?php echo $row_sptuongtu1['MaSanPham'] ?>"><button type="submit" class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Thêm vào giỏ hàng</button></a>
											</div>
										</div>
										<?php
											}
										?>
									</div>
								</div>
								<div class="c-product-desc c-bg-grey c-opt-2">
									<div class="c-product-tab-container">
										<?php
												$sptuongtu2 = sptuongtu2($row_chitiet['TenSanPham']);
												while($row_sptuongtu2=mysqli_fetch_array($sptuongtu2)){
											?>
										<div class"row">
											<div class="col-md-6">
												<div class="c-content-title-1">
													<h3 class="c-font-uppercase c-font-bold c-right"><?php echo $row_sptuongtu2['TenSanPham']  ?></h3>
													<div class="c-line-right"></div>
												</div>
												<p class="c-right">
													<?php echo $row_sptuongtu2['Mota']  ?>
												</p>
												<br>
												<a href="aitifashion.php?p=addtocart&id=<?php echo $row_sptuongtu2['MaSanPham'] ?>"><button class="btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square">Thêm vào giỏ hàng</button></a>
											</div>
											<div class="col-md-6">
												<img src="../admin/uploads/sanpham/<?php echo $row_sptuongtu2['IMG1']  ?>" />
											</div>
										</div>
										<?php
											}
										?>
									</div>
								</div>
							</div>
							

							<div role="tabpanel" class="tab-pane fade" id="tab-2">
								<div class="c-product-tab-container">
									<p class="c-center"><strong>Sizes:</strong> <?php echo $row_chitiet['Size'] ?></p><br>
									<p class="c-center"><strong>Colors:</strong> <?php echo $row_chitiet['Mau'] ?></p><br />
								</div>
								<div class="c-product-tab-meta-bg c-bg-grey c-center">
									<div class="c-product-tab-container">
										<p class="c-product-tab-meta"><strong>MÃ SẢN PHẨM:</strong> #<?php echo $row_chitiet['MaSanPham'] ?></p>
										
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab-3">
								<div class="c-product-tab-container">
									<h3 class="c-font-uppercase c-font-bold c-font-22 c-center c-margin-b-40 c-margin-t-40">ĐÁNH GIÁ CỦA <?php echo $row_chitiet['TenSanPham'] ?></h3>
									<div class="row">
										<div class="col-xs-6">
											<div class="c-user-avatar">
												<img src="../assets/base/img/content/avatars/team1.jpg" />
											</div>
											<div class="c-product-review-name">
												<h3 class="c-font-bold c-font-24 c-margin-b-5">Steve</h3>
												<p class="c-date c-theme-font c-font-14">July 4, 2015</p>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="c-product-rating c-right">
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star-half-o c-font-red"></i>
											</div>
										</div>
									</div>
									<div class="c-product-review-content">
										<p>
											Lorem ipsum dolor sit amet, consectetuer
											adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
											magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
										</p>
									</div>
									<div class="row c-margin-t-40">
										<div class="col-xs-6">
											<div class="c-user-avatar">
												<img src="../assets/base/img/content/avatars/team12.jpg" />
											</div>
											<div class="c-product-review-name">
												<h3 class="c-font-bold c-font-24 c-margin-b-5">John</h3>
												<p class="c-date c-theme-font c-font-14">July 4, 2015</p>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="c-product-rating c-right">
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star-half-o c-font-red"></i>
											</div>
										</div>
									</div>
									<div class="c-product-review-content">
										<p>
											Lorem ipsum dolor sit amet, consectetuer
											adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
											magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
										</p>
									</div>
									<div class="row c-margin-t-40">
										<div class="col-xs-6">
											<div class="c-user-avatar">
												<img src="../assets/base/img/content/avatars/team8.jpg" />
											</div>
											<div class="c-product-review-name">
												<h3 class="c-font-bold c-font-24 c-margin-b-5">Alice</h3>
												<p class="c-date c-theme-font c-font-14">July 4, 2015</p>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="c-product-rating c-right">
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star c-font-red"></i>
												<i class="fa fa-star-half-o c-font-red"></i>
											</div>
										</div>
									</div>
									<div class="c-product-review-content">
										<p>
											Lorem ipsum dolor sit amet, consectetuer
											adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
											magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
										</p>
									</div>
									<div class="c-product-review-input">
										<h3 class="c-font-bold c-font-uppercase">Submit your Review</h3>
										<p class="c-review-rating-input">Rating:
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
											<i class="fa fa-star-o"></i>
										</p>
										<textarea></textarea>
										<button class="btn c-btn c-btn-square c-theme-btn c-font-bold c-font-uppercase c-font-white">Submit Review</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-2 -->
				<!-- END: PAGE CONTENT -->
			</div>
		</div>
	<?php
		}
	?>