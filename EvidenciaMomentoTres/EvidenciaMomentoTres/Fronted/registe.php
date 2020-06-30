<?php include_once('layouts\header.php') ?>



<section>
    <form action="addregiste.php" method="post" onsubmit="return validate()">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="name" placeholder="Name" id="name" maxlength="40">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="lastname" id="lastname" name="lastname" maxlength="40">
            </div>
        </div>

        <br>
        <br>


        <div class="row">
        <div class="col">
                <input type="text" class="form-control" placeholder="Type (CC - Cedula; Pas - Pasaporte)" id="typeident" name="typeident" maxlength="3">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Número de identificación" id="identification" name="identification" maxlength="10">
            </div>  
                     
        </div>


        <br>
        <br>

        <div class="row">
        <div class="col">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email">
            </div>
            <div class="col">
                <input type="password" class="form-control" placeholder="Password" id="passwords" name="passwords" minlength="8" maxlength="16">
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