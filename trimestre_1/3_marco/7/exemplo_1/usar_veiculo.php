<?php
# usar_veiculo.php
require_once('veiculo.php');
require_once('quadriciclo.php');

$q = new Quadriciclo;
$q->ligar();
echo 'Está ligado? ';
var_dump($q->isLigado());
$q->acelerar();
$q->acelerar();
$q->acelerar();
$q->desligar();
$q->acelerar();
$q->frear();
echo '<br>Velocidade: '. $q->getVelocidade();