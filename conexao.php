<?php
$mysqli = new mysqli("SERVIDOR" , "NOME DE USUARIO" , "SENHA" , "BASE DE DADOS (OPCIONAL)");
if ($mysqli)
  echo "Tudo OK";
else
  echo "Um erro ocorreu: <br />" . $mysqli->error();
?><?php
$mysqli = new mysqli("SERVIDOR" , "NOME DE USUARIO" , "SENHA" , "BASE DE DADOS (OPCIONAL)");
if ($mysqli)
  echo "Tudo OK";
else
  echo "Um erro ocorreu: <br />" . $mysqli->error();
?>