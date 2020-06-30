<?php
    $method = $_SERVER['REQUEST_METHOD'];

    //PUT para actualizar
    
    if($method === 'PUT')
    {
        include_once ('db_connection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        $id = $data -> id;     

        $userid = $data -> userid;
        $title= $data -> title;
        $typeprop= $data -> typeprop;
        $adress = $data -> adress;
        $room= $data -> room;
        $price= $data -> price;
        $area= $data -> area;

        if($userid == "" || $title == "" || $typeprop == "" || $adress == "" || $room == "" || $price == "" || $area == "" || !is_int($room) || !is_int($price) || !is_int($area))             
        {
            echo json_encode(array('response' => 'Invalid format', 'state' => false));
        }
        else
        {

            $sql = "UPDATE properties SET userid ='{$userid}', title ='{$title}', typeprop = '{$typeprop}', adress = '{$adress}', room = '{$room}', price = '{$price}', area = '{$area}' WHERE id = {$id}"; 
            $result = $conn -> query($sql);

            echo json_encode(array('state' => true,'response' => 'Property updated successfully'));
        }            
    }
    else
    {
        echo json_encode(array('state' => false,'response' => "Format Invalid"));
    }
    



?>