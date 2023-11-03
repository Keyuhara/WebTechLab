<html>
    <body>
        <?php
            $myfile = fopen("data.txt", "rb") or die("Unable to open file!");
            while (!feof($myfile) ) {
                $line = fgets($myfile);
                $parts = explode(' ', $line);
                print $parts[0].$parts[1]."<br>";
            }
            fclose($myfile);
        ?>
    </body>
</html>