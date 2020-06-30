<?php
     if(isset($_GET['id']))
     {
         include_once('db_connection.php');
 
         $id = $_GET['id'];

         $name = $_POST['name'];   
         $lastname = $_POST['lastname'];
         $typeident = $_POST['typeident'];
         $identification = $_POST['identification'];        
         $email = $_POST['email'];
         $passwords = $_POST['passwords'];

         $sql = "UPDATE new SET name ='{$name}', lastname ='{$lastname}', typeident = '{$typeident}', identification = '{$identification}', email = '{$email}', passwords = '{$passwords}' WHERE id = {$id}"; 
         $result = $conn -> query($sql);
 
         header("location:");
         
            
     }

?>
