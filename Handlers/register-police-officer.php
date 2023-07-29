<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
    // nime assign data kwny variables ( data from form )
   $full_name = $_POST['fname'];
   $phone_number = $_POST['phone-number'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $password = sha1($_POST['password']);
   $station = $_POST['station'];

if($station != 'default'){
    $stmt = $conn->prepare("INSERT INTO `user`(`user_name`, `user_pass`, `email`, `role_id`) 
VALUES (:uname, :user_pass, :email, :RID)");

$stmt->execute(array(":uname"=>$full_name, ":user_pass"=>$password, ":email"=>$email, ":RID"=>2));
$id_ya_mwisho=$conn->lastInsertId();

  
   
// nime insert data from form to data base 

$stmt = $conn->prepare("INSERT INTO `police_man`(`user_id`, `name`, `gender`, `phone_number`, `police_station_id`) 
VALUES (:uuID, :uname, :gender, :phone_number, :station_ID)");

$stmt->execute(array(":uuID"=>$id_ya_mwisho, ":uname"=>$full_name, ":gender"=>$gender, ":phone_number"=>$phone_number, ":station_ID"=>$station));

  

   header('location:../home.php');
    
}else{
    echo 'Select station';
}


}


?>