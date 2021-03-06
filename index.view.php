<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
     <link rel="stylesheet" href="estilos.css">
     <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
</head>
<body>
       <div class="wrap">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php if(!$enviado and isset($nombre)) echo $nombre ?>" >
            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php if(!$enviado and isset($correo)) echo $correo ?>" >
            <textarea name="mensaje" class="font-control" id="mensaje" pleaceholder="Mensaje"><?php if(!$enviado and isset($mensaje)) echo $mensaje?></textarea>
            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
                <?php elseif($enviado):?>
                <div class="alert success">
                    Enviado Correctamente
                </div>
            <?php  endif ?>

            <input type="submit" value="Eviar Correo" name="submit" class="btn btn-primary">
          </form>
       </div> 
</body>
</html>