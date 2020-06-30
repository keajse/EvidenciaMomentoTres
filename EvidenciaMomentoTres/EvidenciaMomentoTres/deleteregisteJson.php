<?php
    $method = $_SERVER['REQUEST_METHOD'];

    //DELETE para actualizar
    
    if($method === 'DELETE')
    {
        include_once ('db_connection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        $id = $data -> id;
       
        $sql = "DELETE FROM new WHERE id = {$id}"; 
        $result = $conn -> query($sql);

        echo json_encode(array('state' => true,'response' => 'Registe deleted successfully'));
    }



?>