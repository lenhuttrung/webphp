<?php
    if(isset($_POST["create"])){
        $tenloaisanpham = $_POST["tenloaisanpham"];
        $mota = $_POST["mota"];
        $meta = utf8tourl($tenloaisanpham);
        $hide = $_POST["trangthai"];
            settype($trangthai, "int");
        $ngaytao = date('Y-m-d H:i:s');
        $ngaycapnhat = null;
        $sqli = "INSERT INTO LOAISANPHAM VALUES(null,'$tenloaisanpham','$mota','$meta','$hide','$ngaytao','$ngaycapnhat')";
        mysqli_query($conn,$sqli);
        //header('index.php?p=loaisanpham');
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
                        <h5>Tên loại sản phẩm <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="tenloaisanpham" class="form-control" required data-validation-required-message="This field is required"> </div>
                        <div class="form-control-feedback"><small>Trường này <code>BẮT BUỘC</code> Vui lòng nhập thông tin.</small></div>
                    </div>
                    <div class="form-group">
                        <h5>Mô tả <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <textarea  name="mota" id="textarea" class="form-control" required placeholder=""></textarea> </div>
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
                    
                    
                    <div class="text-xs-right">
                        <button type="submit" name="create" class="btn btn-info">Thêm mớis</button>
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