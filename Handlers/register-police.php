<?php
require_once('connection.php');
echo "takoooooooooooooooooooooo";
///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
    // nime assign data kwny variables ( data from form )
   $full_name = $_POST['fname'];
   $phone_number = $_POST['phone-number'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $password = sha1($_POST['password']);


session_start();
$user = $_SESSION['userName'];


$stmt1 = $conn->prepare("SELECT `police_station_id`  FROM `police_man` WHERE `name`=:user ");
$stmt1->execute(array(":user"=>$user));
$stations = $stmt1->fetch();
$station = $stations['police_station_id'];




$stmt2 = $conn->prepare("INSERT INTO `user`(`user_name`, `user_pass`, `email`, `role_id`) 
VALUES (:uname, :user_pass, :email, :RID)");

$stmt2->execute(array(":uname"=>$full_name, ":user_pass"=>$password, ":email"=>$email, ":RID"=>3));
$id_ya_mwisho=$conn->lastInsertId();

  
   
// nime insert data from form to data base 

$stmt3 = $conn->prepare("INSERT INTO `police_man`(`user_id`, `name`, `gender`, `phone_number`, `police_station_id`) 
VALUES (:uuID, :uname, :gender, :phone_number, :station_ID)");

$stmt3->execute(array(":uuID"=>$id_ya_mwisho, ":uname"=>$full_name, ":gender"=>$gender, ":phone_number"=>$phone_number, ":station_ID"=>$station));

  

   header('location:../home.php');
    


}


?>