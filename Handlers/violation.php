<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
    
    // nime assign data kwny variables ( data from form )
   $violation = $_POST['violation'];
   $penalt = $_POST['penalt'];
   $type = $_POST['vtype'];



// session_start();
// $user = $_SESSION['userName'];



$stmt = $conn->prepare("INSERT INTO `violation`(`violation`, `vtype`, `penalt`)
VALUES (:violation, :vtype, :penalt)");
$stmt->execute(array(":violation"=>$violation, ":vtype"=>$type, ":penalt"=>$penalt));




   header('location:../add-violation.php');
    


}


?>