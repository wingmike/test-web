<?php
require "connection.php";
$sql = "UPDATE student SET lname='Tadele' WHERE id=3";

if(mysqli_query($conn,$sql)){
  echo "data is updated successfully!";
}else {
  echo "error updating data!".mysqli_error($conn);
}
mysqli_close($conn);
?>