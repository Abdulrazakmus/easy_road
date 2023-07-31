<?php
require_once('connection.php');


if (isset($_GET["id"])) {
    $id = $_GET['id'];
$stmt = $conn->prepare("DELETE  FROM `violation` WHERE violation_id = :ID");
$stmt->execute(array(":ID"=>$id));
header('location:../view-violations.php');
}
