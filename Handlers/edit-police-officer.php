<?php
require_once('connection.php');

///tumechkkua data from form kwa njia ya post kwa kupitia button ya submit 

if(isset($_POST['submit'])){
    // nime assign data kwny variables ( data from form )
   $user_name = $_POST['fname'];
   $user_id = $_POST['userid'];
   $phone_number = $_POST['phone-number'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $user_pass = sha1($_POST['password']);
   $station = $_POST['station'];

 
    // Qury ya ku update data kwny table la Police man

    $sql = "UPDATE user SET user_name=:user_name, email=:email, user_pass=:user_pass WHERE user_id=:user_id";
    $stmt = $conn->prepare($sql);

    $stmt->execute([
        'user_name' => $user_name,
        'email' => $email,
        'user_pass' => $user_pass,
        'user_id' => $user_id
    ]);


    // Qury ya ku update data kwny table la police man

    $sql = "UPDATE police_man SET name=:name, phone_number=:phone_number WHERE user_id=:user_id";
    $stmt = $conn->prepare($sql);

    $stmt->execute([
        'name' => $user_name,
        'phone_number' => $phone_number,
        'user_id' => $user_id
    ]);




   header('location:../view-users.php');
    


}


?>