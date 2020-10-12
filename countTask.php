<?php

       include __DIR__ . '/connection.php';



       $email = $_SESSION['email'];



       $sql = "SELECT COUNT(title) FROM task WHERE email = '$email'";



       $res = $pdo->query($sql);



       $row = $res->fetch();

           

       $count = $row[0];



       echo "<h1>You have " . $count . " tasks</h1>";



?>