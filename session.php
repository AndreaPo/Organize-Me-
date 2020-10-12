<?php
        session_start();
          if( isset($_SESSION['id'])){
            echo "<h1>Welcome " . strtoupper($_SESSION['name']) . "</h1>";
        }else
        {
          header("Location: index.html");
        }
?>