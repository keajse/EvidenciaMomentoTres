<?php
    $method = $_SERVER['REQUEST_METHOD'];

    //DELETE para actualizar
    
    if($method === 'DELETE')
    {
        include_once ('db_connection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        $id = $data -> id;
       
        $sql = "DELETE FROM properties WHERE id = {$id}"; 
        $result = $conn -> query($sql);

        echo json_encode(array('state' => true,'response' => 'Property deleted successfully'));
    }



?>