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

    <?php $this->load->view("general/rootnav.php") ?>

    

    <div class="container">
        <?php if (isset($error)): ?>
	        <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?=$error?>
            </div>
	    <?php endif; ?>
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>
            </div>
            <div class="col-md-4">
                <!--<a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>-->
            </div>
            <div class="col-md-4">
                <a class="btn btn-primary float-right" href="<?= base_url('index.php/users/new')?>"><i class="fa fa-plus"></i> Nuevo </a>
            </div>
        </div><br>
        <h2>Lista de usuarios</h2>
        <div class="card"> 
            <table class="table">
                <tr>
                    <th class="">Nombre</th>
                    <th class="">Correo</th>                  
                    <th class="">Fecha de contratación</th>
                    <th class="">Status</th>
                    <th class="">Roles</th>
                    <th class="">Actividades</th>
                </tr>
                <?php foreach($users as $user): ?>
                <tr>
                    <th class="">
                        <label><?= htmlentities($user->name." ".$user->lastname)?></label><br>
                    </th>
                    <th classs="">
                        <label><?= htmlentities($user->email)?>
                    </th>
                    <th class="">
                        <label><?= htmlentities($user->contract_date)?>
                    </th>
                    <th class="">
                        <?php if($user->deleted == '0'): ?>
                            <label>Activo</label>
                        <?php endif;?>
                        <?php if($user->deleted == '1'): ?>
                            <label>Inactivo</label>
                        <?php endif;?>
                    </th>
                    <th class="">
                    <?php foreach($roles as $role): ?>
                        <?php if($user->id == $role->id_user): ?>
                            <?php if($role->name == "AA"): ?>
                                <label>Adm. de la agencia</label><br>
                            <?php endif;?>
                            <?php if($role->name == "AE"): ?>
                                <label>Adm. de empresa</label><br>
                            <?php endif;?>
                            <?php if($role->name == "CM"): ?>
                                <label>Community manager</label><br>
                            <?php endif;?>
                            <?php if($role->name == "GC"): ?>
                                <label>Generador de contenidos</label><br>
                            <?php endif;?>
                            <?php if($role->name == "D"): ?>
                                <label>Diseñador</label><br>
                            <?php endif;?>
                            <?php if($role->name == "C"): ?>
                                <label>Cliente</label><br>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endforeach; ?>
                    </th>
                    <th class="">
                        <!--<a class="btn btn-success" href="">Roles <i class="fa fa-eye"></i></a><br><br>-->
                        <a class="btn btn-warning" href="<?= base_url('index.php/users/edit/'.$user->id) ?>">Modificar <i class="fa fa-edit"></i></a><br><br>
                        <?php if($user->deleted == '0'): ?>
                        <a class="btn btn-danger" href="<?= base_url('index.php/users/delete/'.$user->id) ?>">Eliminar <i class="fa fa-trash-alt"></i></a>
                        <?php endif;?>
                        <?php if($user->deleted == '1'): ?>
                        <a class="btn btn-success" href="<?= base_url('index.php/users/delete/'.$user->id) ?>">Restaurar <i class="fa fa-sync-alt"></i></a>
                        <?php endif;?>
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