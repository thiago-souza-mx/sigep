<?php

$autoload =  __DIR__ .'/../vendor/autoload.php';

use Sigep\Model\Diretorias;

if( file_exists( $autoload ) ) {
    require_once $autoload;
}

if (class_exists('\Sigep\Model\Diretorias')) {
    echo "achei" ;
}

$diretorias = new Diretorias();
//print_r($accessDataParaAmbienteDeHomologacao);
echo $diretorias::teste();

echo  Route::get()->with("uau");