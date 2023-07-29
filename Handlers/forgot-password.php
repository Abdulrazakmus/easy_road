<?php
require_once('connection.php');


if(isset($_POST['submit'])){
$email = $_POST['email'];
$password1 = $_POST['new_password'];
$password2 = $_POST['confirm_password'];

if($password1 != $password2){
echo "password not math!";

}else{
    try{
        // creating SQL selecting query 
        $sqlQuery = "SELECT email FROM users WHERE email =:email";

        // sanitizing data
        $stmt = $conn->prepare($sqlQuery);

        // exicuting query
        $stmt->execute(array(':email' => $email));


        // cheking if record exist
        id($stmt->rowCount() == 1){

            // updating password
            $sqlUpdate = ("UPDATE 'user' SET 'user_pass =:user_pass' WHERE email =:email")
        }









    }

}

}













?>