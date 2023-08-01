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

        <form class="mt-1" method="POST" action="./Handlers/accuse-page-01.php" onsubmit="return validateForm()">

  <!-- Full Name -->
  <div class="form-group m-4">
    <label for="full-name">
      <i class="fa fa-user text-primary"></i> Full Name
    </label>
    <input type="text" class="form-control" id="full-name" placeholder="Enter a driver full name" name="fname" required>
    <div id="error-full-name" class="text-danger"></div>
  </div>

  <!-- License ID -->
  <div class="form-group m-4">
    <label for="license-id">
      <i class="fa fa-id-card text-primary"></i> License ID
    </label>
    <input type="text" class="form-control" id="license-id" placeholder="Enter a driver license ID" name="licenceID" required>
    <div id="error-license-id" class="text-danger"></div>
  </div>

  <!-- Age -->
  <div class="form-group m-4">
    <label for="age">
      <i class="fas fa-child text-primary"></i> Age
    </label>
    <input type="number" class="form-control" id="age" placeholder="Enter a driver's age" value="18" min="18" name="age" required>
    <div id="error-age" class="text-danger"></div>
  </div>

  <!-- Address -->
  <div class="form-group m-4">
    <label for="address">
      <i class="fa fa-map-marker text-primary"></i> Address
    </label>
    <input type="text" class="form-control" id="address" placeholder="Enter a driver address" name="address" required>
    <div id="error-address" class="text-danger"></div>
  </div>

  <!-- Phone Number -->
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
      <input type="tel" class="form-control" id="phone-number" placeholder="Enter a driver phone number" name="phone-number" required>
    </div>
    <div id="error-phone-number" class="text-danger"></div>
  </div>

  <!-- Gender -->
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
    <div id="error-gender" class="text-danger"></div>
  </div>

  <hr>

  <button type="submit" class="btn btn-primary shadow float-right" name="submit">Next <i class="fas fa-arrow-right"></i></button>

</form>

<script>
function validateForm() {
  // Reset previous error messages
  var errorElements = document.querySelectorAll(".text-danger");
  errorElements.forEach(function(element) {
    element.textContent = "";
  });

  var fullName = document.getElementById("full-name").value;
  var licenseID = document.getElementById("license-id").value;
  var age = document.getElementById("age").value;
  var address = document.getElementById("address").value;
  var phoneNumber = document.getElementById("phone-number").value;
  var gender = document.getElementById("gender").value;

  // Check and display error messages
  if (fullName.trim() === "") {
    document.getElementById("error-full-name").textContent = "Please enter a driver's full name.";
    return false;
  }

  if (licenseID.trim() === "") {
    document.getElementById("error-license-id").textContent = "Please enter a driver's license ID.";
    return false;
  }

  if (age < 18) {
    document.getElementById("error-age").textContent = "Driver's age must be 18 or older.";
    return false;
  }

  if (address.trim() === "") {
    document.getElementById("error-address").textContent = "Please enter a driver's address.";
    return false;
  }

  if (phoneNumber.trim() === "") {
    document.getElementById("error-phone-number").textContent = "Please enter a driver's phone number.";
    return false;
  }

  if (!/^\+255\d{9}$/.test(phoneNumber)) {
    document.getElementById("error-phone-number").textContent = "Please enter a valid phone number with country code +255.";
    return false;
  }

  if (gender === "") {
    document.getElementById("error-gender").textContent = "Please select the driver's gender.";
    return false;
  }

  // If all checks pass, the form can be submitted
  return true;
}
</script>






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