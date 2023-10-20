<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_host="cs-4413-002-fall-2023.mysql.database.azure.com";        //Change this
$db_user="dglqqslili";        //Change this
$db_pass="cs-4413-002";        //Change this
$db_name="z_url_set_1";     //Do not change

$db_conn = mysqli_init();
mysqli_ssl_set($db_conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($db_conn, $db_host, $db_user, $db_pass, $db_name, 3306, MYSQLI_CLIENT_SSL);

//$db_conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

//mysqli_real_connect($db_conn, $db_host, $db_user, $db_pass, $db_name, 3306);
if (mysqli_connect_errno())
{
    echo 'Connection to database failed:'.mysqli_connect_error();
    exit();
}

echo "database connection success<br>";
echo "<strong>now showing results from a database query...</strong>";


$query="SELECT * FROM lab9 WHERE url_tld='academy' AND url_status='added';";

$result = $db_conn->query($query);


if($result->num_rows  > 0) {
    echo $result->num_rows.' records returned<br>';
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['url_domain'].".".$row['url_tld']."<br>";
    }
} else {
    echo '<br>no records returned';
} 

$db_conn->close();

