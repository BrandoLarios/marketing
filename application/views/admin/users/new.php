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
        <h2>Agregar usuario</h2><br>
        <div class="row">
            <div class="col-md-4">
                <a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>
            </div>
            <div class="col-md-4">
                <!--<a class="btn btn-warning" href="#"><i class="fa fa-arrow-left"></i> Dashboard </a>-->
            </div>
            <div class="col-md-4">
                <a class="btn btn-primary float-right" href="<?= base_url('index.php/users/list')?>"><i class="fa fa-plus"></i> Lista de usuarios</a>
            </div>
        </div><br>
        <form action="<?= base_url('index.php/users/add') ?>" method="POST">  
        <!-- Inicio de información personal -->
            <h5 class="card-title" for="">Información personales</h5>
            <!-- Nombre, apellido y CURP -->
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="name" placeholder="" required value="<?= (isset($user['name'])) ? $user['name'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Apellido:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="lastname" placeholder="" required value="<?= (isset($user['lastname'])) ? $user['lastname'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">CURP:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="CURP" placeholder="" required value="<?= (isset($user['CURP'])) ? $user['CURP'] : '' ?>">
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
        <!-- Fin de información personal -->

        <!-- Inicio de información de residencial -->
            <!-- Dirección, colonia y municipio -->
            <h5 class="card-title" for="">Información residencial</h5>
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
        <!-- Fin de información de residencial -->

        <!-- Inicio de información laboral -->
            <h5 class="card-title" for="">Información laboral</h5>
            <!-- RFC y fecha de contratación -->
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">RFC:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="RFC" required value="<?= (isset($user['RFC'])) ? $user['RFC'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha de contratación:</span>
                        </div>
                        <input class="form-control" type="date" id="" name="contract_date" min="1960-01-01" value="<?php echo date('Y-m-d');?>" required>
                    </div> 
                </div>
                <div class="col-md-4">
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Hora de entrada:</span>
                        </div>
                        <input class="form-control" type="time" id="" name="inhour" required value="<?= (isset($user['inhour'])) ? $user['inhour'] : '' ?>">
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Hora de salida:</span>
                        </div>
                        <input class="form-control" type="time" id="" name="outhour" required value="<?= (isset($user['outhour'])) ? $user['outhour'] : '' ?>">
                    </div> 
                </div>
                <div class="col-md-4">
                </div>
            </div><br>
        <!-- Inicio de información laboral -->

            <!-- Botones para regresar a home y agregar al ususario -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-success float-right" type="submit">
                        Agregar <i class="fa fa-save"></i>
                    </button>
                </div>
            </div> 
        </form>
    </div>

    <?php $this->load->view("general/scripts.php") ?>
    
</body>
</html>