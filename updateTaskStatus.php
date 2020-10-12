<?php 

     include __DIR__ . '/connection.php';



     $id = $_POST['id'];

     $status = $_POST['status'];



     $sql = "UPDATE task SET status='$status' WHERE id='$id'";



     $res = $pdo->query($sql);



     header("Location: home.php");

?>