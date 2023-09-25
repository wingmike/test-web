<?php
$newfile= fopen("sample.txt","r") or die("unable to open!");
$txt= "NATI MAN\n";
//fwrite($newfile,$txt);
echo fgets($newfile, filesize("sample.txt"));
?>