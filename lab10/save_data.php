<?php
    $myfile = fopen("data.txt", "a") or die("Unable to open file!");
    $txt = $_POST['fname']." ".$_POST['lname']."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    header("Location: https://cs-4413-002-fall-2023.azurewebsites.net/lab10/");
?> 