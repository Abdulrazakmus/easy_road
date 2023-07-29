<?php 

include 'links.php'; 

require("./Handlers/connection.php");
// session_start();
$driverID = $_SESSION['driverID'];

$stmt = $conn->prepare("SELECT * FROM `driver`, `user`,`driver_violation`,`violation`,`bill` WHERE driver.driver_id = :dvID
AND `driver`.police_man_id = user.user_id
AND driver_violation.driver_id = driver.driver_id
AND violation.violation_id = bill.violation_id
");

$stmt->execute(array(":dvID"=>$driverID));
// unset($_SESSION['driverID']);
$res = $stmt->fetch();

?>


<body class="item-align-center">

  <!-- main container -->
  <div class="container-fluid p-3">

    <div class="row">

      <!-- -----------------------------------------Hii column Hatuitumii--------------------------- -->
      <div class="col-lg-4 col-md-3"></div>


      <div class="col-lg-4 col-md-6">

        <!-- first row which have icons and name on top -->
        <div class="row">

          <div class="col-lg-4 col-md-4 col-4">
            <div class="nav-item">
              <a href="accuse-page-03.php" class="btn btn-primary shadow">
                <i class="fa fa-arrow-left"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-4 text-center">
            <div class="nav-item">
              <a href="home.php"><i class="shadow"> </i> <img src="Assets/img/easy-logo 1.png" height="30px" alt=""></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-4 text-right">
            <div class="nav-item">
              <a href="home.php" class="btn btn-primary shadow">
                <i class="fa fa-home"></i>
              </a>
            </div>
          </div>

        </div>
        <!-- end of the firs row -->

        <hr>
        <div class="text-center ">
          <i class="fa fa-file text-primary"></i>
          <h6>Payment Details</h6>
        </div>
        <hr>

        <!-- ---------------------Details Field-------------------- -->

        <!-- time and by whom row -->
        <hr>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <b> <i class="fa fa-calendar text-primary"></i> Date:</b>
            <input type="text" class="form-control"  value="<?php echo $res['date'] ?>">
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <b> <i class="fa fa-user text-primary"></i> By:</b>
            <input type="text" class="form-control"  value="<?php echo $res['user_name'] ?>">

          </div>

        </div>
        <hr>


        <!-- drivers information rows  -->
        <div class="row mt-3">

          <div class="col-lg-6 col-md-6 col-sm-6">
            <b> <i class="fa fa-user text-primary"></i> Full name:</b>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['name'] ?>">
          </div>

        </div>


        <div class="row mt-3">

          <div class="col-lg-6 col-md-6 col-sm-6">
            <b><i class="fa fa-id-card text-primary"></i> Licence ID:</b>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['license_number'] ?>">
          </div>

        </div>


        <div class="row mt-3">

          <div class="col-lg-3 col-md-3 col-sm-3">
            <b><i class="fa fa-child text-primary"></i> Age:</b>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3">
            <input type="number" class="form-control" id="full-name" value="<?php echo $res['age'] ?>">
          </div>


          <div class="col-lg-3 col-md-3 col-sm-3">
            <b><i class="fas fa-venus-mars text-primary"></i> Gender:</b>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['gender'] ?>">
          </div>
        </div>

        <div class="row mt-3">

          <div class="col-lg-6 col-md-6 col-sm-6">
            <b> <i class="fa fa-user text-primary"></i> Phone Number:</b>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['phone_number'] ?>">
          </div>

        </div>

        <div class="row mt-3">

          <div class="col-lg-6 col-md-6 col-sm-6">
            <b> <i class="fa fa-map-marker text-primary"></i> Adress:</b>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['living_place'] ?>">
          </div>

        </div>
        <hr>


        <!-- Vehicles informations row -->

        <div class="row mt-3">

          <div class="col-lg-3 col-md-3 col-sm-3">
            <b><i class="fa fa-hashtag text-primary"></i>Plate No:</b>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['vehicle_number'] ?>">
          </div>


          <div class="col-lg-3 col-md-3 col-sm-3">
            <b><i class="fa fa-hashtag text-primary"></i> Root No:</b>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['root_number'] ?>">
          </div>
        </div>

        <hr>

        <!-- violation row -->
        <div class="row mt-3">

          <div class="col-lg-6 col-md-6 col-sm-6">
            <b> <i class="fa fa-file text-primary"></i> Violation:</b>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['violation'] ?>">
          </div>

        </div>


        <div class="row mt-3">

          <div class="col-lg-3 col-md-3 col-sm-3">
            <b><i class="fa fa-list-alt text-primary"></i> Type:</b>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['vtype'] ?>">
          </div>


          <div class="col-lg-3 col-md-3 col-sm-3">
            <b><i class="fa fa-ban text-primary"></i> Penalt:</b>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3">
            <input type="text" class="form-control" id="full-name" value="<?php echo $res['penalt'] ?>">
          </div>
        </div>
        <hr>
<!-- control number  -->
<div class="row mt-5">

<div class="col-lg-6 col-md-6 col-sm-6">
  <b> <i class="fa fa-hashtag text-primary"></i> Your Control Number:</b>
</div>

<div class="col-lg-6 col-md-6 col-sm-6">
  <input type="text" class="form-control" id="full-name" value="<?php echo $res['control_number'] ?>">
</div>

</div>

<!-- receipt number  -->
<div class="row mt-3">

<div class="col-lg-6 col-md-6 col-sm-6">
  <b> <i class="fa fa-file text-primary"></i> Enter Reference:</b>
</div>

<div class="col-lg-6 col-md-6 col-sm-6">
  <input type="number" class="form-control" id="full-name" placeholder="enter reference number">
</div>

</div>



    



        <!-- ---------------------End of Details Field-------------------- -->






        <!-- -----------------------footer buttons link--------------------  -->
<hr>
        <footer class="mobile-footer">

          <div class="row">

          <div class="col-lg-4 col-md-4 col-4">
              <a href="#" class="btn btn-primary shadow", style="width: 70px;">
                <i class="fa fa-spinner"></i>
              </a>

              <hr style="width: 70px;">
              <span class="btn-label text-secondary">Generate</span>
            </div>


            <div class="col-lg-4 col-md-4 col-4">
              <a href="#" class="btn btn-primary shadow", style="width: 70px;">
                <i class="fa fa-check"></i>
              </a>

              <hr style="width: 70px;">
              <span class="btn-label text-secondary">Confirm </span>
            </div>



            <div class="col-lg-4 col-md-4 col-4">
              <a href="#" class="btn btn-primary shadow" style="width: 70px;">
              <i class="fa fa-file-export"></i>              </a>

              <hr style="width: 70px;">
              <span class="btn-label text-secondary">Receipt</span>
            </div>

          




          </div>
        </footer>
        <!-- -----------------------footer buttons link--------------------  -->

      </div>
    </div>



    <div class="col-lg-4 col-md-3"></div>

  </div>
  </div>











  <script src="Assets/js/jquery.slim.min.js"></script>
  <script src="Assets/js/bootstrap.bundle.js"></script>

</body>





</html>