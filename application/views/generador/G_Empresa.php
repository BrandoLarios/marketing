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

</head>
<body>
  
    
    <?php $this->load->view("general/d_nav.php") ?>

    <div class="container">
        <h2>Empresa</h2><br>
        <?php if (isset($error)): ?>
	        <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?=$error?>
            </div>
	    <?php endif; ?>
        <form action="<?= base_url('index.php/designer/index') ?>" method="POST">  
        <!--Barra de Direccion-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Empresa </li>
            <li class="breadcrumb-item active">Informacion</li>
          </ol>
        <!-- Inicio de Diseñador -->
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              <label >Campañas </label> 
              <div class="form-row">

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Empresa</th>
                      <th>Responsable</th>
                     
                      <th>Fecha Fundacion</th>
                      <th>Objetivo</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                      <td>Customer Support</td>
                      <td>New York</td>
                      
                      <td>2011/01/25</td>
                      <td>Trabajar </td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
        </form>
    </div>

    <?php $this->load->view("general/scripts.php") ?>
        <!-- Bootstrap core JavaScript-->
        <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="js/Chart.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>
</html>