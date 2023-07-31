<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>drive's information</title>
  <?php include 'links.php'; ?>
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
        <div class="text-center ">
          <i class="fa fa-user text-primary"></i>
          <h6>Drivers's informations</h6>
        </div>
        <hr>

        <!-- ---------------------This is Form-------------------- -->
        <form class="mt-1" method="POST" action="./Handlers/accuse-page-01.php">

          <div class="form-group m-4">
            <label for="full-name">
              <i class="fa fa-user text-primary"></i> Full Name
            </label>
            <input type="text" class="form-control" id="full-name" placeholder="Enter a driver full name" name="fname" required>
          </div>

          <div class="form-group m-4">
            <label for="full-name">
              <i class="fa fa-id-card text-primary"></i> License ID
            </label>
            <input type="text" class="form-control" id="full-name" placeholder="Enter a driver license ID" name="licenceID" required>
          </div>

          <div class="form-group m-4">
            <label for="phone">
              <i class="fas fa-child text-primary"></i> Age
            </label>
            <input type="number" class="form-control" id="phone" placeholder="Enter a driver's age" value="18" min="18" name="age" required>
          </div>


          <div class="form-group m-4">
            <label for="full-name">
              <i class="fa fa-map-marker text-primary"></i> Address
            </label>
            <input type="text" class="form-control" id="address" placeholder="Enter a driver address" name="address" required>
          </div>


          <div class="form-group m-4">
            <label for="phone" class="d-block">
              <i class="fas fa-phone text-primary"></i> Phone Number
            </label>
            <div class="input-group">
              <div class="input-group-prepend">
                <select class="form-control" id="country-code">
                  <option value="+255">+255</option>
                  <option value="+254">+254</option>
                  <!-- Add more options for other country codes -->
                </select>
              </div>
              <input type="tel" class="form-control" id="phone" placeholder="Enter a driver phone number" name="phone-number" required>
            </div>
          </div>

          <!-- here is this field ( phone number only! ) css -->
          <style>
            .input-group-prepend {
              flex: 0 0 auto;
            }

            .form-control {
              border-radius: 0;
            }
          </style>




          <div class="form-group m-4">
            <label for="gender">
              <i class="fas fa-venus-mars text-primary"></i> Gender
            </label>
            <select class="form-control" id="gender" name="gender" required>
              <option value="">Select driver gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>

          <hr>

            <button type="submit" class="btn btn-primary shadow float-right" name="submit">Next <i class="fas fa-arrow-right"></i></a></button>

        </form>
        <!-- -----------------------End of This Form-------------------------------- -->






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