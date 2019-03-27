<?php
  
  include ("../../../lib/dbCon.php");
  $conn = connect();
  if(isset($_POST['dangnhap'])){
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $query = "SELECT*FROM USER WHERE taikhoan = '$taikhoan'";
                $taikhoan_ktt = mysqli_query($conn,$query);
                
                if(count(mysqli_fetch_array($taikhoan_ktt))==0){
                  echo "Tài khoản không tồn tại";
                }
                $matkhau_md5 = md5($matkhau);
                $query_password = "SELECT*FROM USER WHERE TaiKhoan = '$taikhoan' and MatKhau = '$matkhau_md5' and PhanQuyen = '1'";
                $quyen = mysqli_query($conn,$query_password);
                //$row_quyen = mysqli_fetch_array($quyen);
                if(mysqli_num_rows($quyen)==1){
                  $_SESSTION["admin"]+=1;
                  //echo $_SESSTION["admin"];
                  header("location: ../../../admin/index.php");
                }
                else{
                  header("location: ../../../admin/includes/login/login.php?error=1");
                }
              }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from fox-admin-templates.multipurposethemes.com/foxadmin-minimal/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 02:19:10 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Aiti Admin - Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../../assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="../../assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="../../css/master_style.css">

	<!-- foxadmin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="../../css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index-2.html"><b>Aiti</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Đăng nhập để quản lý aiti Studio</p>

    <form action="" method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="text" name="taikhoan" class="form-control" placeholder="Tài khoản">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="matkhau" class="form-control" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-6">
         <div class="fog-pwd">
          	<a href="javascript:void(0)"><i class="ion ion-locked"></i> QUÊN MẬT KHẨU?</a><br>
          </div>
        </div>
        <div class="col-6">
         <div class="fog-pwd">
            <?php
              if(isset($_GET['error'])==true){
                echo "<p>Sai thông tin đăng nhập hoặc bạn không có quyền truy cập</p>";  
              }
              
            ?>
            <br>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" name="dangnhap" class="btn btn-info btn-block btn-flat margin-top-10">ĐĂNG NHẬP</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
    </div>
    <!-- /.social-auth-links -->

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="../../assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from fox-admin-templates.multipurposethemes.com/foxadmin-minimal/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Dec 2018 02:19:10 GMT -->
</html>
