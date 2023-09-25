<?php
require "connection.php";
$sql="insert into student (fname,lname, sex) values ('Natnael','Tadele','Male')";

if(mysqli_query($conn,$sql)){
  echo "data is inserted successfully!";
}else {
  echo "error insertting data!".mysqli_error($conn);
}
mysqli_close($conn);
?>