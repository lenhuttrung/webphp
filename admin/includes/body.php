<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        aiti Photo
        <small>Quản lý</small>
      </h1>
    </section>

    <!-- Main content -->
    <?php
      $conn = connect();
      mysqli_set_charset($conn, 'UTF8');
      
      include('../lib/help.php');
      include ('includes/querylist.php');
      if(isset($_GET["p"]))
      $p = $_GET["p"];
    else
      $p="";
    if(isset($_GET["ac"]))
      $ac = $_GET["ac"];
    else
      $ac = "";

      switch ($p) {
        case 'loaisanpham':
          include ('loaisanpham.php');
          break;
        
        case 'sanpham':
          include ('sanpham.php');
          break;

        case 'slide':
          include ('slide.php');
          break;

        case 'hoadon':
          include ('hoadon.php');
          break;

        case 'lienhe':
          include ('lienhe.php');
          break;

        case 'news':
          include ('news.php');
          break;
        case 'hoanthanh':
          include ('includes/hoadon/hoanthanh.php');
          break;
        case 'chitiethoadon':
          include ('includes/hoadon/chitiethoadon.php');
          break;
        default:
          # code...
          break;
      }

      switch ($ac) {
        case 'createloaisanpham':
          include ('includes/loaisanpham/create.php');
          break;
        
        case 'updateloaisanpham':
          include ('includes/loaisanpham/update.php');
          break;

        case 'createsanpham':
          include ('includes/sanpham/create.php');
          break;

          case 'updatesanpham':
          include ('includes/sanpham/update.php');
          break;
        case 'detailsanpham':
          include ('includes/sanpham/detail.php');
          break;

        case 'createslide':
          include ('includes/slide/create.php');
          break;

        case 'createlienhe':
          include ('includes/lienhe/create.php');
          break;

        case 'updatelienhe':
          include ('includes/lienhe/update.php');
          break;

          case 'createnews':
          include ('includes/news/create.php');
          break;

        case 'updatenews':
          include ('includes/news/update.php');
          break;

        case 'updatethanhtoan':
          include ('includes/hoadon/updatethanhtoan.php');
          break;

        case 'huydonhang':
          include ('includes/hoadon/huydonhang.php');
          break;
        
          case 'updateslide':
          include ('includes/slide/update.php');
          break;

        default:
          # code...
          break;
      }

      
    ?>
    <!-- /.content -->
  </div>
