<?php
   define('DB_SERVER', $_SERVER['RDS_HOSTNAME']);
   define('DB_USERNAME', $_SERVER['RDS_USERNAME']);
   define('DB_PASSWORD', $_SERVER['RDS_PASSWORD']);
   define('DB_DATABASE', $_SERVER['RDS_DB_NAME']);
  
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>