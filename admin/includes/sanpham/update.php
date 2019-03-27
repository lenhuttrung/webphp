<?php
    $id = $_GET["id"];
    $sanpham =sanphambyid($id);
    $row_sanpham = mysqli_fetch_array($sanpham);

    if(isset($_POST["update"])){
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
       
        $ngaycapnhat = date('Y-m-d H:i:s');

        if($_FILES['hinh1']['name']==""){
          $hinh1 = $row_sanpham['IMG1'];
          $name1 = $hinh1;  
        }
        else{
            $hinh1 = $_FILES['hinh1']['name'];
            $hinh1_tmp = $_FILES['hinh1']['tmp_name'];
            $name1 = $hinh1."".'-'."". date('Y-M-D');
            move_uploaded_file($hinh1_tmp, 'uploads/sanpham/'.$name1);
        }
        if($_FILES['hinh2']['name']==""){
          $hinh2 = $row_sanpham['IMG2'];
          $name2 = $hinh2;  
        }
        else{
            $hinh2 = $_FILES['hinh2']['name'];
            $hinh2_tmp = $_FILES['hinh2']['tmp_name'];
            $name2 = $hinh2."".'-'."". date('Y-M-D');
            move_uploaded_file($hinh2_tmp, 'uploads/sanpham/'.$name2);
        }
        if($_FILES['hinh3']['name']==""){
          $hinh3 = $row_sanpham['IMG3'];
          $name3 = $hinh3;  
        }
        else{
            $hinh3 = $_FILES['hinh3']['name'];
            $hinh3_tmp = $_FILES['hinh3']['tmp_name'];
            $name3 = $hinh3."".'-'."". date('Y-M-D');
            move_uploaded_file($hinh3_tmp, 'uploads/sanpham/'.$name3);
        }
        if($_FILES['hinh4']['name']==""){
          $hinh4 = $row_sanpham['IMG4'];
          $name4 = $hinh4;  
        }
        else{
            $hinh4 = $_FILES['hinh4']['name'];
            $hinh4_tmp = $_FILES['hinh4']['tmp_name'];
            $name4 = $hinh4."".'-'."". date('Y-M-D');
            move_uploaded_file($hinh4_tmp, 'uploads/sanpham/'.$name4);
        }
        // code thêm hình
        
        
            
        $sqli = "UPDATE sanpham SET TenSanPham = '$tensanpham',Gia='$gia',khuyenmai='$khuyenmai',Mota='$mota',Size='$size',Mau='$mau',SoLuong='$soluong',Meta='$meta',hide='$hide',MaLoaiSanPham='$optionloaisanpham',NgayCapNhat='$ngaycapnhat',IMG1='$name1',IMG2='$name2',IMG3='$name3',IMG4='$name4' WHERE MaSanPham = $id";
        mysqli_query($conn,$sqli);
        
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
          <h3 class="card-title">Cập nhật</h3>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
                <form novalidate  action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <h5>Tên sản phẩm <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="tensanpham" value="<?php echo $row_sanpham['TenSanPham'] ?>" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Trường này <code>BẮT BUỘC</code> Vui lòng nhập thông tin.</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Gía <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" value="<?php echo $row_sanpham['Gia'] ?>" name="gia" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Trường này <code>BẮT BUỘC</code> Vui lòng nhập thông tin.</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Khuyến mãi <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea  name="khuyenmai"  id="textarea" class="form-control" required placeholder=""><?php echo $row_sanpham['khuyenmai'] ?></textarea> </div> </div>
                    </div>
                    <div class="form-group" style="padding-left: 16px">
                        <h5>Mô tả <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea  name="mota" id="textarea1" class="form-control" required placeholder=""><?php echo $row_sanpham['Mota'] ?></textarea> </div> </div>
                    </div>
                    
                    <div class="form-group">
                        <h5>Size<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="size" value="<?php echo $row_sanpham['Size'] ?>"  class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    <div class="form-group">
                        <h5>Màu<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="" name="mau" value="<?php echo $row_sanpham['Mau'] ?>" class="form-control" required data-validation-required-message="This field is required"> </div>
                    </div>
                    
                    <div class="form-group">
                        <h5>Số lượng<span class="text-danger">*</span></h5>
                            <input type="text" name="soluong" value="<?php echo $row_sanpham['SoLuong'] ?>"  class="form-control" required data-validation-required-message="This field is required"> 
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
                                    <option <?php if($row_sanpham['MaLoaiSanPham'] == $row_loaisanpham['MaLoaiSanPham']) echo "selected='selected'"; ?> value="<?php echo $row_loaisanpham['MaLoaiSanPham'] ?>"><?php echo $row_loaisanpham['TenLoaiSanPham'] ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 1 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="hinh1" class="form-control" required>
                            <img src="uploads/sanpham/<?php echo $row_sanpham['IMG1'] ?>" style="width: 10%; height: 10%;">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 2 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="hinh2" class="form-control" required>
                            <img src="uploads/sanpham/<?php echo $row_sanpham['IMG2'] ?>" style="width: 10%; height: 10%;">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 3 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="hinh3" class="form-control" required>
                            <img src="uploads/sanpham/<?php echo $row_sanpham['IMG3'] ?>" style="width: 10%; height: 10%;">
                        </div>
                    </div>
                    <div class="form-group">
                        <h5>Hình 4 <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="file" name="hinh4" class="form-control" required>
                            <img src="uploads/sanpham/<?php echo $row_sanpham['IMG4'] ?>" style="width: 10%; height: 10%;">
                        </div>
                    </div>
                    
                    <div class="text-xs-right">
                        <button type="submit" name="update" class="btn btn-info">Cập nhật</button>
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