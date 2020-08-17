<?php
class Conectar{
    public static function conexion(){
        $conexion = new mysqli("caltechn.mysql.db.hostpoint.ch", "caltechn_erika", "sistemas@Erika", "caltechn_erikaUNIR");
        return $conexion;
    }
}

?>