<?php
    $method = $_SERVER['REQUEST_METHOD'];

   
    
    if($method === 'GET')
    {
        include_once ('db_connection.php');
        $request = file_get_contents('php://input');
        $data = json_decode($request);
        
       
        $sql = "SELECT * FROM properties"; 
        $result = $conn -> query($sql);
        $prop = array();

        if($result -> num_rows > 0)       
        {
            
            while($row = $result -> fetch_assoc())
            {
                $prop [] = $row;               
            }
          
           echo json_encode(array('state' => true,'Property'=> $prop));

 
        }       

        
    }



?>
   
