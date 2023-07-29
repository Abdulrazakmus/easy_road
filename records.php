<!-- searching section  -->

<?php

require("./Handlers/connection.php");
$search = "";

session_start();


if (isset($_POST["search"]) && $_POST["search"] != ""){

  $search = $_POST["search"];
  $stmt = $conn->prepare("SELECT * FROM `driver` WHERE driver LIKE '%" . $search . "%'");

}else{
  $stmt = $conn->prepare("SELECT * FROM `driver`");

}

?>

<!-- searching section ends -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Violations</title>
  <!-- Libraries Stylesheet -->
  <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="Asset/css/bootstrap.css" rel="stylesheet">
  <link href="Assets/css/style.css" rel="stylesheet">

  <!-- online links -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>


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
              <a href="home.php" class="btn btn-primary shadow">
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
        <div class="text-center">
          <i class="fa fa-book text-primary"></i>
          <h6>View Record</h6>
        </div>
        <hr>


Hapa uta search kuona record ya mtuhumiwa

        
        <!-- ------------------------------Violation Table---------------------- -->
     <!-- Search Bar -->
<form action="records.php" method="POST">

<div class="input-group mb-3 mt-4">
    <input type="text" class="form-control search" name="search" placeholder="Search "value="<?php echo $search; ?>" >
    <div class="input-group-append">
      
    </span> <button class="btn btn-primary search"><i class="fa fa-search "></i></button> </span>
    </div>
  </div>
</form>

  <!-- Search Bar end -->


        <div class="table-responsive">

        <table class="table table-bordered table-striped">
          <thead class="bg-primary text-white">
            <tr>
              <!-- <th>V/N</th> -->
              <th>Name</th>
              <th>Licence</th>
              <th>Violation</th>
              <th>Date</th>
              <th>Status</th>
              <!-- <th>Check</th> -->
            </tr>
          </thead>
          <tbody>


          <?php
          $stmt = $conn->prepare("SELECT * FROM `driver`, `violation` WHERE ");

              $stmt->execute();
              $result = $stmt->fetchAll();
              foreach ($result as $res) {

              ?>
            <tr>
            <td value="#"><?php  echo $res['name'] ?></td>
            <td value="#"><?php  echo $res['license_number'] ?></td>
              <td value="#"><?php  echo $res['violation'] ?></td>
              <td value="#"><?php  echo $res['vtype'] ?></td>
              <td value="#"><b>Tsh </b><?php  echo $res['penalt'] ?></td>
            </tr>
          
            <?php
}
    ?>

          </tbody>
        </table>

        </div>

        <!-- ------------------------------Violation Table Ends---------------------- -->



        <hr>

      
      </div>
    </div>



    <div class="col-lg-4 col-md-3"></div>

  </div>
  </div>











  <script src="Assets/js/jquery.slim.min.js"></script>
  <script src="Assets/js/bootstrap.bundle.js"></script>

</body>





</html>