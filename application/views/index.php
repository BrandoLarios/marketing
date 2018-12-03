<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php $this->load->view("general/head.php") ?>

</head>
<body> 

    <?php if (isset($error)): ?>
	    <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?=$error?>            
        </div>
    <?php endif; ?>
    
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="float">
                        <h4 class="">Inicio de sesion</h4>
                        <form class="form" action="<?= base_url('index.php/main/login') ?>" method="POST">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Usuario:</span>
                                </div>
                                <input class="form-control" type="text" id="" name="username" required>
                            </div><br> 
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Contraseña:</span>
                                </div>
                                <input class="form-control" type="password" id="" name="password" required>
                            </div><br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Rol:</span>
                                </div>
                                <select class="form-control" name="role" >
                                    <option value="0">Seleccione un rol...</option>
                                    <option value="root">root</option>
                                    <option value="AA">Administrador de agencia</option>
                                    <option value="AE">Administrador de empresa</option>
                                    <option value="CM">Community Manager</option>
                                    <option value="GC">Generador de contenidos</option>
                                    <option value="D">Diseñador</option>
                                </select>
                            </div><br> 
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("general/scripts.php") ?>
    
</body>
</html>