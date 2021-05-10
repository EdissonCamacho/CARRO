<?php


include_once "../modelo/carroModelo.php";

class carroControl{
public $idCarro;
public $modelo;
public $color;

public function ctrlGuardarCarro(){
 
    $objRegistrar= carroModelo::mdlRegistrar($this->modelo,$this->color);
    echo json_encode($objRegistrar);

}

public function ctrlCargar(){
 
    $objCargar = carroModelo::mdlCargarDatos();
    echo json_encode($objCargar);

}


public function ctrModificar(){

    $objModificar = carroModelo::mdlModificar($this->idCarro,$this->modelo,$this->color);
    echo json_encode($objModificar);
}

public function ctrlEliminar(){
 
    $objEliminar = carroModelo::mdlEliminar($this->idCarro);
    echo json_encode($objEliminar);

}


}

if (isset($_POST["modelo"]) && isset($_POST["color"]) ) {
    
    $objRegistrar = new carroControl();
    $objRegistrar->modelo=$_POST["modelo"];
    $objRegistrar->color=$_POST["color"];
    $objRegistrar->ctrlGuardarCarro();


}

if (isset($_POST["cargar"])) {
    $objCargar= new carroControl();
    $objCargar->ctrlCargar();

}

if (isset($_POST["modeloM"]) && isset($_POST["colorM"]) && isset($_POST["idCarro"]) ) {
    
    $objRegistrar = new carroControl();
    $objRegistrar->modelo=$_POST["modeloM"];
    $objRegistrar->color=$_POST["colorM"];
    $objRegistrar->idCarro=$_POST["idCarro"];
    $objRegistrar->ctrModificar();


}

if (isset($_POST["idEliminar"])) {
    
    $objE = new carroControl();
    $objE->idCarro=$_POST["idEliminar"];
    $objE->ctrlEliminar();

}