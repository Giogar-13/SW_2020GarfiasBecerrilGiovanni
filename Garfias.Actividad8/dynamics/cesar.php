<?php

$cadena = (isset($_POST['mensaje']) && $_POST['mensaje'] != "") ? $_POST['mensaje'] : false;
$nuevoArray =[];
$valid = true;

$ABC=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

if ($cadena != false)
{
  $nuevaCadena = strtoupper($cadena);
  $arr = mb_str_split($nuevaCadena);

  foreach ($arr as $key => $value)
  {
    if ($value == 'á' || $value == 'é' || $value == 'í' || $value == 'ó' || $value == 'ú' || $value == 'ñ')
    {
      echo "Has ingresado algun caracter que no podemos cifrar, regresa y cámbialo o elimínalo";
      $valid = false;
    }
    else
    {
      foreach ($ABC as $key2 => $value2)
      {
        if ($value == $value2)
        {
          if ($key2 == 23)
          {
            $key2 = 0;
            array_push($nuevoArray,$ABC[$key2]);
          }
          elseif ($key2 == 24)
          {
            $key2 = 1;
            array_push($nuevoArray,$ABC[$key2]);
          }
          elseif ($key2 == 25)
          {
            $key2 = 2;
            array_push($nuevoArray,$ABC[$key2]);
          }
          else
          {
            array_push($nuevoArray,$ABC[$key2 + 3]);
          }
        }
        elseif ($value == '?' || $value == '¿' || $value == '.' || $value == ',' || $value == ' ')
        {
          array_push($nuevoArray,$value);
          $value="";
        }
      }
    }
  }
  $mensajeC = implode($nuevoArray);

  if ($valid == true)
  {
    print_r($mensajeC);
  }
}
else
{
  echo "Ingresa un mensaje válido";
}







 ?>
