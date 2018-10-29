<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo base_url();?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Generador</title>
    <!-- Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <?php $this->load->view("general/head.php") ?>

</head>
<body>
    
    <?php $this->load->view("general/d_nav.php") ?>

    <div class="container">
        <h2>Publicacion</h2><br>
        <?php if (isset($error)): ?>
	        <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?=$error?>
            </div>
	    <?php endif; ?>
        <form action="<?= base_url('index.php/designer/Publicacion') ?>" method="POST">  
               <!--Barra de Direccion-->
               <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?= base_url('index.php') ?>">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Tareas </li>
            <li class="breadcrumb-item active">Publicacion</li>
          </ol>
       
       
        <!-- Inicio de publicacion  -->
         
          
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Titulo de Publicacion:</span>
                        </div>
                        <input class="form-control" type="text" id="" name="name" placeholder="" required value=" ">
                    </div>
                </div>
                
               
            </div><br>
            <div class="row"> 
            <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Contenido:</span>
                        </div>
                        <textarea class="form-control" rows="3"></textarea>
                       
                    </div>
                </div>
           </div><br>
 
            <!-- Boton para comentar y subir archivos -->
            <div class="row">
                <div class="col-md-4">
                <button class="btn btn-success float-right" type="Text">
                        Comentar <i class="fa fa-comments"></i>
                    </button>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success float" input type="file">
                 <input type="file" id="ejemplo_archivo_1">
                         <i class="fa fa-save"></i>
                    </button>
                </div>
            </div> 
        </form>
    </div>

    <?php $this->load->view("general/scripts.php") ?>
    
</body>
</html>