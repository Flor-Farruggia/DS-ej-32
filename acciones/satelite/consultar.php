<?php

require_once '../../modelo/satelite.php';
require_once '../../modelo/operador.php';
require_once './responses/consultarResponse.php';
header('Content-Type: application/json');

$res = new ConsultarResponse ();

$o = new Operador ();
$o->Nombre='ARSAT';
$o->TipoEmpresa='Publica';
$o->FormaLegal='Sociedad anónima';

$idSat = $_GET['id'];
$s = new Satelite ();
$s->Id=$idSat;
$s->Nombre='Arsat-1';
$s->Operador=$o;
$s->TipoMision='comunicaciones';
$s->DuracionEnAnios=15;

$res->Satelite = $s;

echo json_encode($res);