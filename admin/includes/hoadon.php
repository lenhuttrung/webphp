<!-- Status la da thanh toan chua? 0 la chua, 1 la roi -->
<!-- Hide la don hang co bi huy khong? 0 la huy, 1 la doi KH xac nhan tien ship, 2 la da xac nhan -->
<!-- ship la tien ship -->
<!-- Isconfirm -->
<section class="content-header">
      <h1>
        Hóa Đơn
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active">Data tables</li>
      </ol>
</section>
    <!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">   
      <div class="box">
        <div class="box-body">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
        <tr>
          <th>Mã HD</th>
          <th>Khách Hàng</th>
          <th>Ngày mua</th>
          <th>Tổng tiền</th>
          <th>Tiền ship</th>
          <th>Xác nhận</th>
          <td>Tình trạng</td>
          <th>Thao tác</th>
        </tr>
        <?php
          $hoadon = DShoadon();
          while ($row_hoadon = mysqli_fetch_array($hoadon)) 
          {
        ?>
          <tr>
        	  <td><a href="javascript:void(0)">Order #<?php echo $row_hoadon['mahoadon'] ?></a></td>
    			  <td><?php echo $row_hoadon['tenkhachhang'] ?></td>
    			  <td><span class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $row_hoadon['ngaymua'] ?></span> </td>
        	  <td><?php echo number_format($row_hoadon['tongcong']);  ?></td>
    			  <td><?php echo number_format($row_hoadon['ship']);  ?></td>
            <td><span class="
                    <?php
                      if($row_hoadon['hide']==0)
                        echo 'label label-warning';
                      else if($row_hoadon['hide']==1)
                        echo 'label label-primary';
                      else if($row_hoadon['hide']==2)
                        echo 'label label-success';
                    ?>
                    "
                    >
                      <?php 
                      if($row_hoadon['hide'] == 0)
                        echo "Đơn bị hủy";
                      else if ($row_hoadon['hide'] == 1) 
                        echo "Đơn đợi xác nhận";
                        else if($row_hoadon['hide'] == 2)
                          echo "Đơn đã xác nhận"
                      
                      // 0 là hủy đơn -  1 là đơn khi KH vừa xác nhận mua hàng trên web
                      // 2 là khi khách hàng xác nhận qua DT
                      ?>
                  </span></td>
            <td><span class="
                    <?php
                      if($row_hoadon['status']==0)
                        echo 'label label-danger';
                      else 
                        echo 'label label-primary';
                    ?>
                    "
                    >
                    <?php
                      if($row_hoadon['status']==0)
                        echo "CHƯA THANH TOÁN";
                      else
                        echo "ĐÃ THANH TOÁN"
                    ?>    
                  </span></td>
      		  <td>
              <a href="index.php?ac=huydonhang&id=<?php echo $row_hoadon['mahoadon'] ?>"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-book"></i></button></a>

              <a href="index.php?p=chitiethoadon&id=<?php echo $row_hoadon['mahoadon'] ?>"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-edit"></i></button></a>

              <a href="index.php?ac=updatethanhtoan&id=<?php echo $row_hoadon['mahoadon'] ?>"><button type="submit" name="thanhtoan"  class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-get-pocket"></i></button></a>
            </td>
				  </tr>
        <?php
          }
        ?>
        <tfoot>
          <tr>
            <th>Mã HD</th>
            <th>Khách Hàng</th>
            <th>Ngày mua</th>
            <th>Tổng tiền</th>
            <th>Tiền ship</th>
            <th>Xác nhận</th>
            <td>Tình trạng</td>
            <th>Thao tác</th>
          </tr>
        </tfoot>

          </table>
        </div>
      </div>
      
    </div>
  </div>
</section>