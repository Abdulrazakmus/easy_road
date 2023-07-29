<?php
require_once('connection.php');


if (isset($_GET["id"])) {
    $id = $_GET['id'];
$stmt = $conn->prepare("DELETE  FROM `user` WHERE user_id = :ID");
$stmt->execute(array(":ID"=>$id));
header('location:../view-users.php');
}
