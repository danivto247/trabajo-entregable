<?php
    function conectar(){
        $nombrebd= 'app_seg_pagos';
        $usuario = 'root';
        $contrasena = '';
        $server = 'localhost';
        $con = new mysqli($server,$usuario,$contrasena,$nombrebd);
        if($con->connect_errno){
            return "no conectado";
        }
        else{
            return "conectado";
        }
    }
?>