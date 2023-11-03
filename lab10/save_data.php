<?php

$myfile = fopen("data.txt", "a") or fopen("data.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
$txt = $_POST['fname']." ".$_POST['lname']."\n";
fwrite($myfile, $txt);
fclose($myfile);

?>