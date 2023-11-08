<?php
    setcookie("cs4413", "cs4413", time() + 100);
    if (isset($_COOKIE["cs4413"])) 
    {
        echo "Cookie is set!";
    }
    else
    { 
        echo "Cookie is NOT set!";
    } 
?>