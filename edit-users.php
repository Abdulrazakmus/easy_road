
<?php 
include './Handlers/connection.php';
// creating a session 
    // session_start();
    // if(!isset($_SESSION['role'])){
// if session is not set yet retun a user to a login form through link down below 
      // header('location:index.php');
    // }
    
    // links included
    include 'links.php'; 



    // Getting ID from view user page to edit user page 
    $userid = $_GET['id'];


    $stmt = $conn->prepare("SELECT * FROM police_man, user, police_station WHERE police_man.user_id = user.user_id AND user.user_id = $userid AND police_man.police_station_id = police_station.police_station_id");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);


      ?>

    


<body class="item-align-center">

<!-- main container -->
<div class="container-fluid p-3">

<div class="row">

    <!-- -----------------------------------------Hii column Hatuitumii--------------------------- -->
    <div class="col-lg-4 col-md-3"></div>


    <div class="col-lg-4 col-md-6">

<!-- Police officer registration form -->
<!-- we are going to show this part to police officer only  -->

<?php
if($_SESSION['role']=="admin"){



?>

<!-- first row which have icons and name on top -->
<div class="row" id="header-mobile">

    <div class="col-lg-4 col-md-4 col-4">
        <div class="nav-item">
            <a href="view-users.php" class="btn btn-primary shadow">
                <i class="fa fa-arrow-left"></i>
              </a>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-4 text-center">
        <div class="nav-item">
        <a href="home.php" ><i class="shadow"> </i> <img src="Assets/img/easy-logo 1.png" height="30px" alt=""></a>
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
<div class="d-flex justify-content-center"><p><b>Add New Violation</b></p></div>
<hr>


<!-- -------------------form------------- -->
<form class="#" method="POST" action="./Handlers/edit-police-officer.php">

<div class="row">

  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="full-name">
    <i class="fa fa-user text-primary"></i> Full Name
  </label>
  <input value="<?php echo $row['name']; ?>" type="text" class="form-control" id="full-name" placeholder="Enter full name" name="fname" required>
</div>
  </div>


<div class="col-lg-6 col-md-6 col-sm-6">
<div class="form-group">
  <label for="gender">
    <i class="fas fa-venus-mars text-primary"></i> Stations
  </label>
  <select class="form-control" id="gender" name="station" required>
  <option value="<?php echo $row['station_name']; ?>"><?php echo $row['station_name']; ?></option>



    <?php
require_once("./Handlers/connection.php");
  $stmt = $conn->prepare("SELECT * FROM `police_station`");
  $stmt->execute();
  $result=$stmt->fetchAll();

foreach($result as $res){



    ?>

    <option value="<?php  echo $res['police_station_id'] ?>"><?php  echo $res['name'] ?> </option>

    <?php
}
    ?>


  </select>
</div>
</div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="phone-number">
    <i class="fa fa-phone text-primary"></i> Phone Number
  </label>
  <input value="<?php echo $row['phone_number']; ?>" type="tel" class="form-control" id="full-name" placeholder="Enter number" name="phone-number" required>
</div>
  </div>



  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="email">
    <i class="fa fa-envelope text-primary"></i> Email
  </label>
  <input value="<?php echo $row['email']; ?>" type="email" class="form-control" id="full-name" placeholder="Enter email" name="email" required>
</div>
  </div>
</div>




<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="gender">
    <i class="fas fa-venus-mars text-primary"></i> Gender
  </label>
  <select class="form-control" id="gender" name="gender" required>
  <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
</div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="email">
    <i class="fa fa-key text-primary"></i> password
  </label>
  <input  type="password" class="form-control" id="full-name" placeholder="Enter password" name="password" required>
</div>



</div>
</div>




<!-- Hiden Input Used to pass ID which we can use it in its hendler -->
<input type="hidden" name="userid" value="<?php echo $userid ?>">
<!-- Hiden Input Used to pass ID which we can use it in its hendler -->







<div class="row justify-content-center">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
  <button type="submit" class="btn btn-primary shadow" name="submit">
      Update  <i class="fab fa-save"></i>
    </button>
  </div>

  
</div>




</form>




<?php
}
?>

<!-- we are going to show that above part to police officer only  -->



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
