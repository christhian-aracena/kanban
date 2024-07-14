<select class='cBEspecie cursor-pointer a'  name="gender" id="gender" required>
  <?php
  include('Datos/conexion.php');
  $ejecutarConsulta = $conexion->query('SELECT * FROM gender');

  $null = null;

  echo "<option value='$null'>Selecciona especie</option>";

  while ($fila1 = mysqli_fetch_assoc($ejecutarConsulta)) {
      $idEspecie = $fila1['idGender'];
      $especie = $fila1['tipoGenero'];

      // Imprimir la opción dentro del elemento <select>
      echo "<option value='$idEspecie'>$especie</option>";
  }
  ?>
</select>