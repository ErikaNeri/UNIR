<?php
class consultas_model{
    private $db;
    private $resultado;
    /* Guardamos en variables los post que se traen desde index_Neri.html */
    private $fecha;
    private $hora;
    private $sexo;
    private $nombre;
    private $nombreI;
    private $correo1;
    private $area;
    private $asunto;
    private $acompañantes;

    
    public function __construct(){
        $this -> db = Conectar::conexion();
        $this -> resultado = array();
        /* Guardamos en variables los post que se traen desde index_Neri.html */
        $this -> fecha = $_POST['Fecha'];
        $this -> hora = $_POST['Hora'];
        $this -> sexo = $_POST["Sexo"];
        $this -> nombre = $_POST['Nombre'];
        $this -> nombreI = $_POST['Institucion'];
        $this -> correo1 = $_POST['Correo1'];
        $this -> area = $_POST['Depto'];
        $this -> asunto = $_POST['Asunto'];
        $this -> acompañantes = $_POST['Acomp'];
    }

    public function get_consulta(){
        $consulta = $this->db->query("INSERT INTO Visitas (IdVisita, Fecha, Hora, Sexo, Nombre, Empresa, Email, 
            AreaVisita, Asunto, NumAcompa) VALUES (NULL, '".$_POST['Fecha']."', '".$_POST['Hora']."', 
            '".$_POST["Sexo"]."', '".$_POST['Nombre']."', '".$_POST["Institucion"]."', '".$_POST['Correo1']."',
            '".$_POST["Depto"]."', '".$_POST["Asunto"]."', '".$_POST["Acomp"]."') ");
        return $this -> resultado;
    }

}
?>
