<?php
    $id = $_GET['id'];
    $loaisanpham = loaisanphambyid($id);
    $row_loaisanpham=mysqli_fetch_array($loaisanpham);
    if(isset($_POST['update'])){
        $tenloaisanpham = $_POST['tenloaisanpham'];
        $mota = $_POST['mota'];
        $meta = utf8tourl($tenloaisanpham);
        $hide = $_POST["trangthai"];
            settype($trangthai, "int");
        $ngaytao = $row_loaisanpham['NgayTao'];
        $ngaycapnhat = date('Y-m-d H:i:s');
        $query = "UPDATE LOAISANPHAM SET TENLOAISANPHAM = '$tenloaisanpham', MOTA ='$mota',META = '$meta',HIDE='$hide', NGAYTAO='$ngaytao' ,NGAYCAPNHAT = '$ngaycapnhat' WHERE MALOAISANPHAM = '$id'";
        mysqli_query($conn,$query);
?>
<html>
<head>
    <title>Thêm thành công...</title>
    <meta http-equiv="refresh" 
        content="0;URL=/aitiphoto.com/admin/index.php?p=loaisanpham">
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
        LOẠI SẢN PHẨM
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
          <h3 class="card-title">Sửa</h3>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
                <form novalidate action="" method="post" enctype="multipart/form-data>
                    <div class="form-group">
                        <h5>Tên loại sản phẩm <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input value="<?php echo $row_loaisanpham['TenLoaiSanPham']; ?>" type="text" name="tenloaisanpham" class="form-control" required data-validation-required-message="This field is required" > </div>
                    </div>
                    <div class="form-group" style="padding-left: 18px;">
                        <h5>Mô tả <span class="text-danger">*</span></h5>
                        <div class="controls">
                            
                            <textarea name="textarea" id="textarea" class="form-control" name="mota" required placeholder=""><?php echo $row_loaisanpham['MoTa']; ?></textarea> </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <h5>Trạng thái <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <fieldset>
                                        <label class="custom-control custom-radio">
                                            <input <?php if($row_loaisanpham['hide']==1) echo "checked = 'checked'" ?> type="radio" name="trangthai" id="trangthai_1" value="1" id="styled_radio_inline1" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Hiện</span> </label>
                                    </fieldset>
                                    <fieldset>
                                        <label class="custom-control custom-radio">
                                            <input <?php if($row_loaisanpham['hide']==0) echo "checked = 'checked'" ?> type="radio" name="trangthai" id="trangthai_0" value="0" id="styled_radio_inline2" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Ẩn</span> </label>
                                    </fieldset>
                                    <div class="form-control-feedback"><small>Chọn <code>   ẨN  </code>để xóa thông tin loại sản phẩm.</small></div>
                                </div>
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