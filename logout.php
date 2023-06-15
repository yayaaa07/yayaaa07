<?php
session_start();
session_unset();
// menghapus semua session
session_destroy();

//menghilangkan halaman sambil mengirim pesan
header("location:login.php?pesan=logout");