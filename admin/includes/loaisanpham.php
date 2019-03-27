<!-- lấy danh sách thông tin loại sản phẩm -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Loại sản phẩm
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
            

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Mã loại SP</th>
                        <th>Tên loại SP</th>
                        
                        <th>Meta</th>
                        <th>Ẩn</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $loaisanpham = DSloaisanpham();
                        while ( $row_loaisanpham = mysqli_fetch_array($loaisanpham)) 
                        {
                            ?>
                    <tr>
                        <td><?php echo $row_loaisanpham['MaLoaiSanPham'] ?></td>
                        <td><?php echo $row_loaisanpham['TenLoaiSanPham'] ?></td>
                        
                        <td><?php echo $row_loaisanpham['Meta'] ?></td>
                        <td>
                            <?php
                                if($row_loaisanpham['hide']==1)
                                    echo "Hiện";
                                else
                                    echo "Ẩn";
                            ?>
                        </td>
                        <td><?php echo $row_loaisanpham['NgayTao'] ?></td>
                        <td><?php echo $row_loaisanpham['NgayCapNhat'] ?></td>
                        <td>
                            <a href="index.php?ac=createloaisanpham"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-medkit"></i></button></a>
                            <a href="index.php?ac=updateloaisanpham&id=<?php echo $row_loaisanpham['MaLoaiSanPham'] ?>"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-edit"></i></button></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Mã loại SP</th>
                        <th>Tên loại SP</th>
                       
                        <th>Meta</th>
                        <th>Ẩn</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Export Data Table</h3>
              <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
