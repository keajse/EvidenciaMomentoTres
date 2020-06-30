<?php include_once('layouts\header.php') ?>


<?php 
     if(isset($_GET['id']))
     {
         include_once('db_connection.php');
 
         $id = $_GET['id'];
         $sql = "SELECT * FROM new WHERE id = {$id}";
         $result = $conn -> query($sql);
 
        if($result->num_rows>0)
        {
            $row = $result ->fetch_assoc();            
        }
     }

?>

<section>
    <form action="updateregiste.php?id= <?php echo $row['id'] ?>" method="post" onsubmit="return validate()">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="name" placeholder="Name" id="name" maxlength="40" value="<?php echo $row['name']?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="lastname" id="lastname" name="lastname" maxlength="40" value="<?php echo $row['lastname']?>">
            </div>
        </div>

        <br>
        <br>


        <div class="row">
        <div class="col">
                <input type="text" class="form-control" placeholder="Type (CC - Cedula; Pas - Pasaporte)" id="typeid" name="typeid" maxlength="3" value="<?php echo $row['typeid']?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Número de identificación" id="identification" name="identification" maxlength="10" value="<?php echo $row['identification']?>">
            </div>  
                     
        </div>


        <br>
        <br>

        <div class="row">
        <div class="col">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo $row['email']?>">
            </div>
            <div class="col">
                <input type="password" class="form-control" placeholder="Password" id="passwords" name="passwords" minlength="8" maxlength="16" value="<?php echo $row['passwords']?>">
                <p>Debe contener entre 8 a 16 caracteres, y tener dos caracteres especiales (*$!#%&)</p>
            </div>  
                  
        </div>
        
        
        <br>
        <br>
        <!-- <button type="submit">Submit</button> -->

        <button type="submit" class="btn btn-success">
           Registe
        </button>
    </form>
</section>




<?php include_once('layouts\footer.php') ?>