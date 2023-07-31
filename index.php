<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>

 <!-- Libraries Stylesheet -->
 <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="Asset/css/bootstrap.css" rel="stylesheet">
 <link href="Assets/css/style.css" rel="stylesheet">

<!-- manifest file -->
<link rel="manifest" href="./manifest.json">

 <!-- online links -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
   integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
<div class="login-container d-flex align-items-center justify-content-center">
<form class="login-form text-center" method="POST" action="Handlers/login.php">
    <img class="logo mb-2" src="Assets/img/easy-logo 1.png" alt="logo">

    <div class="form-group">
        <input type="text" class="form-control mb-4  
        rounded-pill form-control-lg shadow" name="user" placeholder="username / email" required>
    </div>

   
    <div class="form-group">
        <input type="password" class="form-control mb-4 
        rounded-pill form-control-lg shadow" name="pass" placeholder="password" required>
    </div>


    <div class="forgot-link d-flex align-items-center justify-content-between">
        <div class="form-check">
            
            <input type="checkbox" class="form-check-input" id="remember">
            <label for="remember"> Remember Password</label>
        </div>
        <a href="forgot-password.php">Forgot Password?</a>
    </div>
    
    <button type="submit" name="submit" class="btn mt-5 btn-custom text-uppercase active btn-block rounded-pill  shadow"> <strong>Login</strong></button>
    <p class="mt-3 fornt-weight-normal">
        Don't have an account <a href="#"><strong>Request Now</strong></a>

    </p>

</form>

</div>















    <!-- online JS files -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
<script src="Assets/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<!-- end of online JS files -->

<script src="./Assets/js/app.js"></script>
<script>
  if (typeof navigator.serviceWorker !== 'undefined') {
    navigator.serviceWorker.register('sw.js')
  }
</script>
</body>
</html