<!-- searching section  -->

<?php

require("./Handlers/connection.php");
$search = "";
if (isset($_POST["search"]) && $_POST["search"] != ""){

  $search = $_POST["search"];
  $stmt = $conn->prepare("SELECT * FROM `violation` WHERE violation LIKE '%" . $search . "%'");

}else{
  $stmt = $conn->prepare("SELECT * FROM `violation`");

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
          <h6>Violations</h6>
        </div>
        <hr>




        
        <!-- ------------------------------Violation Table---------------------- -->
     <!-- Search Bar -->
<form action="help.php" method="POST">

<div class="input-group mb-3 mt-4">
    <input type="text" class="form-control search" name="search" placeholder="Search"value="<?php echo $search; ?>" >
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
              <th>Violation</th>
              <th>Type</th>
              <th>Penalty</th>
              <th></th>
            </tr>
          </thead>
          <tbody>


          <?php
require("./Handlers/connection.php");
$stmt = $conn->prepare("SELECT * FROM `violation`");
$stmt->execute();
$result=$stmt->fetchAll();
$no = 0;
foreach($result as $res){

$no++;


  ?>
            <tr>
            <td value="#"><?php  echo $no; ?></td>
              <td value="#"><?php  echo $res['violation'] ?></td>
              <td value="#"><?php  echo $res['vtype'] ?></td>
              <td value="#"><b>Tsh </b><?php  echo $res['penalt'] ?></td>
              <td class="btn btn-danger"> Delete </td>
              <!-- <td> <a href="./Handlers/delete-violation.php?id=<?php echo $res['#'] ?>" class="btn btn-danger" onclick="return confirm('Click OK if you really want to delete violation')">Delete</a></td> -->

            </tr>
          
            <?php
}
    ?>

          </tbody>
        </table>

        </div>

        <script>

          function filterViolations() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementsByTagName("table")[0];
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[1];
              if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }
            }
          }
        </script>
        <!-- ------------------------------Violation Table Ends---------------------- -->



        <hr>

        <!-- <a class="text-white" href="accuse-page-04.php">
          <button type="submit" class="btn btn-primary shadow float-right">Next <i class="fas fa-arrow-right"></i></a>
        </button>
        </a>

        <a class="text-white" href="accuse-page-02.php">
          <button type="submit" class="btn btn-primary shadow float-left"><i class="fas fa-arrow-left"></i> Back </a>
        </button>
        </a> -->

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