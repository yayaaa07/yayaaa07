<?php

// Variabel database
$servername = 'localhost';
$username = 'byanaaa';
$password = 'SerenDipity255!';
$dbname = 'monitoringkolamikan';

$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
// Prepare the SQL statement
$var1 = $_GET['suhu'];
$var2 = $_GET['tinggi'];
$var3 = $_GET['cuaca'];
$var4 = date("Y-m-d h:i:s");

$result = mysqli_query ($conn,"INSERT INTO datasensor
(suhu,ketinggian,cuaca,waktu) VALUES ('$var1','$var2','$var3','$var4)");
if (!$result)
{
    die('Invalid query :' .mysqli_error($conn));

}

?>