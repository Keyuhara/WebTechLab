<?php
    $myfile = fopen("data.txt", "w") or die("Unable to open file!");
    $txt = $_POST['fname']." ".$_POST['lname']."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    echo file_get_contents("/home/site/wwwroot/lab10");
?> 