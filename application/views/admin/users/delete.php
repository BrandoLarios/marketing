<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    
    <div class="container">
    <h2>Eliminar usuario</h2><br>
        <?php if (isset($error)): ?>
	        <div class="alert alert-danger"><?=$error?></div>
	    <?php endif; ?>

        <div class="row">
            <p class=""><?= htmlentities("¿Estas seguro que deseas eliminar al usuario ".$user->name." ".$user->lastname." ?")?></p>
            <div>
            
            </div>
        </div>
    </div>

</body>
</html>