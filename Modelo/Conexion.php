<?php

include_once 'Conecta.php';

class Conexion {

    private $cn;

    function conecta() {
        if ($this->cn == null) {
            $this->cn = mysqli_connect("localhost", "root", "", "bdweb");
        }
        return $this->cn;
    }

    //login-
    function Login($usr, $pas) {//lista especialiadades
        $vec = array();
        $sql = "select  id,usuario, correo from usuario where usuario='$usr' and clave='$pas' ";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        $vec = array();
        if ($f = mysqli_fetch_array($res)) {
            $vec = $f;
        }
        return $vec;
    }

    function ObtenerId($usr) {//lista especialiadades
        $vec = array();
        $sql = "select id from usuario where usuario='$usr'";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        $vec = array();
        if ($f = mysqli_fetch_array($res)) {
            $vec = $f;
        }
        return $vec;
    }

    //grabar usuarios
    function GrabaUser($usr, $cor, $pas) {//lista especialiadades
        $vec = array();
        $sql = "insert into usuario(usuario,correo,clave ) values('$usr','$cor','$pas')";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
    }

    function DetUsu($id) {//lista especialiadades
        $vec = array();
        $sql = "select id, usuario,correo from usuario where id='$id'";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        $vec = array();
        if ($f = mysqli_fetch_array($res)) {
            $vec = $f;
        }
        return $vec;
    }

    function Departamentos() {//lista de categoria
        $vec = array();
        $sql = "select * from departamento";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        while ($f = mysqli_fetch_array($res)) {
            $vec[] = $f;
        }
        return $vec;
    }

    function NombreDepartamentos($id) {//lista de categoria
        $vec = array();
        $sql = "select nomdep from departamento where iddep='$id'";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        while ($f = mysqli_fetch_array($res)) {
            $vec = $f;
        }
        return $vec;
    }

    function LisEmpleados($id) {//lista de productos con respecto a una categoria
        $sql = "select * from empleado where idesp=$id";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        $vec = array();
        while ($f = mysqli_fetch_array($res)) {
            $vec[] = $f;
        }
        return $vec;
    }

    function EmpleadoporDepartamento($id) {
        $vec = array();
        $sql = "select idemp,nomemp, telf,pais, fnac, sueldo from empleado e,departamento d where e.iddep=d.iddep and e.iddep='$id'";
        $res = mysqli_query($this->conecta(), $sql) or
                die(mysqli_error($this->conecta()));
        $vec = array();
        while ($f = mysqli_fetch_array($res)) {
            $vec[] = $f;
        }
        return $vec;
    }

}
