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
        <h2>Editar usuario</h2><br>
        <?php if (isset($error)): ?>
	        <div class="alert alert-danger"><?=$error?></div>
	    <?php endif; ?>
        <form action="<?= base_url('index.php/admin/modify/'.$user->id) ?>" method="post">
        <!-- Inicio de información personal -->
            <h5 class="card-title" for="">Información personales</h5>
            <!-- Nombre, apellido y CURP -->
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="name" required placeholder="Primer nombre" value="<?= $user->name ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Apellido:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="lastname" placeholder="Primer apellido" required value="<?= $user->lastname ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">CURP:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="CURP" placeholder="Ingrese 18 caracteres" required value="<?= $user->CURP ?>">
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
                        <input class="form-control" type="email" id="" name="email" placeholder="ejemplo@ejem.plo" required value="<?= $user->email ?>">
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Telefono:</span>
                        </div>
                        <input class="form-control" type="tel" id="" name="phone" placeholder="5558855" pattern="[0-9]{7}" value="<?= $user->phone ?>">
                    </div> 
                </div>          
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Celular:</span>
                        </div>
                        <input class="form-control" type="tel" id="" name="cellphone" placeholder="5558885588" pattern="[0-9]{10}" required value="<?= $user->cellphone ?>">
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
                        <input class="form-control" type="text" id="" name="direction" placeholder="Calle y número" required value="<?= $user->direction ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Colonia:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="colony" placeholder="No abrevie el nombre" value="<?= $user->colony ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Municipio:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="municipality" placeholder="No abrevie el nombre" required value="<?= $user->municipality ?>">
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
                        <input class="form-control" type="text" id="" name="state" placeholder="No abrevie el nombre" required value="<?= $user->state ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Código postal:</span>
                        </div>
                        <input class="form-control" type="number" id="" name="cp" placeholder="58585" min="00000" max="99999" pattern="[0-9]{5}" required value="<?= $user->cp ?>">
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
                        <input class="form-control" type="text" id="" name="RFC" required value="<?= $user->RFC ?>"> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha de contratación:</span>
                        </div>
                        <input class="form-control" type="date" id="" name="contract_date" min="1960-01-01" value="<?= $user->contract_date ?>" required>
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
                        <input class="form-control" type="time" id="" name="inhour" value="<?= $user->inhour ?>">
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Hora de salida:</span>
                        </div>
                        <input class="form-control" type="time" id="" name="outhour" value="<?= $user->outhour ?>">
                    </div> 
                </div>
                <div class="col-md-4">
                </div>
            </div><br>
        <!-- Fin de información laboral -->

        <!-- Inicio de roles de usuario -->
            <h5 class="card-title" for="">Roles</h5>
            <div class="row">
                <div Class="col-md-4">
                    <input type="checkbox" name="principaladmin">
                    Administrador principal <br>
                </div>
                <div class="col-md-4">
                    <input type="checkbox" name="principaladmin">
                    Administrador secundario <br>
                </div>
                <div class="col-md-4">
                
                </div>
            </div>
        <!-- Fin de roles de usuario -->

            <!-- Botones para regresar a home y agregar al ususario -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-success float-right" type="submit" disable>
                        Modificar <i class="fa fa-edit"></i>
                    </button>
                </div>
            </div> 
        </form>
    </div>

    <?php $this->load->view("general/scripts.php") ?>

</body>
</html>