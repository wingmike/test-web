<?php
require "connection.php";
$sql="insert into student (fname,lname, sex) values (?,?,?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("sss", $fname,$lname,$sex);
//set parameter and excute
$fname ="Henok";
$lname ="Tadele";
$sex ="Male";
$stmt->execute();

$fname ="Bereket";
$lname ="Tadele";
$sex ="Male";
$stmt->execute();

$fname ="Tadelech";
$lname ="Gebre";
$sex ="Female";
$stmt->execute();

echo "New record is inserted successfully!";
$stmt->close();

mysqli_close($conn);
?>