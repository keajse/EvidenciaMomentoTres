<?php
    $method = $_SERVER['REQUEST_METHOD'];

    //PUT para actualizar
    
    if($method === 'PUT')
    {
        include_once ('db_connection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        $id = $data -> id;       
        $name = $data -> name;
        $lastname= $data -> lastname;
        $typeident= $data -> typeident;
        $identification = $data -> identification;
        $email= $data -> email;
        $passwords= $data -> passwords;

        if($name == "" || $lastname == "" || $typeident == "" || $identification == "" || $email == "" || $passwords == "" || strlen($name)>40 || strlen($lastname)> 40 || strlen($typeident)>3 || strlen($identification)>10 || strlen($passwords)<8 || strlen($passwords)> 16 || !preg_match('/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/', $passwords) || !preg_match('/com$/',$email) || !preg_match('/@/',$email)) 

        {
            echo json_encode(array('state' => false, 'response' => 'Invalid format' ));
        }
        else
        {
                
            $sql = "UPDATE new SET name ='{$name}', lastname ='{$lastname}', typeident = '{$typeident}', identification = '{$identification}', email = '{$email}', passwords = '{$passwords}' WHERE id = {$id}"; 
            $result = $conn -> query($sql); 
        
            echo json_encode(array('state' => true,'response' => 'Registe updated successfully'));
        }
    }
    


?>