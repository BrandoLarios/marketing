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
            Brando Larios
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
    <!-- content -->
    <div class="content-fluid">
        <div class="row">
            <nav class="col-md-2">
                
            </nav>
            <main class="col-md-10">
                <div class="container">
                    <h2><center>Agregar usuario</center></h2><br>
                    <form action="<?= base_url('index.php/admin/user/create') ?>" method="POST">
                        <h5 class="card-title" for="">Datos personales y de contacto</h5>
                        <!-- Nombre, Apellido y Correo -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Nombre:</span>
                                    </div>
                                    <input class="form-control" type="text" id="" name="" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Apellido:</span>
                                    </div>
                                    <input class="form-control" type="text" id="" name="" placeholder="Apellido" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Correo:</span>
                                    </div>
                                    <input class="form-control" type="text" id="" name="" placeholder="Correo" required>
                                </div> 
                            </div>
                        </div><br>
                        <!-- Estado, municipio y código postal -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Estado:</span>
                                    </div>
                                    <input class="form-control" type="text" id="" name="" placeholder="Estado" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Municipio:</span>
                                    </div>
                                    <input class="form-control" type="text" id="" name="" placeholder="Municipio" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">CP:</span>
                                    </div>
                                    <input class="form-control" type="text" id="" name="" placeholder="Código postal" required>
                                </div>
                            </div>
                        </div><br>
                        <!-- Dirección, fecha de nacimiento y fecha de contrato -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Direccion:</span>
                                    </div>
                                    <input class="form-control" type="text" id="" name="" placeholder="Colonia, calle y numero" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Fecha de nacimiento:</span>
                                    </div>
                                    <input class="form-control" type="date" id="" name="" required>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Fecha de contrato:</span>
                                    </div>
                                    <input class="form-control" type="date" id="" name="" required>
                                </div> 
                            </div>
                        </div><br>
                        <!-- Numero de celular y telefono -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Teléfono:</span>
                                    </div>
                                    <input class="form-control" type="number" id="" name="" placeholder="Teléfono" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Celular:</span>
                                    </div>
                                    <input class="form-control" type="number" id="" name="" placeholder="Celular" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--<div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">CP:</span>
                                    </div>
                                    <input class="form-control" type="text" id="" name="" placeholder="Código postal" required>
                                </div>-->
                            </div>
                        </div><br>
                        <h5 class="card-title" for="">Roles de usuarios</h5>
                        <!-- Administrador principal y de empresa y cliente -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <label class="form-control">Administrador principal</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <label class="form-control">Administrador de empresa</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <label class="form-control">Cliente</label>
                                </div> 
                            </div>
                        </div><br>
                        <!-- community manager, generador de contenidos y diseñador -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <label class="form-control">Community manager</label>
                                </div> 
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <label class="form-control">Generador de contenidos</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox">
                                        </div>
                                    </div>
                                    <label class="form-control">Diseñador</label>
                                </div>
                            </div>
                            
                        </div><br>
                        <!-- Botones para regresar a home y agregar al ususario -->
                        <div class="row">
                            <div class="col-md-4">            
                                <a href="<?= base_url('index.php/admin/user/create') ?>" class="btn btn-warning">
                                    <i class="fa fa-arrow-left"></i>  Regresar
                                </a>                                
                            </div>
                            <div class="col-md-4">
                                <!-- <center>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-save"></i> Agregar 
                                    </button>
                                </center> -->
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success" type="submit">
                                    <i class="fa fa-save"></i> Agregar
                                </button>
                            </div>
                        </div>
                    </form>
                </div> 
            </main>
        </div>
    </div>
    
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js.map'); ?>"></script> -->

</body>
</html>