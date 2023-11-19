<!-- Header. -->
<?php include("header.php"); ?>

<!-- summernote -->
<link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">

<!-- Left Menu. -->
<?php include("left-menu.php") ?>

<?php include("../secure/condb.php"); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>เพิ่มข้อมูลสถานที่ท่องเที่ยว</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">หน้าแรก (ผู้ดูแลระบบ)</a></li>
              <li class="breadcrumb-item"><a href="manage_attractions.php">จัดการข้อมูลสถานที่ท่องเที่ยว</a></li>
              <li class="breadcrumb-item active">เพิ่มข้อมูลสถานที่ท่องเที่ยว</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        <form method="post" action="add_attraction.php" enctype="multipart/form-data">

          <div class="card-header">
            <h3 class="card-title">เพิ่มข้อมูลสถานที่ท่องเที่ยว</h3>

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
              <label for="attrName"><span class="text-danger">*</span> ชื่อสถานที่ท่องเที่ยว</label>
              <input type="text" class="form-control" id="attrName" name="attrName" placeholder="ชื่อสถานที่ท่องเที่ยว" required>
            </div>

            <div class="form-group">
              <label for="attrDetail">รายละเอียดสถานที่ท่องเที่ยว</label>
              <textarea class="form-control" id="attrDetail" name="attrDetail" placeholder="รายละเอียดสถานที่ท่องเที่ยว"></textarea>
            </div>


            <div class="form-group">
              <label for="provinceCode"><span class="text-danger">*</span> จังหวัด</label>
              <select class="form-control" id="provinceCode" name="provinceCode" required>
                <option value="" selected>กรุณาเลือกรายการ</option>

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
              <label for="filename"><span class="text-danger">*</span> รูปภาพหลัก</label>
              <input type="file" class="form-control" id="filename" name="filename" placeholder="รูปภาพหลัก" accept="image/*" required>
            </div>

          </div>

          <div class="card-footer text-right">
              <button type="submit" class="btn btn-md btn-success"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
          </div>

        </form>

      </div>

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

    });

</script>