<?php
    if(isset($_POST["create"])){
        $tensanpham = $_POST["tensanpham"];
        $gia=$_POST['gia'];
            settype($gia, "int");
        $khuyenmai=$_POST['khuyenmai'];
        $mota = $_POST["mota"];
        $size=$_POST['size'];
            settype($size, "int");
        $mau=$_POST['mau'];
        $soluong=$_POST['soluong'];
            settype($soluong, "int");

        
        $meta = utf8tourl($tensanpham);

        $hide = $_POST["trangthai"];
            settype($hide, "int");
        $optionloaisanpham=$_POST['optionloaisanpham'];
            settype($optionloaisanpham, "int");
        $ngaytao = date('Y-m-d H:i:s');
        $ngaycapnhat = null;
        // code thêm hình
        $hinh1 = $_FILES['hinh1']['name'];
        $hinh1_tmp = $_FILES['hinh1']['tmp_name'];
        $name1 = $hinh1."".'-'."". date('Y-M-D');
            move_uploaded_file($hinh1_tmp, 'uploads/sanpham/'.$name1);

            // hết code thêm hình
        $hinh2 = $_FILES['hinh2']['name'];
        $hinh2_tmp = $_FILES['hinh2']['tmp_name'];
        $name2 = $hinh2."".'-'."". date('Y-M-D');
            move_uploaded_file($hinh2_tmp, 'uploads/sanpham/'.$name2);

        $hinh3 = $_FILES['hinh3']['name'];
        $hinh3_tmp = $_FILES['hinh3']['tmp_name'];
        $name3 = $hinh3."".'-'."". date('Y-M-D');
        move_uploaded_file($hinh3_tmp, 'uploads/sanpham/'.$name3);

        $hinh4 = $_FILES['hinh4']['name'];
        $hinh4_tmp = $_FILES['hinh4']['tmp_name'];
        $name4 = $hinh4."".'-'."". date('Y-M-D');
            move_uploaded_file($hinh4_tmp, 'uploads/sanpham/'.$name4);
            
        $sqli = "INSERT INTO sanpham VALUES(null,'$tensanpham','$gia','$khuyenmai','$mota','$size','$mau','$soluong','$meta','$hide','$optionloaisanpham','$ngaytao','$ngaycapnhat','$name1','$name2','$name3','$name4')";
        mysqli_query($conn,$sqli);
        //header('index.php?p=loaisanpham');
?>
<html>
<head>
    <title>Thêm thành công...</title>
    <meta http-equiv="refresh" 
        content="0;URL=/aitiphoto.com/admin/index.php?p=sanpham">
</head>
<body>
    
</body>
</html>



<?php
}
 else{
?>

    <section class="content-header">
      <h1>
        SẢN PHẨM
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Forms</a></li>
        <li class="breadcrumb-item active">Form Validation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="card-title">THÊM MỚI</h3>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
                <form novalidate action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <h5>Tên sản phẩm <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="tensanpham" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Trường này <code>BẮT BUỘC</code> Vui lòng nhập thông tin.</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Gía <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="gia" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Trường này <code>BẮT BUỘC</code> Vui lòng nhập thông tin.</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Khuyến mãi <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea  name="khuyenmai" id="textarea" class="form-control" required placeholder=""></textarea> </div> </div>
                    </div>
                    <div class="form-group" style="padding-left: 16px">
                        <h5>Mô tả <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea  name="mota" id="textarea1" class="form-control" required placeholder=""></textarea> </div> </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 1 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="hinh1" class="form-control" required> </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 2 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="hinh2" class="form-control" required> </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 3 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="hinh3" class="form-control" required> </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 4 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="hinh4" class="form-control" required> </div>
                    </div>

                    <div class="form-group">
                        <h5>Size<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="" name="size" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    <div class="form-group">
                        <h5>Màu<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="" name="mau" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    
                    <div class="form-group">
                        <h5>Số lượng<span class="text-danger">*</span></h5>
                            <input type="" name="soluong" class="form-control" required data-validation-required-message="This field is required"> 
                    </div>

                    <div class="col-md-6">
                            <div class="form-group">
                                <h5>Trạng thái <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <fieldset>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" value="1" name="trangthai" required id="styled_radio_inline1" class="custom-control-input" checked="checked"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Hiện</span> </label>
                                    </fieldset>
                                    <fieldset>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" value="0" name="trangthai" id="styled_radio_inline2" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Ẩn</span> </label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <h5>Chọn loại sản phẩm <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="optionloaisanpham" id="select" required class="form-control">
                                <option value="">Chọn loại sản phẩm</option>
                                <?php
                                    $loaisanpham = DSloaisanpham();
                                    while($row_loaisanpham = mysqli_fetch_array($loaisanpham))
                                    {
                                ?>
                                    <option value="<?php echo $row_loaisanpham['MaLoaiSanPham'] ?>"><?php echo $row_loaisanpham['TenLoaiSanPham'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="text-xs-right">
                        <button type="submit" name="create" class="btn btn-info">Thêm mới</button>
                    </div>
                </form>
                
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
<?php
    }
?>