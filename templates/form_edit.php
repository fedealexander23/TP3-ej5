<form action="edit/<?php echo $id ?>" method="POST" class="my-4">
    <div class="form-floating mb-3">
      <input name="subject" type="text" class="form-control" id="floatingInput" placeholder="Materia">
      <label for="floatingInput">Materia</label>
    </div>
    <div class="form-floating mb-3">
      <input name="teacher" type="text" class="form-control" id="floatingInput" placeholder="Profesor">
      <label for="floatingInput">Profesor</label>
    </div>
    <button name="update" type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
