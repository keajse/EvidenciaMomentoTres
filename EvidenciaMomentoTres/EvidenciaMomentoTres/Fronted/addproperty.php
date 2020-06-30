<?php


         
        $userid = $_POST['userid'];   
        $title = $_POST['title'];
        $typeprop = $_POST['typeprop'];
        $adress = $_POST['adress'];
        $room = $_POST['room'];        
        $price = $_POST['price'];
        $area = $_POST['area'];
        

        try
        {
            include_once('db_connection.php');
            $sql = "INSERT INTO properties (userid, title, typeprop, adress, rooms, price, area) VALUES ('{$userid}', '{$title}', '{$typeprop}','{$adress}','{$room}', '{$price}', '{$area}')" ; 
            $result = $conn -> query($sql);

            header("location: property.php");

        }
        catch(Exception $ex)
        {
            echo "DB connection error";
        }

?>