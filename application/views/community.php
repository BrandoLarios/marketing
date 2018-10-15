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
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
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
            <h1>AGENDA DE PUBLICACIONES</h1>
        </div>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Lunes</th>
     <th scope="col">Martes</th>
      <th scope="col">Miercoles</th>
      <th scope="col">Jueves</th>
      <th scope="col">Viernes</th>
      <th scope="col">Sabado</th>
      <th scope="col">Domingo</th>
    </tr>
  </thead>
<tbody>
    <tr>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="<?php echo base_url();?>index.php/welcome/tareas" class="btn btn-primary">tareas</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="<?php echo base_url();?>index.php/welcome/publicaciones" class="btn btn-primary">publicar</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
    </tr><tr>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
      <td>
            <div class="card" style="width: 8rem;">
                <div class="card-body">
                    <h5 class="card-title">Campaña1</h5>
                    <p class="card-title">Publicacion 1</>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
            </div>
      </td>
    </tr>
  </tbody>
</table>
         
     </div> 
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js.map'); ?>"></script> -->
</body>
</html>