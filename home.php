
<?php 

// creating a session 
    session_start();
    if(!isset($_SESSION['role'])){
// if session is not set yet retun a user to a login form through link down below 
      header('location:index.php');
    }
    
    // links included
    include 'links.php'; 
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
            <a href="help.php" class="btn btn-primary shadow">
                <i class="fa fa-headset"></i>
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
            <a href="user.php" class="btn btn-primary shadow">
                <i class="fa fa-user"></i>
              </a>
        </div>
    </div>

</div>
<!-- end of the firs row -->


<!-- Search Bar -->
<div class="input-group mb-3 mt-4">
    <input type="text" class="form-control search" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
    </span> <a href="#" class="btn btn-primary search"><i class="fa fa-search "></i></a> </span>
      <!-- <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span> -->
    </div>
  </div>
  <!-- Search Bar end -->

    
<!-- Carousel -->


<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>

    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Assets/img/picture 2.jpg" alt="picture one">

        <div class="carousel-caption">
            <h3>Updates!</h3>
            <p>Here You can see all system updates</p>
          </div>
      </div>

      <div class="carousel-item">
        <img src="Assets/img/picture 1.jpg" alt="picture two">

        <div class="carousel-caption">
            <h3>News</h3>
            <p>See all systemm news here</p>
          </div>
      </div>

      <div class="carousel-item">
        <img src="Assets/img/picture 3.jpg" alt="picture three">

        <div class="carousel-caption">
            <h3>Matukio</h3>
            <p>Ona Taarifa Hapa</p>
          </div>
      </div>

    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div>
  <!-- Carousel End -->

  <hr>
 

  <!-- slide buttons -->
  <?php
if($_SESSION['role']=="admin"){

?>


  <div class="table-responsive">
    <div class="d-flex flex-row mb-3 mt-1">

    <div class="col-lg-4 col-md-4 col-6 pt-1 pb-2">
            <div class="card-content shadow rounded">
    <div class="icons text-center">

        <a href="#" > <i class="fas fa-phone"></i></a>    
        </div>
            </div>
    
        </div>

        <div class="col-lg-4 col-md-4 col-6 pt-1 pb-2">
            <div class="card-content shadow rounded">
                <div class="icons text-center">

                    <a href="#" > <i class="fas fa-phone"></i></a>    
                    </div>
             </div>
    
        </div>

        <div class="col-lg-4 col-md-4 col-6 pt-1 pb-2">
            <div class="card-content shadow rounded">
                <div class="icons text-center">

                    <a href="#" > <i class="fas fa-phone"></i></a>    
                    </div>
            </div>
    
        </div>

    </div>    
  </div>
<!-- end of the slide buttons -->
  <?php
}
?>


<!-- Police officer registration form -->
<!-- we are going to show this part to police officer only  -->

<?php
if($_SESSION['role']=="Chief_Officer"){

?>
<div class="d-flex justify-content-center"><p><b>Register Police Here</b></p></div>
<hr>


<form class="#" method="POST" action="./Handlers/register-police.php">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
  <div class="form-group">
  <label for="full-name">
    <i class="fa fa-user text-primary"></i> Full Name
  </label>
  <input type="text" class="form-control" id="full-name" placeholder="Enter full name" name="fname" required>
</div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="phone-number">
    <i class="fa fa-phone text-primary"></i> Phone Number
  </label>
  <input type="tel" class="form-control" id="full-name" placeholder="Enter number" name="phone-number" required>
</div>
  </div>



  <div class="col-lg-6 col-md-6 col-sm-6">
  <div class="form-group">
  <label for="email">
    <i class="fa fa-envelope text-primary"></i> Email
  </label>
  <input type="email" class="form-control" id="full-name" placeholder="Enter email" name="email" required>
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
    <option value="">Select police gender</option>
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
  <input type="password" class="form-control" id="full-name" placeholder="Enter password" name="password" required>
</div>
</div>
</div>


<!-- Police registration button  -->
<div class="row justify-content-center pt-2">
  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
    <button type="submit" class="btn btn-primary shadow" name="submit">
      Register Police Here <i class="fa fa-user-plus"></i>
    </button>
  </div>
</div>


</form>
<?php
}
?>

<!-- we are going to show that above part to police officer only  -->



<hr>
   


<!-- Carousel -->
<?php
if($_SESSION['role']=="admin"){

?>


<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>

    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Assets/img/picture 2.jpg" alt="picture one">

        <div class="carousel-caption">
            <h3>Updates!</h3>
            <p>Here You can see all system updates</p>
          </div>
      </div>

      <div class="carousel-item">
        <img src="Assets/img/picture 1.jpg" alt="picture two">

        <div class="carousel-caption">
            <h3>News</h3>
            <p>See all systemm news here</p>
          </div>
      </div>

      <div class="carousel-item">
        <img src="Assets/img/picture 3.jpg" alt="picture three">

        <div class="carousel-caption">
            <h3>Matukio</h3>
            <p>Ona Taarifa Hapa</p>
          </div>
      </div>

    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div>

  <?php
}
?>
  <!-- Carousel End -->









<!-- -----------------------footer buttons link--------------------  -->

 <?php include 'footer-buttons.php'; ?>

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
