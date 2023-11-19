<!-- Header. -->
<?php include("header.php"); ?>

<!-- summernote -->
<link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">

<!-- Left Menu. -->
<?php include("left-menu.php") ?>

<?php include("../secure/condb.php"); ?>

<?php
    $id = $_GET["id"];
    $sql = "SELECT 
                    a.*,
                    b.filename,
                    c.provinceName
                    FROM attraction AS a
                    LEFT JOIN attraction_attachment AS b
                    ON a.attrID = b.attrID
                    LEFT JOIN province AS c
                    ON a.provinceCode = c.provinceCode
                    WHERE a.id = '$id'
                    AND
                    b.isFirstImage = 1
            ";
    $result = mysqli_query($condb, $sql);
    $row = mysqli_fetch_array($result);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>แก้ไขข้อมูลสถานที่ท่องเที่ยว</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">หน้าแรก (ผู้ดูแลระบบ)</a></li>
              <li class="breadcrumb-item"><a href="manage_attractions.php">จัดการข้อมูลสถานที่ท่องเที่ยว</a></li>
              <li class="breadcrumb-item active">แก้ไขข้อมูลสถานที่ท่องเที่ยว</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Start row. -->
      <div class="row">

        <!-- Left Section. -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

          <div class="card">

            <form id="form1" method="post" action="edit_attraction.php" enctype="multipart/form-data">

              <div class="card-header">
                <h3 class="card-title">แก้ไขข้อมูลสถานที่ท่องเที่ยว</h3>

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

                <!-- Hidden. -->
                <input type="hidden" id="id" name="id" value="<?php echo $row["id"]; ?>">
                <input type="hidden" id="attrID" name="attrID" value="<?php echo $row["attrID"]; ?>">
                <input type="hidden" id="old_first_image_filename" name="old_first_image_filename" value="<?php echo $row["filename"]; ?>">

                <div class="form-group">
                  <label for="attrName"><span class="text-danger">*</span> ชื่อสถานที่ท่องเที่ยว</label>
                  <input type="text" class="form-control" id="attrName" name="attrName" value="<?php echo $row["attrName"]; ?>" placeholder="ชื่อสถานที่ท่องเที่ยว" required>
                </div>

                <div class="form-group">
                  <label for="attrDetail">รายละเอียดสถานที่ท่องเที่ยว</label>
                  <textarea class="form-control" id="attrDetail" name="attrDetail" placeholder="รายละเอียดสถานที่ท่องเที่ยว"></textarea>
                </div>


                <div class="form-group">
                  <label for="provinceCode"><span class="text-danger">*</span> จังหวัด</label>
                  <select class="form-control" id="provinceCode" name="provinceCode" required>
                    
                    <option value="<?php echo $row["provinceCode"]; ?>" selected><?php echo $row["provinceName"]; ?></option>
                    <option value="">กรุณาเลือกรายการ</option>

                    <?php
                        $sql1 = "SELECT * FROM province";
                        $result1 = mysqli_query($condb, $sql1);
                        while($rows1 = mysqli_fetch_array($result1)){
                    ?>
                        <option value="<?php echo $rows1["provinceCode"]; ?>"><?php echo $rows1["provinceName"]; ?></option>
                    <?php } //End of while loop. ?>
                    
                  </select>
                </div>

                <div class="form-group">
                    <label for="filename">รูปภาพหลัก</label>
                    <div class="img img-thumbnail col-4">
                    <a href="../upload/attraction_attachment/<?php echo $row["filename"]; ?>" target="_blank">
                        <img src="../upload/attraction_attachment/<?php echo $row["filename"]; ?>" class="img img-thumbnail" style="width: 150px; height: 150px;">
                    </a>
                    </div>
                  <input type="file" class="form-control" id="filename" name="filename" placeholder="รูปภาพหลัก" accept="image/*">
                </div>

              </div>

              <div class="card-footer text-right">
                  <button type="submit" class="btn btn-md btn-success"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
              </div>

            </form>

          </div>

        </div>
        <!-- End of left section. -->

        <!-- Right Section. -->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          
          <!-- Form upload image. -->
          <div class="card">

            <form id="form2" method="post" action="add_attraction_image.php" enctype="multipart/form-data">

              <!-- Hidden. -->
              <input type="hidden" id="a_id" name="a_id" value="<?php echo $row["id"]; ?>">
              <input type="hidden" id="a_attrID" name="a_attrID" value="<?php echo $row["attrID"]; ?>">

              <div class="card-header">
                <h3 class="card-title">รูปภาพเพิ่มเติม</h3>

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


                <div class="form-group">
                  <label for="additional_filename"><span class="text-danger">*</span> อัพโหลดรูปภาพ</label>
                  <input type="file" class="form-control" id="additional_filename" name="additional_filename" placeholder="รูปภาพเพิ่มเติม" accept="image/*" required>
                </div>

              </div>

              <div class="card-footer text-right">
                  <button type="submit" class="btn btn-md btn-success"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
              </div>

            </form>

          </div>
          <!-- End of form upload image. -->

          <!-- Attraction Images. -->
          <div class="card">

            <div class="card-header">
              <h3 class="card-title">รูปภาพเพิ่มเติม</h3>

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

              <div class="table-responsive">
                <table class="table table-resposive">

                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>รูปภาพ</th>
                      <th>เครื่องมือ</th>
                    </tr>
                  </thead>

                  <tbody>
                      
                    <?php
                      $attrID = $row["attrID"];
                      $count = 1;
                      $sql_attachment = "SELECT * FROM attraction_attachment
                                            WHERE attrID = '$attrID'
                                            AND isFirstImage = 0
                                            ORDER BY date DESC, time DESC
                                          ";
                      $result_attachment = mysqli_query($condb, $sql_attachment);
                      while($rows_attachment = mysqli_fetch_array($result_attachment)){
                    ?>

                      <tr>
                        <td><?php echo $count++; ?></td>
                        <td>
  
                          <a href="#" target="_blank">
                            <img src="../upload/attraction_attachment/<?php echo $rows_attachment["filename"] ?>" 
                                    class="img img-thumbnail" 
                                    style="width: 200px;
                                            height: 200px;
                                            object-fit: cover;
                                            display: block;
                                            margin: auto;
                                            "
                            >
                          </a>
                      
                        </td>
                        <td>
                          <a class="btn btn-sm btn-danger" 
                              href="delete_attraction_image.php?id=<?php echo $rows_attachment["id"]; ?>&a_id=<?php echo $row["id"]; ?>"
                              onclick="return confirm('คุณแน่ใจที่ต้องการลบข้อมูล ?')">
                              <i class="fa fa-trash"></i>
                          </a>
                        </td>
                      </tr>

                    <?php } //End of while loop. ?>

                  </tbody>

                </table>
              </div>

            </div>

            <div class="card-footer text-right"></div>


          </div>
          <!-- End of Attraction Images. -->

        </div>
        <!-- End of right section. -->

      </div>
      <!-- End of row. -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Footer. -->
<?php include("footer.php"); ?>

<!-- Summernote -->
<script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>

    $(document).ready(function(){

        $("#attrDetail").summernote();

        $("#attrDetail").summernote('code', '<?php echo $row["attrDetail"]; ?>');

    });

</script>