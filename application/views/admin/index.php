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
    <!-- Aprtado visual para el desplazamiento del administrador -->
    <?php $this->load->view("roles_nav/admin.php") ?>    
    <!-- Contenido principal -->
    <div class="container">
        <div class="row">
            <a class="card col-md-6" href="">
                <center>
                    <div class="" style="width: 18rem;">
                        <i class="fa fa-bell fa-2x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Mensajes</h5>
                        </div>
                    </div>
                </center>
            </a>
            <!--<div class="col-md-1"></div>-->
            <a class="card col-md-6" href="">
                <center>
                    <div class="" style="width: 18rem;">
                        <i class="fa fa-bell fa-2x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Notificaciones</h5>
                        </div>
                    </div>
                </center>
            </a>
        </div>
        
    </div>
    
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js.map'); ?>"></script> -->

</body>
</html>