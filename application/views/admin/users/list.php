<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
    <?php $this->load->view("general/head.php") ?>

</head>

<body>
    <?php $this->load->view("general/nav.php") ?>

    <div class="container">
        <h2>Lista de usuarios activos</h2><br>
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>
            </div>
            <div class="col-md-4">
                <!--<a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>-->
            </div>
            <div class="col-md-4">
                <a class="btn btn-primary float-right" href="<?= base_url('index.php/users/new')?>"><i class="fa fa-plus"></i>Nuevo </a>
            </div>
        </div><br>
        <div class="card"> 
            <table class="table">
                <tr>
                    <th class="">Nombre</th>
                    <th class="">Correo</th>                    
                    <th class="">Fecha de contratación</th>
                    <th class="">Fecha de registro </th>
                    <th class="">Roles</th>
                    <th class="">Actividades</th>
                </tr>
                <?php foreach($users as $user): ?>
                <tr>
                    <th class="">
                        <label><?= htmlentities($user->name." ".$user->lastname)?></label><br>
                        <!--<label><?= htmlentities($user->email)?></label><br>
                        <label><?= htmlentities($user->phone)?></label><br>
                        <label><?= htmlentities($user->cellphone)?></label>-->
                    </th>
                    <th classs="">
                        <label><?= htmlentities($user->email)?>
                    </th>
                    <th class="">
                        <label><?= htmlentities($user->contract_date)?>
                    </th>
                    <th class="">
                        <label><?= htmlentities($user->register_date)?>
                    </th>
                    <th class="">
                        
                    </th>
                    <th class="">
                        <!--<a class="btn btn-success" href="">Roles <i class="fa fa-eye"></i></a><br><br>-->
                        <a class="btn btn-warning" href="<?= base_url('index.php/users/edit/'.$user->id) ?>">Modificar <i class="fa fa-edit"></i></a><br><br>
                        <a class="btn btn-danger" href="">Eliminar <i class="fa fa-trash-alt"></i></a>
                        <!--<a class="btn btn-secondary" href=""><i class="fa fa-sync"></i></a>-->
                    </th>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

    <?php $this->load->view("general/scripts.php") ?>

</body>

</html>