<?php include_once('layouts\header.php') ?>


<section>
    <form action="validatestart.php" method="post" onsubmit="">
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
           Ingresar
        </button>
    </form>




<?php include_once('layouts\footer.php') ?>