<?php
   

    $method = $_SERVER['REQUEST_METHOD'];
    if($method === 'GET')
    {
        include_once ('db_connection.php');
        $sql = "SELECT * FROM new";
        $result = $conn -> query ($sql);
        $new = array();
        if($result -> num_rows > 0)       
        {
            
            while($row = $result -> fetch_assoc())
            {
                $new [] = $row;               
            }
          
           echo json_encode(array('state' => true,'Res'=> $new));

 
        }        
    }
    else
    {
        echo json_encode(array('state' => false,'response'=> 'Bad request, try again'));

    }

?>