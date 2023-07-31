<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

echo "oyaa";

echo $_POST['submit'];

if(isset($_POST['submit'])){
   session_start();
   $user = $_SESSION['userName'];
   $driver_id = $_SESSION['driverID'];


   $stmt = $conn->prepare("SELECT * FROM user,police_man WHERE user.user_name = :user");
   $stmt->execute(array(":user"=>$user));
   $res = $stmt->fetch();
   $policeID =$res['police_man_id'];

   $stmt = $conn->prepare("INSERT INTO `driver_violation`(`driver_id`, `violation_id`, `police_man_id`, `date`) 
   VALUES (:driver_id,11,:policeID,CURRENT_TIMESTAMP )");
   $stmt->execute(array(":driver_id"=>$driver_id, ":policeID"=>$policeID));
   

  
  // Example usage
  $controlNo = "SU".time();
//   echo $controlNo;
  

   $stmt2 = $conn->prepare("INSERT INTO `bill`(`control_number`, `violation_id`) VALUES (:controlNo,11)");
   $stmt2->execute(array(":controlNo"=>$controlNo));




   //  Check Box

   
   $checkboxes = $_POST["checkbox"];
   
   foreach($checkboxes as $checkbox){
      
   }

   



   header('location:../accuse-page-04.php');
    


}


?>