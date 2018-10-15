<?php defined('BASEPATH') or exit('No direct script access allowed') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin-Pricnipal</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/bootstrap.min.css.map'); ?>">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <!-- Apartado para imagen y Nombre -->
        <a class="navbar-brand" href="">
            <i class="far fa-image"></i>
            Jose Madera
        </a>
        <!-- Mensajeria, notificaciones y configuración de usuario -->
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-home navbar-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell navbar-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-comments navbar-icon"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog navbar-icon"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav><br> 
    <div class="container">
        <div class="row">
            <h1>tareas pendientes</h1>
        </div>
       <div class="container">
         <div class="row">
           <div class="col-lg-4 col-sm-6" style="width: 18rem;">
             <img class="card-img-top" src="<?php echo base_url();?>/img/default.png"" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Publicacion 1</h5>
                  <p class="card-text">11/09/19</p>
                  <p class="card-text">camapaña 1 - hijo 3</p>
                 </div>
            </div>
            <div class="col-lg-4 col-sm-6" style="width: 18rem;">
             <img class="card-img-top" src="<?php echo base_url();?>/img/default.png"" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Publicacion 1</h5>
                  <p class="card-text">11/09/19</p>
                  <p class="card-text">camapaña 1 - hijo 3</p>
                 </div>
            </div>
            <div class="col-lg-4 col-sm-6" style="width: 18rem;">
             <img class="card-img-top" src="<?php echo base_url();?>/img/default.png"" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Publicacion 1</h5>
                  <p class="card-text">11/09/19</p>
                  <p class="card-text">camapaña 1 - hijo 3</p>
                 </div>
            </div>
            <div class="col-lg-4 col-sm-6" style="width: 18rem;">
             <img class="card-img-top" src="<?php echo base_url();?>/img/default.png"" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Publicacion 1</h5>
                  <p class="card-text">11/09/19</p>
                  <p class="card-text">camapaña 1 - hijo 3</p>
                 </div>
            </div>
             
         </div>   
       </div>

    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js.map'); ?>"></script> -->
</body>
</html>