
    <?php include 'links.php'; ?>

<body class="item-align-center">

<!-- main container -->
<div class="container-fluid p-3">

<div class="row">

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
        <a href="home.php" ><i class="#"> </i> <img src="Assets/img/easy-logo 1.png" height="30px" alt=""></a>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-4 text-right">
            <div class="nav-item">
              <a href="home.php" class="btn btn-primary shadow">
                <i class="fa fa-home"></i>
              </a>
            </div>
          </div>




  <!---- row hii sjaitumia ina white space---- -->
    <div class="col-lg-4 col-md-4 col-4 text-right"></div>
</div>
<!-- end of the firs row -->



 
  <div class="table-responsive mt-4">
    <div class="d-flex flex-row mb-3 mt-3">

        <div class="col-lg-6 col-md-6 col-6">
            <div class="card-content shadow rounded">
                <div class="icons">

                    <a href="account.php" > <i class="fa fa-user"></i> Account </a>    
                    </div>
             </div>
        </div>

        <div class="col-lg-6 col-md-6 col-6 ">
          <div class="card-content shadow rounded float-right">
              <div class="icons">

                  <a href="notifications.php" > <i class="fa fa-bell"></i> Notifiy</a>    
                  </div>
           </div>
      </div>

   
    </div>    
  </div>




  
<!-- midle content start -->


<div>
</div>

<!-- -------------Admin Section------- -->
<?php
if($_SESSION['role']=="admin"){

?>
<div>
  <a href="register-police-officer.php"><i class="fa fa-user-plus m-4"></i> Register Officer</a>
</div>

<div>
  <a href="view-users.php"><i class="fa fa-user m-4"></i> Registered Officers</a>
</div>

<div>
  <a href="add-violation.php"><i class="fa fa-file m-4"></i> Add Violation</a>
</div>

<?php
}
?>
<!-- -------------Admin Section------- -->






<!-- -------Chief Officer section-------- -->

<?php
if($_SESSION['role']=="Chief_Officer"){

?>

<div>
  <a href="add-violation.php"><i class="fa fa-file m-4"></i> Add Violation</a>
</div>

<div>
  <a href="view-users.php"><i class="fa fa-user m-4"></i> Registered Police</a>
</div>

<?php
}
?>
<!-- -------Chief Officer section-------- -->



<div>
  <a href="setting.php"><i class="fa fa-cog m-4"></i> Setting</a>
</div>

<hr>

<div>
  <a href="./Handlers/log-out.php" onclick="return confirm('are sure you want to log out ?')"> <i class="fa fa-sign-out-alt m-4"></i>Log out</a>

</div>








  </div>
  </div>

    
<div class="col-lg-4 col-md-3"></div>
</div> 
</div>


<script src="Assets/js/jquery.slim.min.js"></script>
<script src="Assets/js/bootstrap.bundle.js"></script>

</body>
</html>
