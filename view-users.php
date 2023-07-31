<!-- Oficer Table   -->

<?php

require("./Handlers/connection.php");
$search1 = "";
$search2 = "";



session_start();


// Admin query works from here
if ($_SESSION['role'] == "admin") {
  if (isset($_POST["search1"]) && $_POST["search1"] != "") {

    $search1 = $_POST["search1"];
    $stmt1 = $conn->prepare("SELECT * FROM `user` WHERE role_id = 2 AND user_name LIKE '%" . $search1 . "%'");
  } else {
    $stmt1 = $conn->prepare("SELECT * FROM `user` WHERE role_id = 2");
  }
}else{

}

// else query works from here


if (isset($_POST["search2"]) && $_POST["search2"] != "") {

  $search2 = $_POST["search2"];
  $stmt2 = $conn->prepare("SELECT * FROM `police_man`, `user` WHERE role_id = 3 AND  user.user_id = police_man.user_id AND user_name LIKE '%" . $search2 . "%'");
} else {
  $stmt2 = $conn->prepare("SELECT * FROM `police_man`, `user` WHERE role_id = 3 AND user.user_id = police_man.user_id");
}


?>

<!-- Oficer Table   -->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View users</title>
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
        <div class="row" id="header-mobile">

          <div class="col-lg-4 col-md-4 col-4">
            <div class="nav-item">
              <a href="user.php" class="btn btn-primary shadow">
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
          <i class="fa fa-user text-primary"></i>
          <h6>Registered Users</h6>
        </div>
        <hr>


<?php 
        if ($_SESSION['role'] == "admin") {

?>



        <!-- ------------------------------Officer Table---------------------- -->
        <!-- Search Bar -->

        <div class="text-center">
          <h6>Officers</h6>
        </div>

        <form action="view-users.php" method="POST">

          <div class="input-group mb-3 mt-4">
            <input type="text" class="form-control search" name="search1" placeholder="Search" value="<?php echo $search1; ?>">
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
                <th>V/N</th>
                <th>User Name</th>
                <th>Email</th>
                <th></th>
                <th></th>

              </tr>
            </thead>
            <tbody>


              <?php
              $stmt1->execute();
              $result = $stmt1->fetchAll();
              $no = 0;
              foreach ($result as $res) {

                $no++;


              ?>
                <tr>
                  <td value="#"><?php echo $no; ?></td>
                  <td value="#"><?php echo $res['user_name'] ?></td>
                  <td value="#"><?php echo $res['email'] ?></td>
                  


                  <td> <a href="./Handlers/delete-user.php?id=<?php echo $res['user_id'] ?>" class="btn btn-danger" onclick="return confirm('Click OK if you really want to delete user')"><i class="fa fa-trash"></i></a></td>
                  <!-- Sending ID from This Page to Edit User page  -->
                  <td value="#"> <a href="edit-users.php?id=<?php echo $res["user_id"]?>" class="btn btn-success"><i class="fa fa-edit"> </i> </a></td>

                </tr>



              <?php
              }
              ?>

            </tbody>
          </table>

        </div>

        <!-- ------------------------------Officer Table Ends---------------------- -->




<?php 
        }
?>


            

        <hr>


        <!-- ------------------------------Police Table---------------------- -->
        <!-- Search Bar -->

        <div class="text-center">
          <h6>Police Man</h6>
        </div>

        <form action="view-users.php" method="POST">

          <div class="input-group mb-3 mt-4">
            <input type="text" class="form-control search" name="search2" placeholder="Search" value="<?php echo $search2; ?>">
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
                <th>V/N</th>
                <th>User Name</th>
                <th>Email</th>
                <th></th>
                <th></th>

              </tr>
            </thead>
            <tbody>


              <?php
              $stmt2->execute();

              $result = $stmt2->fetchAll();
              $no = 0;
              foreach ($result as $res) {

                $no++;


              ?>
                <tr>
                  <td value="#"><?php echo $no; ?></td>
                  <td value="#"><?php echo $res['name'] ?></td>
                  <td value="#"><?php echo $res['email'] ?></td>
                  <td> <a href="./Handlers/delete-user.php?id=<?php echo $res['user_id'] ?>" class="btn btn-danger" onclick="return confirm('Click OK if you really want to delete user')"><i class="fa fa-trash"></i></a></td>
                  <td value="#"> <a href="edit-users.php?id=<?php echo $res["user_id"]?>" class="btn btn-success"><i class="fa fa-edit"> </i> </a></td>

                </tr>



              <?php
              }
              ?>

            </tbody>
          </table>

        </div>

        <!-- ------------------------------police Table Ends---------------------- -->





        <!-- -----------------------footer buttons link--------------------  -->


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