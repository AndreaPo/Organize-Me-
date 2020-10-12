<?php 

     include __DIR__ . '/connection.php';



     $id = $_POST['id'];



     $sql = "DELETE FROM task WHERE id = '$id'";



     $res = $pdo->query($sql);



     header("Location: home.php");

?>