<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar usuario</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/bootstrap.min.css.map'); ?>">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>
    <?php $this->load->view("roles_nav/admin.php") ?>

    <div class="container">
        <h2><center>Lista de usuarios</center></h2><br>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>
            </div>
            <div class="col-md-6">
                <a class="btn btn-success float-right" href="<?= base_url('index.php/admin/new')?>"><i class="fa fa-plus"></i> Nuevo </a>
            </div>
        </div><br>
        <div class="card"> 
            <table class="table">
                <tr>
                    <th class="d-dm-table-cell d-done">Nombre</th>
                    <th class="d-dm-table-cell d-done">Apellido</th>
                    <th class="d-dm-table-cell d-done">Correo</th>
                    <th class="d-dm-table-cell d-done">CURP</th>
                    <th class="d-dm-table-cell d-done">RFC</th>
                    <th class="d-dm-table-cell d-done">Fecha de contratación</th>
                    <th class="d-dm-table-cell d-done">Acciones</th>
                </tr>
            
                <?php foreach($users as $user): ?>
                    <th class="d-dm-table-cell d-done"><?= htmlentities($user->name)?></th>
                    <th class="d-dm-table-cell d-done"><?= htmlentities($user->lastname)?></th>
                    <th class="d-dm-table-cell d-done"><?= htmlentities($user->email)?></th>
                    <th class="d-dm-table-cell d-done"><?= htmlentities($user->CURP)?></th>
                    <th class="d-dm-table-cell d-done"><?= htmlentities($user->RFC)?></th>
                    <th class="d-dm-table-cell d-done"><?= htmlentities($user->contract_date)?></th>
                    <th>
                        <a class="btn btn-success" href=""><i class="fa fa-eye"></i> Ver</a>
                        <a class="btn btn-warning" href=""><i class="fa fa-edit"></i> Editar</a>
                        <a class="btn btn-danger" href=""><i class="fa fa-trash-alt"></i> Eliminar</a>
                    </th>
                <?php endforeach; ?>
            
            </table>
        </div>
    </div>

    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js.map'); ?>"></script> -->
</body>
</html>