<?php
$databaseHost = 'localhost';
$databaseName = 'monitoringkolamikan';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
$sql = mysqli_query($con, "SELECT suhu FROM datasensor order by id
 DESC");
 $data=mysqli_fetch_array($sql);
 $suhu=$data["suhu"];
 echo $suhu;

 ?>