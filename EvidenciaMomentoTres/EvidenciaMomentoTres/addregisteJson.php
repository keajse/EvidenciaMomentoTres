<?php

    //http://localhost/EvidenciaMomentoTres/addregiste.php

    $method = $_SERVER['REQUEST_METHOD'];
    
    //Si voy a agregar datos se debe colocar POST
    if($method === 'POST')
    {
       
        include_once ('db_connection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
       
        $name ="";
        $lastname = "";
        $typeident = "";
        $identification = "";
        $email ="";
        $passwords ="";
        if(isset($data -> name) && isset($data -> lastname) && isset($data ->typeident) && isset($data -> identification) && isset($data -> email) && isset($data -> passwords)) 
        {            
            $name = $data -> name;
            $lastname= $data -> lastname;
            $typeident= $data -> typeident;
            $identification = $data -> identification;
            $email= $data -> email;
            $passwords= $data -> passwords;

            if($name == "" || $lastname == "" || $typeident == "" || $identification == "" || $email == "" || $passwords == "" || strlen($name)>40 || strlen($lastname)> 40 || strlen($typeident)>3 || strlen($identification)>10 || strlen($passwords)<8 || strlen($passwords)> 16 || !preg_match('/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/', $passwords) || !preg_match('/com$/',$email) || !preg_match('/@/',$email) 
            )           
            {
                echo json_encode(array('response' => 'Invalid format', 'state' => false));
            }
            else
            {
                $sql = "INSERT INTO new (name, lastname, typeident, identification, email, passwords) VALUES ('{$name}', '{$lastname}','{$typeident}','{$identification}', '{$email}', '{$passwords}')" ; 
                $result = $conn -> query($sql);

                echo json_encode(array('state' => true,'response' => 'Registe successfully' ));

                

            }            
        }
        else
        {
            echo json_encode(array('state' => false,'response' => "Format Invalid"));
        }

              
    }



?>