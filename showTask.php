<?php

      include __DIR__ . '/connection.php';



      $email = $_SESSION['email'];



      $sql = "SELECT *, DATE(dateinput) FROM task WHERE email = '$email'";



      $res = $pdo->query($sql);      



      while($row = $res->fetch()){



      if($row['status'] > 30 && $row['status'] < 100){

        $bgWarning = "bg-warning";

        $borderWarning =  "border-warning";



        echo "<div class='card " . $borderWarning . " '><h2  class='card text-center ". $bgWarning."' id='bgTitle'>"  . strtoupper($row['title']) . "</h2>";



      }else if($row['status'] == 100){

            $bgSuccess = "bg-success"; 

            $borderSuccess = "border-success";

    

            echo "<div class='card ".$borderSuccess."'><h2  class='card text-center ". $bgSuccess."' id='bgTitle'>"  . strtoupper($row['title']) . "</h2>";

    

      }else {

            $bgPrimary = "bg-primary"; 

    

            echo "<div class='card border-primary'><h2  class='card text-center ". $bgPrimary."' id='bgTitle'>"  . strtoupper($row['title']) . "</h2>";

    

      }



        echo "<p class='font-weight-bold'>"  . $row['description'] . "</p>";



        echo "<form action='updateTaskStatus.php' method='post'>

              <h5>Status: " . $row['status'] . "/100</h5>

              <input type='range' class='form-control' name='status' min='0' max='100' value='" . $row['status'] . "' required>

              <input type='hidden' name='id' value='" . $row['id'] . "'>

              <input type='submit' class='btn btn-success' name='submit' value='UPDATE STATUS'>

              </form>";

            

        echo "<h5>Added on date: ". $row['DATE(dateinput)'] . "</h5>";



        echo "<h5>Deadline: " . $row['dateoutput'] ."  </h5>";



        echo "<h2 class='text-right'><form action='deleteTask.php' method='post'>

              <input type='hidden' name='id' value='" . $row['id'] . "'>

              <input type='submit' class='btn btn-danger' name='submit' value='X'></form></h2></div><br>";



      }



        

?>