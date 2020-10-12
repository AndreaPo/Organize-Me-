<?php include "session.php";?><!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>home - Organize Me</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <link rel="stylesheet"  type="text/css" href="css/style.css">

</head>

<body>



<div class="container">



    <div class="row">



        

        <?php include "countTask.php";?>



    </div>



    <div class="row">

        <h2>Map Legend  - Task Status ->

    

        <h2 class="text-primary">To Do -> </h2>

        <h2 class="text-warning">Progress -></h2>

        <h2 class="text-success">Done</h2>

        </h2>

        



    </div>



    <div class="row">



        <div class="col">



            <h1 id="formTitle">ADD TASK</h1>



            <form action="addTask.php" method="GET">



            <input type="text"  class="form-control border border-primary" name="title" placeholder="Title" required><br><br>



            <textarea name="description"  class="form-control border border-primary" rows="4" cols="50" placeholder="Type a description" required></textarea><br>



            <h3>Set the Deadline</h3>



            <input type="date"  class="form-control border border-primary" name="date" required><br><br>



            <h3>Set status from 0 to 100</h3><br>



            <input type="range"  class="form-control border border-primary" name="status" min="0" max="100" value="1" required><br>



           <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" id="btn" value="ADD TO MY LIST">

  

           </form>

        </div>



        <div class="col">



            <?php include __DIR__ . '/showTask.php';?>



        </div>

    </div>

<div>

</body>

</html>