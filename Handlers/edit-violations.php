<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
    // nime assign data kwny variables ( data from form )
    $violation = $_POST['violation'];
    $penalt = $_POST['penalt'];
    $vtype = $_POST['vtype'];
    $violation_id = $_POST['violation_id'];
  

 
    // Qury ya ku update data kwny table la Violation

    $sql = "UPDATE violation SET violation=:violation, penalt=:penalt, vtype=:vtype WHERE violation_id=:violation_id";
    $stmt = $conn->prepare($sql);

    $stmt->execute([
        'violation' => $violation,
        'penalt' => $penalt,
        'vtype' => $vtype,
        'violation_id' => $violation_id,
    ]);


  



   header('location:../view-violations.php');
    


}


?>