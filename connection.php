<?php 
     $pdo = new PDO('mysql:host=YOUR_HOST; dbname=YOUR_DB; charset=utf8', 'YOUR_USERNAME', 'YOUR_PASSWORD' );
  
     $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>