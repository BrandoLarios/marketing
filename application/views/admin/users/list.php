<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar usuario</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/bootstrap.min.css.map'); ?>">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

</head>

<body>
    <?php $this->load->view("roles_nav/admin.php") ?>

    <div class="container">
        <h2>Lista de usuarios</h2><br>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>
            </div>
            <div class="col-md-6">
                <a class="btn btn-primary float-right" href="<?= base_url('index.php/admin/new')?>"><i class="fa fa-plus"></i>Nuevo </a>
            </div>
        </div><br>
        <div class="card"> 
            <table class="table">
                <tr>
                    <th class="">Información de contacto</th>                    
                    <th class="">Información residencial</th>
                    <th class="">Información laboral</th>
                    <th class="">Roles</th>
                    <th class="">Acciones</th>
                </tr>
                <?php foreach($users as $user): ?>
                <tr>
                    <th class="">
                        <label>Nombre: <?= htmlentities($user->name." ".$user->lastname)?></label><br>
                        <label>Correo: <?= htmlentities($user->email)?></label><br>
                        <label>Tel: <?= htmlentities($user->phone)?></label><br>
                        <label>Cel: <?= htmlentities($user->cellphone)?></label>
                    </th>
                    <th class="">
                        <label>Dirección: <?= htmlentities($user->colony.",".$user->direction.".")?></label><br>
                        <label>Estado y municipio: <?= htmlentities($user->municipality.",".$user->state.".")?></label><br>
                        <label>Codigo postal: <?= htmlentities($user->cp)?></label>
                    </th>
                    <th class="">
                        <label>Fecha de contratación: <?= htmlentities($user->contract_date)?></label><br>
                        <label>Horario laboral: <?= htmlentities($user->inhour." a ".$user->outhour.".")?></label>
                    </th>
                    <th class="">
                        
                    </th>
                    <th>
                        <a class="btn btn-warning" href=""><i class="fa fa-edit"> Editar</i></a>
                        <a class="btn btn-danger" href=""><i class="fa fa-trash-alt"></i> Eliminar</a>
                    </th>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js.map'); ?>"></script> -->
</body>

</html>