<?php ob_start(); 

      if (isset($_POST['submit'])) {



        if( empty($_POST['password'] || empty($_POST['email']))){



            echo"empties fields!<br>";

    

        }else{



            try {

                



                include __DIR__ . "/connection.php";



                $email = $_POST['email'];

                $password = $_POST['password'];



                $sql = "SELECT * FROM users WHERE email = :email";



                $stmt = $pdo->prepare($sql);



                $stmt->bindValue(':email', $email);

                

                $stmt->execute();



                while($row = $stmt->fetch()){



                    $hashedPassDb = $row['password'];

                    

                    if(password_verify($password, $hashedPassDb)){

                        

                        echo "Ok";

                        

                        session_start();

                     

                        $_SESSION['name'] = $row['name'];

                        $_SESSION['id'] = $row['id'];

                        $_SESSION['email'] = $row['email'];



                        echo $_SESSION['name'] . " " . $_SESSION['id'] . $_SESSION['email'];

                        header("Location: home.php");

                        exit();

                     }

                }



            } catch (PDOException $error) {

                $error->getMessage() .  ' in ';

                $error->getFile() .  ' : ' . $error->getLine();

            }

        }

      }

?>