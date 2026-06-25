<?php

require_once "../clases/persona.php";

$juan = new Persona();

$juan->saludar();

$juan->despedirse();

require_once "../clases/animal.php";

$max = new Perro();

$max->ladrar();

$max->correr();

?>