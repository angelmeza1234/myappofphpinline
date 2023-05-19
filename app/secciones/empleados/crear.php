<?php include("../../templates/header.php");?>
<br>
<div class="card">
    <div class="card-header">
        Datos del empleado
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="Primernombre" class="form-label">Primer nombre</label>
          <input type="text"
            class="form-control" name="Primernombre" id="Primernombre" aria-describedby="helpId" placeholder="Primer nombre">
        </div>
        <div class="mb-3">
          <label for="Segudonombre" class="form-label">Segudo nombre</label>
          <input type="text"
            class="form-control" name="Segudonombre" id="Segudonombre" aria-describedby="helpId" placeholder="Segundo nombre">
        </div>

        <div class="mb-3">
          <label for="Primerapellido" class="form-label">Primer apellido</label>
          <input type="text"
            class="form-control" name="Primerapellido" id="Primerapellido" aria-describedby="helpId" placeholder="Primer apellido">
        </div>

        <div class="mb-3">
          <label for="Segundoapellido" class="form-label">Segundo apellido</label>
          <input type="text"
            class="form-control" name="Segundoapellido" id="Segundoapellido" aria-describedby="helpId" placeholder="Segundo apellido">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email">
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Foto</label>
          <input type="file"
            class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Foto">
        </div>

        <div class="mb-3">
          <label for="cv" class="form-label">CV</label>
          <input type="file"
            class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="CV">
        </div>

       <div class="mb-3">
        <label for="idpuesto" class="form-label">Puesto</label>
        <select class="form-select form-select-lg" name="" id="">
            <option selected>Select one</option>
            <option value="">New Delhi</option>
            <option value="">Istanbul</option>
            <option value="">Jakarta</option>
        </select>
        <div class="mb-3">
          <label for="fechadeingreso" class="form-label">Fecha de ingreso:</label>
          <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId" placeholder="Fecha de ingreso">
        </div>
        <button type="button" class="btn btn-success">Agregar registro</button>
        <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>
       </div>


        </form>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>

<?php include("../../templates/footer.php");?>