<?php



class conexion{


  public static function conectar(){

    $nombreServidor ="bmfeqx9ssy3kq0k9h9b5-mysql.services.clever-cloud.com";
    $baseDatos="bmfeqx9ssy3kq0k9h9b5";
    $usuario="uhyfgtox28lil2mw";
    $password="DjwI281c1rflBo3t4fzw";

    try {
        $objConexion= new PDO('mysql:host='.$nombreServidor.';dbname='.$baseDatos.';',$usuario,$password);
        $objConexion->exec("set names utf8");





        
    } catch (Exception $e) {
     //  $objConexion=gettext($e);


    }

    return $objConexion;





  }



}