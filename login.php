<!DOCTYPE html>
<html>
<head>
    
<meta charset="UTF-8">

<tittle>Monitoring Kolam Ikan Login</title>

<link rel='stylesheet'
href='htttp://codepen.io/assets/libs/fullpage/jquery-ui.css'>

<link rel="stylesheet" href="css2/style.css" media="screen"
type="text/css" />

</head>

</body>

<?php
 if(isset($_GET['pesan'])) {
    if($_GET['pesan'] == "gagal"){
   echo "<script>alert('Login gagal username dan password harus di isi!!!')</script>";
    }else if($_GET['pesan'] == "logout"){
        echo "script>alert('Anda berhasil logout')</script>";
    }else if($_GET['pesan'] == "belum login"){

    }
    }
 ?>

 <div class="login-card">
    <h1>Log-in</h1><br>
    <form method="post" action="ceklogin.php">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login"class="login" login-submit" value="login" >
</form>


</div>

<!-- <div id="error"><img
src="https://d1.dropboxusercontent.com/u/2399152/Delate-icon.png" />
Your caps-lock is on.</div> -->

<scriptsrc='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>
</html
>