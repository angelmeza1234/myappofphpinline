<?php include("../../templates/header.php");?>

</br>
<div class="card">
    <div class="card-header">
        Usuario
    </div>
    <div class="card-body">
    
    <form action="" method="post" enctype="multipart/fomr-data">
    <div class="mb-3">
      <label for="nombredelusuario" class="form-label">Nombre del usuario: </label>
      <input type="text"
        class="form-control" name="nombredelusuario" id="nombredelusuario" aria-describedby="helpId" placeholder="Nombre del usuario">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password"
        class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Escriba su contraseña">
    </div>
    <button type="submit" class="btn btn-success">Agregar</button>
    | <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    </form>

    </div>
</div>


<?php include("../../templates/footer.php");?>