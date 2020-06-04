<?php
$RFC = (isset($_POST['RFC']) && $_POST['RFC'] != "")? $_POST['RFC'] : false;

$nombre = (isset($_POST['nombre']) && $_POST['nombre'] != "")? $_POST['nombre'] : false;


if ($RFC != false && $nombre != false)
{
  $validacionRFC = preg_match_all('/[A-Za-z]{4}[0-9][0-9](0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])([0-9]|[A-Za-z]){3}/', $RFC);

  $validacionNombre = preg_match_all('/[A-za-z]{3,25}\s?([A-za-z]{3,25})?/',$nombre);

  if($validacionRFC && $validacionNombre)
  {
    echo "Tus datos fueron ingresados correctamente.";
  }
  elseif ($validacionRFC == false)
  {
    echo "Has escrito incorrectamente tu RFC";
  }
  elseif ($validacionNombre)
  {
    echo "Tu nombre está mal escrito";
  }
}
else {
  echo "No has escrito los campos necesarios";
}








 ?>
