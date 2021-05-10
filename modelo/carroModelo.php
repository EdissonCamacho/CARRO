<?php

require_once "conexion.php";

class carroModelo
{


    public static function mdlRegistrar($modelo, $color)
    {

        $mensaje="";

        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO carro(modelo,color) values (:modelo,:color)");
            $objRespuesta->bindParam(":modelo", $modelo, PDO::PARAM_STR);
            $objRespuesta->bindParam(":color", $color, PDO::PARAM_STR);

            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "error";
            }


        } catch (Exception $th) {
            $mensaje= $th;
        }

        return $mensaje;
    }

    public static function mdlCargarDatos(){

        
        $objCargar= conexion::conectar()->prepare("SELECT * FROM carro");
        $objCargar->execute();
        $lista = $objCargar->fetchAll();
        return $lista;



    }

    public static function mdlModificar($idCarro,$modelo,$color){
        $mensaje="";

        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE carro SET modelo=:modelo,color=:color where idCarro=$idCarro");
            $objRespuesta->bindParam(":modelo", $modelo, PDO::PARAM_STR);
            $objRespuesta->bindParam(":color", $color, PDO::PARAM_STR);

            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "error";
            }


        } catch (Exception $th) {
            $mensaje= $th;
        }

        return $mensaje;




    }

    public static function mdlEliminar($idCarro){

        $mensaje="";

        try {
            $objRespuesta = conexion::conectar()->prepare("DELETE FROM carro WHERE idCarro=$idCarro");
          

            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "error";
            }


        } catch (Exception $th) {
            $mensaje= $th;
        }

        return $mensaje;


    }






}
