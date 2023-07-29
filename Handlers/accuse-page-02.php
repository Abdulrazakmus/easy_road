<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
    // nime assign data kwny variables ( data from form )
   $plate_no = $_POST['plate-no'];
   $root_no = $_POST['root_no'];
   $vcolour = $_POST['vcolour'];
  

    session_start();
   $driverID = $_SESSION['driverID'];
   // echo $driverID;
   
   //  echo $police_id;

// nime insert data from form to data base 

$stmt = $conn->prepare("UPDATE `driver` SET `vehicle_number`=:v_number,`root_number`=:r_number,`vcolour`=:v_colour WHERE `driver_id`= :driverID ");
$stmt->execute(array(":v_number"=>$plate_no, ":r_number"=>$root_no, ":v_colour"=>$vcolour, ":driverID"=>$driverID));


//   unset($_SESSION['driverID']);

   header('location:../accuse-page-03.php');
    
}

?>