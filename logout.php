<?php 

// jalankan session
session_start();

// kosongkan $_SESSION
$_SESSION = [];

// hapus dan hancurkan session
session_unset();
session_destroy();

// redirect ke halaman index
header("Location: index.php");

 ?>