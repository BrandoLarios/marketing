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
        <h2><center>Agregar usuario</center></h2><br>
        <form action="<?= base_url('index.php/admin/#') ?>" method="POST">  
        <!-- Inicio de información personal -->
            <h5 class="card-title" for="">Información personales</h5>
            <!-- Nombre, apellido y CURP -->
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="name" placeholder="Primer nombre" required value="<?= (isset($user['name'])) ? $user['name'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Apellido:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="lastname" placeholder="Primer apellido" required value="<?= (isset($user['lastname'])) ? $user['lastname'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">CURP:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="CURP" placeholder="Ingrese 18 caracteres" required value="<?= (isset($user['CURP'])) ? $user['CURP'] : '' ?>">
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
                        <input class="form-control" type="tel" id="" name="phone" placeholder="5558855" pattern="[0-9]{7}" value="<?= (isset($user['phone'])) ? $user['phone'] : '' ?>">
                    </div> 
                </div>          
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Celular:</span>
                        </div>
                        <input class="form-control" type="tel" id="" name="cellphone" placeholder="5558885588" pattern="[0-9]{10}" required value="<?= (isset($user['cellphone'])) ? $user['cellphone'] : '' ?>">
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
                        <input class="form-control" type="tetx" id="" name="direction" placeholder="Calle y número" required value="<?= (isset($user['direction'])) ? $user['direction'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Colonia:</span>
                        </div>
                        <input class="form-control" type="tetx" id="" name="colony" placeholder="No abrevie el nombre" value="<?= (isset($user['colony'])) ? $user['colony'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Municipio:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="municipality" placeholder="No abrevie el nombre" required value="<?= (isset($user['municipality'])) ? $user['municipality'] : '' ?>">
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
                        <input class="form-control" type="text" id="" name="state" placeholder="No abrevie el nombre" required value="<?= (isset($user['state'])) ? $user['state'] : '' ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Código postal:</span>
                        </div>
                        <input class="form-control" type="number" id="" name="cp" placeholder="58585" min="00000" max="99999" pattern="[0-9]{5}" required value="<?= (isset($user['cp'])) ? $user['cp'] : '' ?>">
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
                        <input class="form-control" type="date" id="" name="contract_date" min="1960-01-01" required value="<?= (isset($user['contract_date'])) ? $user['contract_date'] : '' ?>">
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
                        <input class="form-control" type="time" id="" name="inhour" value="<?= (isset($user['inhour'])) ? $user['inhour'] : '' ?>">
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Hora de salida:</span>
                        </div>
                        <input class="form-control" type="time" id="" name="outhour" value="<?= (isset($user['outhour'])) ? $user['outhour'] : '' ?>">
                    </div> 
                </div>
                <div class="col-md-4">
                </div>
            </div>
        <!-- Inicio de información laboral -->

            <!-- Botones para regresar a home y agregar al ususario -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-success float-right" type="submit">
                        Modificar <i class="fa fa-edit"></i>
                    </button>
                </div>
            </div> 
        </form>
    </div>


    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js.map'); ?>"></script> -->
</body>
</html>