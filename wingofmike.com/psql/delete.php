<?php
require "connection.php";
$sql="delete from student where id=5";

if(mysqli_query($conn,$sql)){
  echo "data is deleted successfully!";
}else {
  echo "error deleting data!".mysqli_error($conn);
}
mysqli_close($conn);
?>