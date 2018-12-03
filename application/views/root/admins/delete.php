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
	        <div class="alert alert-danger"><?=$error?></div>
	    <?php endif; ?>
        <h2>Eliminar usuario</h2>
        <?php if($user->deleted == '0'):?>
        <p class=""><?= htmlentities("¿Estas seguro que deseas eliminar al usuario ".$user->name." ".$user->lastname." con los siguientes datos?")?></p>
        <?php endif;?>
        <?php if($user->deleted == '1'):?>
        <p class=""><?= htmlentities("¿Estas seguro que deseas activar al usuario ".$user->name." ".$user->lastname." con los siguientes datos?")?></p>
        <?php endif;?>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-danger" href="<?= base_url('index.php/users/list')?>"><i class="fa fa-ban"></i> No, regresar a la lista.</a>
                <?php if($user->deleted == '0'):?>
                <a class="btn btn-success" href="<?= base_url('index.php/users/drop/'.$user->id)?>"><i class="fa fa-check"></i> Si, deseo eliminar.</a>
                <?php endif; ?>
                <?php if($user->deleted == '1'):?>
                <a class="btn btn-success" href="<?= base_url('index.php/users/active/'.$user->id)?>"><i class="fa fa-check"></i> Si, deseo restaurar.</a>
                <?php endif; ?>
            </div>
            <div class="col-md-6"></div>
        </div><br>
        <div class="row">
            <div class="col-md-4">
                <h4><strong>Información personal</strong></h4>
                <label><b> Nombre:   </b><?= htmlentities($user->name." ".$user->lastname) ?></label><br>
                <label><b> CURP:     </b><?= htmlentities($user->CURP) ?></label><br>
                <label><b> Correo:   </b><?= htmlentities($user->email) ?></label><br>
                <label><b> Telefono: </b><?= htmlentities($user->phone) ?></label><br>
                <label><b> Celular:  </b><?= htmlentities($user->cellphone) ?></label><br>
            </div>
            <div class="col-md-4">
                <h4><strong>Informacion residencial</strong></h4>
                <label><b>Dirección:     </b><?= htmlentities($user->direction) ?></label><br>
                <label><b>Colonia:       </b><?= htmlentities($user->colony) ?></label><br>
                <label><b>Municipio:     </b><?= htmlentities($user->municipality) ?></label><br>
                <label><b>Estado:        </b><?= htmlentities($user->state) ?></label><br>
                <label><b>Codigo postal: </b><?= htmlentities($user->cp) ?></label><br>
            </div>
            <div class="col-md-4">
                <h4><strong>Informacón laboral</strong></h4>
                <label><b>RFC:                   </b><?= htmlentities( $user->RFC) ?></label><br>
                <label><b>Fecha de contratación: </b><?= htmlentities( $user->contract_date) ?></label><br>
                <label><b>Horario laboral:       </b><?= htmlentities("De ".$user->inhour)." a ".$user->outhour ?></label><br>
            </div>
        </div>
    </div>

    <?php $this->load->view("general/scripts.php") ?>

</body>
</html>