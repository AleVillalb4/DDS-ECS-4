<?php


require_once 'modelo/lineaPrestamo.php';
require_once 'modelo/datosPersona.php';
require_once 'modelo/direccion.php';
require_once 'modelo/provincia.php';
require_once 'modelo/prestamo.php';

$li = new LineaPrestamo();
$li->Id = '1';
$li->Descripcion = 'Personal Sola Firma';
$li->TasaEfectivaMensual = '15 %';

$prov = new Provincia();
$prov->Id = '1';
$prov->Descripcion = 'Santa Fe.';

$dire = new Direccion();
$dire->Id = '1';
$dire->Calle = 'Montevideo';
$dire->Numero = '34';
$dire->Localidad = 'Rosario';
$dire->Provincia =$prov;

$titu = new DatosPersona();
$titu->Id = '1';
$titu->Nombre = 'Daniel';
$titu->Apellido = 'rodriguez';
$titu->Documento = '12456789';
$titu->Direccion =$dire;

$presta = new Prestamo();
$presta->Id = '1';
$presta-> CantidadCuotas= '36';
$presta-> MontoCapital= '10.000';
$presta->FechaAlta = '21/08/2019';
$presta->Titular =$titu;
$presta->LineaPrestamo=$li;




$presta -> MostrarDatos();