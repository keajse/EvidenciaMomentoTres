<?php


         
        $name = $_POST['name'];   
        $lastname = $_POST['lastname'];
        $typeident = $_POST['typeident'];
        $identification = $_POST['identification'];        
        $email = $_POST['email'];
        $passwords = $_POST['passwords'];
        

        try
        {
            include_once('db_connection.php');
            $sql = "INSERT INTO new (name, lastname, typeident, identification, email, passwords) VALUES ('{$name}', '{$lastname}','{$typeident}','{$identification}', '{$email}', '{$passwords}')" ; 
            $result = $conn -> query($sql);

            header("location: registe.php");

        }
        catch(Exception $ex)
        {
            echo "DB connection error";
        }

?>