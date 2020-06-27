<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
     <link rel="stylesheet" href="estilose.css">
     <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
</head>
<body>
       <div class="wrap">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <Input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" ></Input>
            <Input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="" ></Input>
            <textarea name="mensaje" class="font-control" id="mensaje" pleaceholder="Mensaje"></textarea>
            <input type="submit" value="Eviar Correo" name="submit" class="btn btn-primary">
          </form>
       </div> 
</body>
</html>