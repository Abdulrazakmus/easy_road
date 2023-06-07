<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
    // nime assign data kwny variables ( data from form )
   $plate_no = $_POST['plate-no'];
   $root_no = $_POST['rooot-no'];
   $vcolour = $_POST['vcolour'];
  


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

$stmt = $conn->prepare("INSERT INTO `driver`(`vehicle_number`, `root_number`, `vcolour`, `police_man_id`) 
VALUES (:v_number, :r_number, :v_colour, :PoliceID)");

$stmt->execute(array(":v_number"=>$plate_no, ":r_number"=>$root_no, ":v_colour"=>$vcolour, ":PoliceID"=>$police_id));


  

   header('location:../accuse-page-03.php');
    
}


?>