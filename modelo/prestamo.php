<?php

class Prestamo
{
    public $Id;
    public $LineaPrestamo;
    public $Titular;
    public $FechaAlta;
    public $CantidadCuotas;
    public $MontoCapital;

    public function MostrarDatos()
    {
        echo 'El id del prestamo es: ' . $this->Id . '<br>';
        echo 'El monto del capital es: ' . $this->MontoCapital . '<br>';
        echo 'La fecha de alta del prestamo es: ' . $this->FechaAlta . '<br>';
        echo 'La cantidad de cuotas del prestamo es: ' . $this->CantidadCuotas . '<br>';
        echo 'El id de la linea de prestamo es: ' . $this->LineaPrestamo->Id . '<br>';
        echo 'La descripcion de la linea de prestamo es: ' . $this->LineaPrestamo->Descripcion . '<br>';
        echo 'La tasa efectiva mensual de la linea de prestamo es: ' . $this->LineaPrestamo->TasaEfectivaMensual . '<br>';
        echo 'El id del titular es: ' . $this->Titular->Id . '<br>';
        echo 'El nombre del titular es: ' . $this->Titular->Nombre . '<br>';
        echo 'El apellido del titular es: ' . $this->Titular->Apellido . '<br>';
        echo 'El documento del titular es: ' . $this->Titular->Documento . '<br>';
        echo 'El id de la direccion del titular es: ' . $this->Titular->Direccion->Id . '<br>';
        echo 'El nombre de la direccion del titular es: ' . $this->Titular->Direccion->Calle . '<br>';
        echo 'El numero la direccion del titular es: ' . $this->Titular->Direccion->Numero . '<br>';
        echo 'La localidad del titular es: ' . $this->Titular->Direccion->Localidad . '<br>';
        echo 'El id provincia del titular es: ' . $this->Titular->Direccion->Provincia->Id . '<br>';
        echo 'La descripcion de la provincia del titular es: ' . $this->Titular->Direccion->Provincia->Descripcion . '<br>';
        
    }
}
