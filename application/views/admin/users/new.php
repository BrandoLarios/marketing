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
        <form action="<?= base_url('index.php/admin/adduser') ?>" method="POST">
            <h5 class="card-title" for="">Datos personales y de contacto</h5>
            <!-- Nombre y apellido -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Nombre:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="name" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Apellido:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="lastname" placeholder="" required>
                    </div>
                </div>
            </div><br>
            <!-- Numero de telefono y celular -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Telefono:</span>
                        </div>
                        <input class="form-control" type="tel" id="" name="phone" placeholder="Ejemplo: 8885555" pattern="[0-9]{7}" required>
                        <span class="validity"></span>
                    </div> 
                </div>          
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Celular:</span>
                        </div>
                        <input class="form-control" type="tel" id="" name="cellphone" placeholder="Ejemplo: 8885558855" pattern="[0-9]{10}" required>
                    </div>
                </div>
            </div><br>
            <!-- Correo y código postal -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Correo:</span>
                        </div>
                        <input class="form-control" type="email" id="" name="email" placeholder="Ejemplo: example@dev.com" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Código postal:</span>
                        </div>
                        <input class="form-control" type="number" id="" name="cp" placeholder="" min="00000" max="99999" pattern="[0-9]{5}" required>
                    </div>
                </div>
            </div><br>
            <!-- Estado y municipio -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Estado:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="state" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Municipio:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="municipality" placeholder="" required>
                    </div>
                </div>
            </div><br>
            <!-- Dirección (colonia, calle y número) y fecha de nacimiento y de contratación -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Dirección:</span>
                        </div>
                        <input class="form-control" type="tetx" id="" name="cellphone" placeholder="Colonia, calle y número" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Fecha de contratación:</span>
                        </div>
                        <input class="form-control" type="date" id="" name="contract_date" min="1960-01-01" max="2000-12-31" value="<?php echo date('Y-m-d');?>" required>
                    </div> 
                </div>
                
            </div><br>
            <!-- Imagen -->
            <!--<div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Imagen:</span>
                        </div>
                        <input style="margin:5px;" class="" type="file" id="" name="image">
                    </div>
                </div>
            </div><br>-->
            <!-- CURP y RFC -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">CURP:</span>
                        </div>
                        <input class="form-control" class="" type="text" id="" name="CURP">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">RFC:</span>
                        </div>
                        <input class="form-control" class="" type="text" id="" name="RFC">
                    </div>
                </div>
            </div><br>
            <!-- Botones para regresar a home y agregar al ususario -->
            <div class="row">
                <div class="col-md-6">            
                    <a href="<?= base_url('index.php/admin/user/create') ?>" class="btn btn-warning">
                        <i class="fa fa-arrow-left"></i>  Regresar
                    </a>                                
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success" type="submit">
                        Agregar <i class="fa fa-save"></i>
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