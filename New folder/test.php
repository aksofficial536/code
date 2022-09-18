<?php
$servername = "localhost";
$username ="root";
$password = "";
$db = "Result";

$conn = mysqli_connect($servername, $username, $password, $result);

$sql = "CREATE TABLE `info` ( `Roll No.` INT(30) NOT NULL , `Cadidate Name` TEXT NOT NULL , `Father Name` TEXT NOT NULL , `Date Of Birth :` DATE NOT NULL , `Post` VARCHAR(30) NOT NULL DEFAULT 'AG IV' , `Posting Place` VARCHAR(30) NOT NULL DEFAULT 'WEST BENGAL' , `Training Centre` VARCHAR(30) NOT NULL DEFAULT 'WEST BENGAL' , `Training Session` VARCHAR(30) NOT NULL , UNIQUE (`Date Of Birth :`))";
$result = ,ysqli_query($conn,$sql);

?>
