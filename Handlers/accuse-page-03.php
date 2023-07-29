<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
   session_start();
   $user = $_SESSION['userName'];
   $driverID = $_SESSION['driverID'];
   // $checks = $_POST['check'];

   


   $stmt = $conn->prepare("SELECT * FROM user,police_man WHERE user.user_name = :user");
   $stmt->execute(array(":user"=>$user));
   $res = $stmt->fetch();
   $policeID =$res['police_man_id'];

      
   $stmt = $conn->prepare("INSERT INTO `driver_violation`(`driver_id`, `violation_id`, `police_man_id`, `date`) 
   VALUES (:driverID,2,:policeID,CURRENT_TIMESTAMP )");
   $stmt->execute(array(":driverID"=>$driverID, ":policeID"=>$policeID));
   
   function generateRandomNumber() {
      $min = pow(10, 11); // Minimum 12-digit number (10^11)
      $max = pow(10, 12) - 1; // Maximum 12-digit number (10^12 - 1)
      return mt_rand($min, $max);
  }
  
  // Example usage
  $controlNo = generateRandomNumber();
//   echo $controlNo;
  
   // $controlNo = 45863456876344;

   $stmt = $conn->prepare("INSERT INTO `bill`(`control_number`, `violation_id`) 
   VALUES (:controlNo,2)");
   $stmt->execute(array(":controlNo"=>$controlNo));

    
   
   
   // nime assign data kwny variables ( data from form )
  // $violation = $_POST['violation'];
  // $penalt = $_POST['penalt'];
  // $type = $_POST['vtype'];
   
  // session_start();
  // $user = $_SESSION['userName'];

// $stmt = $conn->prepare("INSERT INTO `violation`(`violation`, `vtype`, `penalt`)
// VALUES (:violation, :vtype, :penalt)");
// $stmt->execute(array(":violation"=>$violation, ":vtype"=>$type, ":penalt"=>$penalt));




   header('location:../accuse-page-04.php');
    


}


?>