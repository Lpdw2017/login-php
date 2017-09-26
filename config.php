<?php
   define('DB_SERVER', 'db');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'docker');
   define('DB_DATABASE', 'login');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
