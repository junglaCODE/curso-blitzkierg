<?php
session_start();
var_dump($_SESSION);
#$_SESSION["usuario"] = "adminadmin";

?>
<h1> Registro de datos </h1>
<table>
<tr>
<td>
    <form action="registro_ranhma.php" method="post">
    <label> Usuario:</label> <input type="text" name="nombre"><br><br>
        <label>Correo:</label><input type="email" name="correo"><br><br>
        <label>Contraseña:</label><input type="password" name="pass"><br><br>
        <label>Fecha de nacimiento:</label><input type="date" name="fecha"><br><br>
        <label>Estado:</label><input type="text" name="estado"><br><br>
        <input type="submit" value="Enviar!">
    </form>
</td>
<td>
<?php
#if($_SESSION):
    
    #{
?>
    <h2>Aqui se debe ver los usuarios registrados</h2>
    <table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Cortreo</th>
      <th>Contraseña</th>
      <th>Cortreo</th>
      <th>Cortreo</th>
      <th>Cortreo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>$v1</td>
      <td>$v2</td>
    </tr>
  </tbody>
</table>

</td>
<tr>
</table>