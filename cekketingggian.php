<?php
$databaseHost = 'localhost';
$databaseName = 'monitoringkolamikan';
$databaseUsername = 'byanaaa';
$databasePassword = 'SerenDipity255!';

$con = mysqli_connect($databaseHost, $databaseUsername,
$databasePassword, $databaseName);
$sql = mysqli_query($con, "SELECT ketinggian FROM datasensor order by id
 DESC");
 $data=mysqli_fetch_array($sql);
 $suhu=$data["ketinggian"];
 echo $ketinggian  ;

 ?>
