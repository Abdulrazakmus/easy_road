<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <?php include 'links.php';

include './Handlers/connection.php';

    
    $ID = $_SESSION['userName'];


   
    
        $stmt = $conn->prepare("SELECT * FROM `user` WHERE user_name = :user");
        $stmt->execute(array(":user"=> $ID ));
        $result = $stmt->fetch();


    
    
    ?>

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

        <!-- -----------------Start Profile Card Section------------------- -->
        <div class="profile-card-section section-gap-top-25">
          
          <div class="profile-card-wrapper shadow">
            <div class="profile-shape profile-shape-1 "><img class="img-fluid" width="61" height="50"
                src="Assets/img/profile-shape-1.svg" alt="image"></div>

            <div class="image">
              <img class="img-fluid" width="96" height="96" src="Assets/img/user.png" alt="image">
            </div>
            <div class="content">
              <h2 class="name"><?php echo $_SESSION['userName']?></h2>
              <span class="email"><?php echo $result['email'] ?></span>
              <span class="id-num"><?php echo $_SESSION['role']?></span>
            </div>
            <div class="profile-shape profile-shape-2"><img class="img-fluid" width="48" height="59"
                src="Assets/img/profile-shape-2.svg" alt="image"></div>
          </div>

        </div>
        <!-- --------------End Profile Card Section------------ -->
<br>
        <hr>

<br>

        <!-- ---------------------This is Form-------------------- -->
        <form class="mt-1">

          <div class="form-group">
            <label for="full-name">
              <i class="fa fa-user text-primary"></i> Full Name
            </label>
            <input type="text" class="form-control" id="full-name" placeholder="Enter your full name">
          </div>

          <div class="form-group">
            <label for="email">
              <i class="fas fa-envelope text-primary"></i> Email Address
            </label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email address">
          </div>

          <div class="form-group">
            <label for="phone">
              <i class="fas fa-phone text-primary"></i> Phone Number
            </label>
            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
          </div>

        

          <div class="form-group">
            <label for="phone">
              <i class="fas fa-lock text-primary"></i> Password
            </label>
            <input type="password" class="form-control" id="pass" placeholder="Enter new password">
          </div>

<br>

          <button type="submit" class="btn btn-primary btn-block shadow">
            <i class="fas fa-save"></i> Save
          </button>

        </form>
        <!-- -----------------------End of This Form-------------------------------- -->





      </div>
    </div>



    <div class="col-lg-4 col-md-3"></div>

  </div>
  </div>











  <script src="Assets/js/jquery.slim.min.js"></script>
  <script src="Assets/js/bootstrap.bundle.js"></script>

</body>





</html>