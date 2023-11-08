<?php
    if (isset($_COOKIE["cs4413"])) 
    {
        echo "Cookie is set!";
    }
    else
    { 
        echo "Cookie is NOT set! Refresh the page within 100 seconds.";
    } 
    setcookie("cs4413", "cs4413", time() + 100);
?>