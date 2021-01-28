<?php
require_once '../vendor/autoload.php';

$foto_original = "mifoto.jpg";
$guarda_en = "fotomodificada.jpg";

$thumb = new PHPThumb\GD($foto_original);

//  Redimensionar
$thumb->resize(500, 500);
//  Recortar
//$thumb->cropFromCenter(100, 100);

$thumb->show();
$thumb->save($guarda_en);