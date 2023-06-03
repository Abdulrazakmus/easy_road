<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=easy_road", "root", "");
    // echo "connected";
}
catch(PDOEception $a){
    echo "Note connected";

}
?>