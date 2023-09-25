<?php
//SERVER
echo "<h3>Server info</h3>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];

//CLIENT
echo "<h3>Client info</h3>";
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REMOTE_PORT'];
?>