<!-- lấy danh sách thông tin loại sản phẩm -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sản phẩm
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active">Data tables</li>
      </ol>
    </section>
    <div class="controls" style="width: 200px;margin-left: 700px;">
                            <select name="optionloaisanpham" id="selectloaisanpham" required class="form-control">
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
                        <th>Mã  SP</th>
                        <th>Tên SP</th>
                        <th>Gía</th>
                        <th>Số lượng</th>
                        <th>Ẩn</th>
                        <th>Tên loại sản phẩm</th>
                        <th>IMG_1</th>
                        <th>IMG_2</th>
                        <th>IMG_3</th>
                        <th>IMG_4</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sanpham = DSsanpham();
                        while($row_sanpham=mysqli_fetch_array($sanpham)){
                    ?>
                    <tr>
                        <td><?php echo $row_sanpham['MaSanPham'] ?></td>
                        <td><?php echo $row_sanpham['TenSanPham'] ?></td>
                        <td><?php echo $row_sanpham['Gia'] ?></td>
                        
                        <td><?php echo $row_sanpham['SoLuong'] ?></td>
                        <td>
                            <?php
                                if($row_sanpham['hide']==1)
                                    echo "Hiện";
                                else
                                    echo "Ẩn";
                            ?>
                        </td>
                        <td><?php echo $row_sanpham['tenloaisanpham'] ?></td>
                        <td><img src="uploads/sanpham/<?php echo $row_sanpham['IMG1'] ?>" style="width: 50%; height: 40%;"></td>
                        <td><img src="uploads/sanpham/<?php echo $row_sanpham['IMG2'] ?>" style="width: 50%; height: 40%;"></td>
                        <td><img src="uploads/sanpham/<?php echo $row_sanpham['IMG3'] ?>" style="width: 50%; height: 40%;"></td>
                        <td><img src="uploads/sanpham/<?php echo $row_sanpham['IMG4'] ?>" style="width: 50%; height: 40%;"></td>
                        <td>
                            <a href="index.php?ac=createsanpham"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-medkit"></i></button></a>
                            <a href="index.php?ac=updatesanpham&id=<?php echo $row_sanpham['MaSanPham'] ?>"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-edit"></i></button></a>
                            <a href="index.php?ac=detailsanpham&id=<?php echo $row_sanpham['MaSanPham'] ?>"><button class="btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-file-text"></i></button></a>
                        </td>
                        <?php
                            }
                        ?>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                         <th>Mã  SP</th>
                        <th>Tên SP</th>
                        <th>Gía</th>
                        
                        <!-- <th>Size</th> -->
                        <!-- <th>Màu</th> -->
                        <th>Số lượng</th>
                        <!-- <th>Meta</th> -->
                        <th>Ẩn</th>
                        <th>Mã loại sản phẩm</th>
                        <!-- <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th> -->
                        <th>IMG_1</th>
                        <th>IMG_2</th>
                        <th>IMG_3</th>
                        <th>IMG_4</th>
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
