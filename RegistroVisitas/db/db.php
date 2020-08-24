<?php
class Conectar{
    public static function conexion(){
        $conexion = new mysqli("caltechn.mysql.db.hostpoint.ch", "caltechn_erika", "Password_X", "caltechn_erikaUNIR");
        return $conexion;
    }
}

?>
