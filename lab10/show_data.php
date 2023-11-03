<html>
    <body>
        <table>
            <?php
                $myfile = fopen("data.txt", "rb") or die("Unable to open file!");
                while (!feof($myfile) ) {
                    $line = fgets($myfile);
                    $parts = explode(' ', $line);
                    echo "<td>".$parts[0]."</td><td>".$parts[1]."</td><br>";
                }
                fclose($myfile);
            ?>
        <table>
    </body>
</html>