
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
    $violation_id = $_GET['id'];


    $stmt = $conn->prepare("SELECT * FROM violation WHERE violation_id=$violation_id");
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
if($_SESSION['role']=="admin" || $_SESSION['role']=="Chief_Officer"){

?>

<!-- first row which have icons and name on top -->
<div class="row" id="header-mobile">

    <div class="col-lg-4 col-md-4 col-4">
        <div class="nav-item">
            <a href="view-violations.php" class="btn btn-primary shadow">
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
<form class="#" method="POST" action="./Handlers/edit-violations.php">

<div class="row">

  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="violation">
    <i class="fa fa-user text-primary"></i> Violation
  </label>
  <input value="<?php echo $row['violation']; ?>" type="text" class="form-control"  placeholder="Enter violation" name="violation" required>

 
</div>
  </div>

   <!-- Hiden Input Used to pass ID which we can use it in its hendler -->
   <input value="<?php echo $violation_id?>" type="text" name="violation_id" id="" hidden>


<div class="col-lg-6 col-md-6 col-sm-6">
<div class="form-group">
  <label for="violation">
    <i class="fas fa-venus-mars text-primary"></i> Violation Type
  </label>
  <select class="form-control" id="#" name="vtype" required>
    <option value="<?php echo $row['vtype']; ?>"><?php echo $row['vtype']; ?></option>

<option value="minor">Minor</option>
<option value="middle">Middle</option>
<option value="major">Major</option>

  </select>
</div>
</div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="penalt">
    <i class="fa fa-ban text-primary"></i> Penalt
  </label>
  <input value="<?php echo $row['penalt']; ?>" type="number" class="form-control"  placeholder="Enter number" name="penalt" required>
</div>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-6 mt-4">
  <div class="form-group">
  <label for="phone-number">
    <i class="text-primary"></i>
  </label>
    <button type="submit" class="btn btn-primary shadow" name="submit">
      Update <i class="fa fa-file"></i>
    </button>
  </div>
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
