<?php session_start();
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();


if (!$conexion) {
	header("Location: ../error.php");
}

$posts = obtener_vacante($blog_config['post_por_pagina'], $conexion);

require '../views/admin_vacantes.view.php';
?>