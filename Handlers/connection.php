<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=easy_road", "root", "");
    // echo "connected";
}
catch(PDOException $a){
    echo "Note connected";

}
?>