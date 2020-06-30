<?php

   

    $method = $_SERVER['REQUEST_METHOD'];
    
   
    if($method === 'POST')
    {
        include_once ('db_connection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
       
        $userid ="";
        $title = "";
        $typeprop = "";
        $adress = "";
        $room ="";
        $price ="";
        $area = "";
        if(isset($data -> userid) && isset($data -> title) && isset($data ->typeprop) && isset($data -> adress) && isset($data -> room) && isset($data -> price) && isset($data -> area)) 
        {            
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
                $sql = "INSERT INTO properties (userid, title, typeprop, adress, room, price, area) VALUES ('{$userid}', '{$title}', '{$typeprop}','{$adress}','{$room}', '{$price}', '{$area}')" ; 
                $result = $conn -> query($sql);

                echo json_encode(array('state' => true, 'response' => 'Registe successfully'));

                

            }            
        }
        else
        {
            echo json_encode(array('state' => false,'response' => "Format Invalid"));
        }

              
    }



?>