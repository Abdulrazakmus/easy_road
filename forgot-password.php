<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <?php include 'links.php'; ?>

</head>
<body>
<div class="login-container d-flex align-items-center justify-content-center">
<form class="login-form text-center">
    <img class="logo mb-2" src="Assets/img/easy-logo 1.png" alt="logo">


    <div class="form-group">
        <input type="email" class="form-control mb-4  
        rounded-pill form-control-lg shadow" name="email" placeholder="Email" required>
    </div>

    <div class="form-group">
        <input type="password" class="form-control mb-4 
        rounded-pill form-control-lg shadow" name="new_password" placeholder="new password" required>
    </div>

    <div class="form-group">
        <input type="password" class="form-control mb-4 
        rounded-pill form-control-lg shadow" name="confirm_password" placeholder="confirm password" required>
    </div>


    <button type="submit" name="submit" class="btn mt-2 btn-custom text-uppercase active btn-block rounded-pill  shadow"> <strong>Submit</strong></button>
    <p class="mt-3 fornt-weight-normal">
        Back to <a href="index.php"><strong>Login</strong></a>

    </p>

</form>

</div>















    <!-- online JS files -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
<script src="Assets/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<!-- end of online JS files -->
</body>
</html