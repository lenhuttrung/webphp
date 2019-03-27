<?php
  $id = $_GET['id'];
  $detail = Chitietsanpham($id);
  $row_sanpham = mysqli_fetch_array($detail);
?>
<div class="box-body">
          <div class="row">
            <div class="col-12">
                <div class="form-group row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="<?php echo $row_sanpham['MaSanPham'] ?>" id="example-text-input">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['TenSanPham'] ?>" id="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Gía</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['Gia'] ?>" id="">
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Khuyến mãi</label>
                  <div class="col-sm-10">
                    <?php echo $row_sanpham['khuyenmai'] ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Mô tả</label>
                  <div class="col-sm-10">
                    <?php echo $row_sanpham['Mota'] ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Size</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['Size'] ?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Màu</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['Mau'] ?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Số lượng</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['SoLuong'] ?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-date-input" class="col-sm-2 col-form-label">Meta</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['Meta'] ?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Tên loại sản phẩm</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['TenLoaiSanPham'] ?>" >
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Ngày tạo</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['NgayTao'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label  class="col-sm-2 col-form-label">Ngày cập nhật</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="" value="<?php echo $row_sanpham['NgayCapNhat'] ?>" >
                  </div>
                </div>

                <div class="form-group">
                        <h5>Hình 1 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            
                            <img src="uploads/sanpham/<?php echo $row_sanpham['IMG1'] ?>" style="width: 10%; height: 10%;">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 2 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            
                            <img src="uploads/sanpham/<?php echo $row_sanpham['IMG2'] ?>" style="width: 10%; height: 10%;">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 3 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            
                            <img src="uploads/sanpham/<?php echo $row_sanpham['IMG3'] ?>" style="width: 10%; height: 10%;">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 4 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            
                            <img src="uploads/sanpham/<?php echo $row_sanpham['IMG4'] ?>" style="width: 10%; height: 10%;">
                        </div>
                    </div>
                     <div class="text-xs-right">
                        <a href="index.php?p=sanpham"><button type="submit" name="update" class="btn btn-info">Trở về</button></a>
                    </div>