<?php

// creating a session 
session_start();
if(!isset($_SESSION['role'])){
// if session is not set yet retun a user to a login form through link down below 
  header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
 <!-- Libraries Stylesheet -->
 <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="Asset/css/bootstrap.css" rel="stylesheet">
 <link href="Assets/css/style.css" rel="stylesheet">

 <!-- online links -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
   integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   </head>