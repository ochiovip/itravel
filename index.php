<!-- Header. -->
<?php include("header.php"); ?>

<!-- Left Menu. -->
<?php include("left-menu.php") ?>

<?php include("secure/condb.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>หน้าแรก</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">หน้าแรก</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Start row. -->
      <div class="row">

        <!-- Start col-12. -->
        <div class="col-12">

          <?php
            $sql = "SELECT
                      a.*,
                      b.filename,
                      c.provinceName
                      FROM
                      attraction AS a
                      LEFT JOIN attraction_attachment AS b
                      ON a.attrID = b.attrID
                      LEFT JOIN province AS c
                      ON a.provinceCode = c.provinceCode
                      WHERE b.isFirstImage = 1
                    ";
            $result = mysqli_query($condb, $sql);
            while($rows = mysqli_fetch_array($result)){
          ?>
        
            <!-- Start card. -->
            <div class="card">

              <div class="card-header">

                <h3 class="card-title"><?php echo $rows["attrName"]; ?></h3>

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
                
                <div class="row">

                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <h5><?php echo $rows["attrName"]; ?></h5>
                    <p>จังหวัด: <span class="text-bold"><?php echo $rows["provinceName"]; ?></span></p>

                    <div class="img img-thumbnail">
                      <a href="upload/attraction_attachment/<?php echo $rows["filename"]; ?>" target="_blank">
                        <img src="upload/attraction_attachment/<?php echo $rows["filename"]; ?>"
                              class="rounded img img-responsive img-thumbnail"
                              style="width: 250px;
                                      height: 250px;
                                      object-fit: cover;
                                      display: block;
                                      margin: auto">
                      </a>
                    </div>

                  </div>

                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                    <div class="card">
                      <div class="card-header">รูปภาพเพิ่มเติม</div>

                      <div class="card-body">

                        <!-- Start row. -->
                        <div class="row">

                          <?php
                            $attrID = $rows["attrID"];
                            $sql_additional_image = "SELECT 
                                            * 
                                            FROM attraction_attachment 
                                            WHERE attrID = '$attrID'
                                            AND isFirstImage = 0
                                            ORDER BY date DESC, time DESC
                                          ";
                            $result_additional_image = mysqli_query($condb, $sql_additional_image);
                            while($rows_additional_image = mysqli_fetch_array($result_additional_image)){
                          ?>

                          <div class="col-4">
                            <a href="upload/attraction_attachment/<?php echo $rows_additional_image["filename"]; ?>" target="_blank">
                              <img src="upload/attraction_attachment/<?php echo $rows_additional_image["filename"]; ?>"
                                    class="rounded img img-responsive img-thumbnail"
                                    style="width: 250px;
                                            height: 250px;
                                            object-fit: cover;
                                            display: block;
                                            margin: auto">
                            </a>
                          </div>

                          <?php } //End of inner while loop. ?>

                        </div>
                        <!-- End of row. -->

                      </div>

                    </div>

                    <div class="card p-2"><?php echo $rows["attrDetail"]; ?></div>

                  </div>

                </div>

              </div>

              <div class="card-footer"></div>

            </div>
            <!-- End of card. -->

          <?php } //End of while loop. ?>

        </div>
        <!-- End of col-12. -->

      </div>
      <!-- End of row. -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Footer. -->
<?php include("footer.php"); ?>
