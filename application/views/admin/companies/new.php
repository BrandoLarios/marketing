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
        <?php if (isset($error)): ?>
	        <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?=$error?>
            </div>
	    <?php endif; ?>
        <!--Inicio de botones para regresar al dashboard o ir a la lista-->
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a class="btn btn-primary float-right" href="<?= base_url('index.php/users/list')?>"><i class="fa fa-eye"></i> Lista de empresas</a>
            </div>
        </div><br>
        <!--Fin de botones para regresar al dashboard o ir a la lista-->    
        <h2>Agregar empresa</h2>
        <form action="<?= base_url('index.php/users/add') ?>" method="POST">
        <!-- Inicio de información empresarial -->
            <h5 class="card-title" for="">Información empresarial</h5>
            <!-- Nombre y razón social -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="name" placeholder="" required value="<?= (isset($user['name'])) ? $user['name'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Razón social:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="social" placeholder="" required value="<?= (isset($user['lastname'])) ? $user['lastname'] : '' ?>">
                    </div>
                </div>
            </div><br>
        <!-- Fin de información empresarial -->

        <!-- Inicio de información de contacto-->
            <h5 class="card-title" for="">Información de contacto</h5>
            <!-- Dirección, colonia y municipio -->
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Dirección:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="direction" placeholder="Calle y número" required value="<?= (isset($user['direction'])) ? $user['direction'] : '' ?>"> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Colonia:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="colony" placeholder="" value="<?= (isset($user['colony'])) ? $user['colony'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Municipio:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="municipality" placeholder="" required value="<?= (isset($user['municipality'])) ? $user['municipality'] : '' ?>">
                    </div>
                </div>
            </div><br>
            <!-- Estado y codigo postal -->
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Estado:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="state" placeholder="" required value="<?= (isset($user['state'])) ? $user['state'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Código postal:</span>
                        </div>
                        <input class="form-control" type="number" id="" name="cp" placeholder="" min="00001" max="99999" pattern="[0-9]{5}" required value="<?= (isset($user['cp'])) ? $user['cp'] : '' ?>">
                    </div>
                </div>
            </div><br>
             <!-- Correo, numero de telefono y celular -->
             <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Correo:</span>
                        </div>
                        <input class="form-control" type="email" id="" name="email" placeholder="ejemplo@ejem.plo" required value="<?= (isset($user['email'])) ? $user['email'] : '' ?>">
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Telefono:</span>
                        </div>
                        <input class="form-control" type="tel" id="" name="phone" placeholder="" pattern="[0-9]{7}" value="<?= (isset($user['phone'])) ? $user['phone'] : '' ?>">
                    </div> 
                </div>          
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Celular:</span>
                        </div>
                        <input class="form-control" type="tel" id="" name="cellphone" placeholder="" pattern="[0-9]{10}" required value="<?= (isset($user['cellphone'])) ? $user['cellphone'] : '' ?>">
                    </div>
                </div>
            </div><br>
        </form>
    </div>

    <?php $this->load->view("general/scripts.php") ?>

</body>

</html>