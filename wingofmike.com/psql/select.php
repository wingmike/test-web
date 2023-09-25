<?php
require "connection.php";
//select data from DB
$sql = "SELECT id, fname, lname, sex FROM student ";
$result = mysqli_query($conn, $sql);
//output data of each row
while($row = mysqli_fetch_assoc($result)) {
  echo $row["id"]. $row["fname"]. $row["lname"]. $row["sex"]."<br>";
}
mysqli_close($conn);
?>