<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <!-- Apartado para imagen y Nombre -->
    <a class="navbar-brand" href="<?= base_url('index.php/admin/index')?>">
        <i class="far fa-image"></i>
        Brando Larios
    </a>
    <!-- Boton de colapsacion para responsividad -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Apartados del administrador -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Apartados de usuarios, empresas y campañas -->
        <div class="col-md-10">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuarios <i class="fa fa-users navbar-icon"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('index.php/admin/new') ?>">Agregar usuario</a>
                        <a class="dropdown-item" href="<?= base_url('index.php/admin/list') ?>">Administrar usuarios</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Empresas <i class="fa fa-building navbar-icon"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('index.php/admin/newuser') ?>">Agregar empresa</a>
                        <a class="dropdown-item" href="#">Administrar empresas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Campañas <i class="fa fa-list-alt navbar-icon"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('index.php/admin/newuser') ?>">Agregar campaña</a>
                        <a class="dropdown-item" href="#">Administrar campañas</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Mensajeria, notificaciones y configuración de usuario -->
        <div class="col-md-2">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-home navbar-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell navbar-icon"></i>
                    </a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-comments navbar-icon"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog navbar-icon"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> 
            </ul>
        </div>
    </div>
</nav><br>