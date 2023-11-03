<html>
    <body>
        <table border = "1" cellpadding = "3">
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
            <tr>
            <?php
                $myfile = fopen("data.txt", "rb") or die("Unable to open file!");
                while (!feof($myfile) ) {
                    $line = fgets($myfile);
                    $parts = explode(' ', $line);
                    echo "<tr><td>".$parts[0]."</td><td>".$parts[1]."</td></tr>";
                }
                fclose($myfile);
            ?>
        <table>
    </body>
</html>