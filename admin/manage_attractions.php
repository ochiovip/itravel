<!-- Header. -->
<?php include("header.php"); ?>

<!-- Connect DB. -->
<?php include("../secure/condb.php"); ?>

<!-- DataTables -->
<link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<!-- Left Menu. -->
<?php include("left-menu.php") ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>จัดการข้อมูลสถานที่ท่องเที่ยว</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">หน้าแรก</a></li>
              <li class="breadcrumb-item active">จัดการข้อมูลสถานที่ท่องเที่ยว</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Start Container fluid. -->
        <div class="container-fluid">

            <!-- Start table row. -->
            <div class="row">

                <!-- Start col-12. -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">จัดการข้อมูลสถานที่ท่องเที่ยว</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body">

                            <a class="btn btn-md btn-success" href="frm_add_attraction.php"><i class="fa fa-plus-square"></i> เพิ่มข้อมูล</a>
                            
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>AttrID</th>
                                        <th>ชื่อสถานที่ท่องเที่ยว</th>
                                        <th>จังหวัด</th>
                                        <th>รูปภาพหลัก</th>
                                        <th>Is Active</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php 
                                        $sql = "SELECT 
                                                    a.*,
                                                    b.provinceName,
                                                    c.filename
                                                    FROM attraction AS a 
                                                    LEFT JOIN province AS b
                                                    ON a.provinceCode = b.provinceCode
                                                    LEFT JOIN attraction_attachment AS c
                                                    ON a.attrID = c.attrID
                                                    WHERE c.isFirstImage = 1
                                                ";
                                        $result = mysqli_query($condb, $sql);
                                        $count = 1;
                                        while($rows = mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td><?php echo $rows["attrID"]; ?></td>
                                        <td><?php echo $rows["attrName"]; ?></td>
                                        <td><?php echo $rows["provinceName"]; ?></td>
                                        <td>
                                            <a href="../upload/attraction_attachment/<?php echo $rows["filename"]; ?>" target="_blank">
                                                <img 
                                                src="../upload/attraction_attachment/<?php echo $rows["filename"]; ?>" 
                                                class="img img-thumbnail" 
                                                style="width: 50px; height: 50px;"
                                                >
                                            </a>
                                        </td>
                                        <td class="text-bold">
                                            <?php 

                                                if($rows["isActive"] == 1){
                                                    echo "Active";
                                                }else{
                                                    echo "Not Active";
                                                }
                                                
                                            ?>
                                        </td>
                                        <td>

                                            <a class="btn btn-sm btn-warning" 
                                                href="frm_edit_attraction.php?id=<?php echo $rows["id"]; ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a class="btn btn-sm btn-danger" 
                                                href="delete_attraction.php?id=<?php echo $rows["id"]; ?>"
                                                onclick="return confirm('คุณแน่ใจที่ต้องการลบข้อมูล ?')">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                        </td>
                                    </tr>

                                    <?php } ?>
                                
                                </tbody>
                            </table>

                        </div>
                        <!-- End of card-body. -->
                        
                        <div class="card-footer">
                            Footer
                        </div>
                        
                    </div>

                </div>
                <!-- End of col-12. -->

            </div>
            <!-- End of table row. -->

        </div>
        <!-- End of Container fluid. -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Footer. -->
<?php include("footer.php"); ?>

<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>

    $(document).ready(function(){

        //Convert data to datatable.
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });

</script>

