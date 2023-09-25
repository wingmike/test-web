<?php
require "connection.php";
$sql="drop database db";
if(mysqli_query($conn,$sql)){
  echo "database is deleted successfully!";
}else {
  echo "error deleting database".mysqli_error($conn);
}
mysqli_close($conn);
?>  