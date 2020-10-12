<?php ob_start(); 

       include __DIR__ . "/session.php";

       include __DIR__ . "/connection.php";



       $email = $_SESSION['email'];

       $name = $_SESSION['name'];



       if(isset($_GET['submit'])){



        echo $_GET['title'] . $_GET['description'] . $_GET['status'] .$_GET['date'];



        if(empty($_GET['title']) || empty($_GET['description']) || empty($_GET['status']) || empty($_GET['date'])){



            echo "empty fields!";



        }else{

 

            $description = htmlspecialchars($_GET['description'], ENT_QUOTES, 'UTF-8');



            $title = $_GET['title'];

            $status = $_GET['status'];

            $endDate = $_GET['date'];



            try {



                $sql = "INSERT INTO task (email, title, description, status, dateoutput, name) VALUES ( :email, :title, :description, :status, :dateoutput, :name)";



                $stmt = $pdo->prepare($sql);

                

                $stmt->bindValue(':email', $email);

                

                $stmt->bindValue(':title', $title);



                $stmt->bindValue(':description', $description);



                $stmt->bindValue(':status', $status);



                $stmt->bindValue(':dateoutput', $endDate);



                $stmt->bindValue(':name', $name);

                

                $stmt->execute();



                header("Location: home.php");

                

            } catch (PDOException $error) {



            $error->getMessage() .  ' in ';

            $error->getFile() .  ' : ' . $error->getLine();

            }



        }



       }

?>