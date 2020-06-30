<?php
    
    $email = $_GET['email'];

        include_once('db_connection.php');     
        
       
        $sql = "SELECT * FROM new WHERE email= '{$email}'";
        $result = $conn -> query($sql);
        $correo = array();

       /* $sql_1 = "SELECT * FROM new WHERE passwords = '{passwords}'";
        $result1 = $conn -> query($sql_1); */   
        
        if($result -> num_rows > 0)
        {
            while($row = $result -> fetch_assoc())
            {
                $correo[] = $row;
            }
            header("location: property.php");
        }
        else
        {
            header("location: start.php");
        }
    
?>