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

    <?php $this->load->view("general/rootnav.php") ?>

    <div class="container">
        <div class="row">
            <a class="card col-md-6" href="">
                <center>
                    <div class="" style="width: 18rem;">
                        <i class="fa fa-bell fa-2x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Mensajes</h5>
                        </div>
                    </div>
                </center>
            </a>
            <!--<div class="col-md-1"></div>-->
            <a class="card col-md-6" href="">
                <center>
                    <div class="" style="width: 18rem;">
                        <i class="fa fa-bell fa-2x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Notificaciones</h5>
                        </div>
                    </div>
                </center>
            </a>
        </div>
    </div>

    <?php $this->load->view("general/scripts.php") ?>
    
</body>
</html>