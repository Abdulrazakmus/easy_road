<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
    // nime assign data kwny variables ( data from form )
   $full_name = $_POST['fname'];
   $License_ID = $_POST['licenceID'];
   $Age = $_POST['age'];
   $Address = $_POST['address'];
   $phone_number = $_POST['phone-number'];
   $Gender = $_POST['gender'];


//    tuna assign police na driver ( tuna anzisha session kw a ku define id yake )
// nika start session 


   session_start();
   $User =  $_SESSION['userName'];
//    echo $User;


   $stmt = $conn->prepare("SELECT *  FROM `user` WHERE `user_name` =:user");
   $stmt->execute(array(":user"=>$User));

  $res = $stmt->fetch();
  $police_id = $res['user_id'];
   
   //  echo $police_id;

// nime insert data from form to data base 
   $stmt = $conn->prepare("INSERT INTO `driver`(`name`, `age`, `gender`, `living_place`, `phone_number`, `license_number`, `police_man_id`)
   VALUES (:uname,:age, :gender, :living_place, :phone_number, :license_number, :PoliceID)");

   $stmt->execute(array(":uname"=>$full_name, ":age"=>$Age, ":gender"=>$Gender, ":living_place"=>$Address, ":phone_number"=>$phone_number, ":license_number"=>$License_ID, ":PoliceID"=>$police_id));
   
   $driverID =  $conn->lastInsertId();

   $_SESSION['driverID'] = $driverID;



  

   header('location:../accuse-page-02.php');
    
}


?>