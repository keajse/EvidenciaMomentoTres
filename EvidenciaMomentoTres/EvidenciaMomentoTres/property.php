<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Alquiler de Viviendas</title>
</head>

<body>
    <div class="container">
        <header>
            <!-- Image and text -->
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="">
                    <img src="Imagenes\k.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    AlquilerK
                </a>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Propiedades</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Registro / Inicio de sesión
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="registe.php">Registro</a>
                                <a class="dropdown-item" href="start.php">Inicio de Sesión</a>
                                
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>

        <br><br>


        <section>
    <form action="addproperty.php" method="post" onsubmit="">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="userid" placeholder="Identificacion" id="userid" maxlength="">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="title" id="title" name="title" maxlength="">
            </div>
        </div>

        <br>
        <br>


        <div class="row">
        <div class="col">
                <input type="text" class="form-control" placeholder="Type" id="typeprop" name="typeprop" maxlength="">
                <p>Vivienda - Habitación - Hostal</p>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Dirección" id="adress" name="adress" maxlength="">
            </div>  
                     
        </div>


        <br>
        <br>

        <div class="row">
        <div class="col">
                <input type="number" class="form-control" placeholder="Habitaciones" id="room" name="room">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Área" id="area" name="area" minlength="" maxlength="">               
            </div>  
            <div class="col">
                <input type="text" class="form-control" placeholder="Valor" id="price" name="price" minlength="" maxlength="">               
            </div>
                  
        </div>
        
        
        <br>
        <br>
        <!-- <button type="submit">Submit</button> -->

        <button type="submit" class="btn btn-success">
           Ingresar
        </button>
    </form>
</section>
