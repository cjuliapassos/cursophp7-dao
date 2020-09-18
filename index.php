<?php

require_once("config.php");

///////////////CARREGA UM USUARIO///////////
/*
$root = new Usuario();
$root->loadById(3);

echo $root;

*/

///////////////CARREGA UMA LISTA DE USUARIOS///////////

/* 
$lista = Usuario::getList();

echo json_encode($lista);

*/



///////////////CARREGA UM USUARIO BUSCANDO PELO LOGIN///////////
/* 
 $busca = Usuario::search("julia");

 echo json_encode($busca);
 */

///////////////CARREGA UM USUARIO USANDO O LOGIN E A SENHA///////////
$usuario = new Usuario();

$usuario->login("julia", "121415");

echo $usuario

?> 