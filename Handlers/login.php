<?php
require_once('connection.php');

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = sha1($_POST['pass']);


    // tunacheck if user anatumia email ku login 
    if(strpos($user, '@') !== false){
       
        $stmt = $conn->prepare("SELECT * FROM `user`, `role` WHERE role.role_id = user.role_id AND user.email=:uname AND user.user_pass=:upass");
        $stmt->execute(array(":uname"=>$user, ":upass"=>$pass));

        if($stmt->rowCount() == 1){
            $result = $stmt->fetch();

// session start here :: global variable created 
            session_start();
            $_SESSION['userName'] = $result['user_name'];
            $_SESSION['role'] = $result['role_name'];

            header("location:../home.php");

        }else{
            header('location:../index.php?error=true');
        }


    }
// -----------------------------------------------------

    else{
        if( $user == "admin" && $pass == 12345){
            header('location:../home.php');
        }
        else{
            echo "username not exist";
        }
    }

  
    
}


?>