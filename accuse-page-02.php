<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>vehicle's information</title>
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
        <div class="row">

          <div class="col-lg-4 col-md-4 col-4">
            <div class="nav-item">
              <a href="accuse-page-01.php" class="btn btn-primary shadow">
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
          <i class="fa fa-car text-primary"></i>
          <h6>Vehicle's informations</h6>
        </div>
        <hr>

        <!-- ---------------------This is Form-------------------- -->
        <form class="mt-1"  method="POST" action="./Handlers/accuse-page-02.php">

          <div class="form-group m-4">
            <label for="full-name">
              <i class="fa fa-hashtag text-primary"></i> Vehicle Plate Number
            </label>
            <input type="text" class="form-control"  placeholder="Enter vehicle's plate number" name="plate-no" required>
          </div>

          <div class="form-group m-4">
            <label for="full-name">
              <i class="fa fa-hashtag text-primary"></i> Root Number  <i>( optional )</i> 
            </label>
            <input type="number" class="form-control" placeholder="Enter a vehicle's root number" name="root_no">
          </div>

          <div class="form-group m-4">
            <label for="full-name">
              <i class="fa fa-rainbow text-primary"></i> vehicle colour
            </label>
            <input type="text" class="form-control" placeholder="Enter a vehicle's colour" name="vcolour">
          </div>

         <hr>

          <!-- <a  class="text-white" href="accuse-page-03.php"  > -->
          <button type="submit" name="submit" class="btn btn-primary shadow float-right">Next <i class="fas fa-arrow-right"></i></a> </button>
          <!-- </a> -->

          <a  class="text-white" href="accuse-page-01.php"  >
          <button type="submit" class="btn btn-primary shadow float-left"><i class="fas fa-arrow-left"></i>  Back </a> </button>
          </a>

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