<?php
    //endpoint
    ////http://localhost/api_php/getuser.php

    //Obtener los datos

    //Un método get es como abrir el navegador, PARA CONSULTAR GET

    $method = $_SERVER['REQUEST_METHOD'];
    if($method === 'GET')
    {
        include_once ('db_connection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        $email= $data -> email;

        $sql = "SELECT * FROM new WHERE email = '{$email}'";
        $result = $conn -> query ($sql);

       
        $correo= array();
        if($result -> num_rows > 0)       
        {
           
            while($row = $result -> fetch_assoc())
            {
                $correo[] = $row;               
            }
           
           echo json_encode(array('state' => true,'response'=> "email exist", 'data'=> $email));
        }   
        else
        {
            echo json_encode(array('state' => false,'response'=> 'Registrarse'));

        } 
    }
    else
    {
        echo json_encode(array('response'=> 'Bad request, try again'));

    }

?>