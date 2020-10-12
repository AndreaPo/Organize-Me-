<?php

ob_start();

if(isset($_POST['submit'])){



    if(empty($_POST['name']) || empty($_POST['password'])|| empty($_POST['email'])){



        echo"empties fields!<br>";



    }else{



        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){



            echo"not a correct email!<br>";



        }else{



            try{



            $email = strtolower($_POST['email']);



            $name = $_POST['name'];



            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);



            include __DIR__ . '/connection.php';



            $sql = "SELECT COUNT(email) FROM users WHERE email = '$email'";



            $res = $pdo->query($sql);



            $row = $res->fetch();



            if ($row['COUNT(email)'] == 0) {



                $sql = "INSERT INTO users (name, email, password) VALUES ( :name, :email, :password)";



                $stmt = $pdo->prepare($sql);



                $stmt->bindValue(':name', $name);

                

                $stmt->bindValue(':email', $email);

                

                $stmt->bindValue(':password', $password);

                

                $stmt->execute();


                header( "refresh:1;  url=index.html" );



            }else{



                echo '<h1 id="errMsg">You have to use another email!</h1>';



                header( "refresh:2;  url=index.html" );

            }



        }catch(PDOException $error){

     

            $error->getMessage() .  ' in ';

            

            $error->getFile() .  ' : ' . $error->getLine();



        }

    }

}

}

?>