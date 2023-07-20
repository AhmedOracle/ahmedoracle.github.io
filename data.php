<?php
require("connect.php");
global $collectionDataBase;
mysqli_set_charset($collectionDataBase,"utf8");


$getData = "SELECT * FROM users";
$RunGetData = mysqli_query($collectionDataBase,$getData);

$data = mysqli_fetch_all($RunGetData,MYSQLI_ASSOC);
echo json_encode($data);


?>
