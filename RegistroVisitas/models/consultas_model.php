<?php
class consultas_model{
    /* Creamos variables */
    private $db;
    private $resultado;
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
        /* Hacemos la conexión a la base de datos */
        $this -> db = Conectar::conexion();
        /* Guardamos en variables los post que se traen desde index_Neri.html */
        /*$this -> fecha = $_POST['Fecha'];
        $this -> hora = $_POST['Hora'];
        $this -> sexo = $_POST["Sexo"];
        $this -> nombre = $_POST['Nombre'];
        $this -> nombreI = $_POST['Institucion'];
        $this -> correo1 = $_POST['Correo1'];
        $this -> area = $_POST['Depto'];
        $this -> asunto = $_POST['Asunto'];
        $this -> acompañantes = $_POST['Acomp'];*/
        $this->resultado = array();
    }

    /*Realizamos una consulta de insert*/
    public function get_consulta_Insert(){
        $consulta = $this->db->query("INSERT INTO Visitas (IdVisita, Fecha, Hora, Sexo, Nombre, Empresa, Email, 
            AreaVisita, Asunto, NumAcompa) VALUES (NULL, '".$_POST['Fecha']."', '".$_POST['Hora']."', 
            '".$_POST["Sexo"]."', '".$_POST['Nombre']."', '".$_POST["Institucion"]."', '".$_POST['Correo1']."',
            '".$_POST["Depto"]."', '".$_POST["Asunto"]."', '".$_POST["Acomp"]."') ");
    }

    /*Realizamos una consulta de select para obtener el ultimo registro*/
    public function get_consulta_Select(){
        $consulta = $this->db->query("Select * from Visitas ORDER BY IdVisita DESC LIMIT 1");
        // Asociamos el resultado obtenido
        $filas = $consulta->fetch_assoc(); 
        $this->resultado[]=$filas;
        return $this->resultado;    //regresamos el valor dentro de la variable resultado
    }

    /*Realizamos una consulta de delete para borrar el registro realizado*/
    public function get_consulta_Delete(){
        $consulta = $this->db->query("DELETE From Visitas Where IdVisita = (Select IdVisita From Visitas ORDER BY IdVisita DESC LIMIT 1) ");
    }

    /*Realizamos una consulta de update para actualizar el registro editado*/
    public function get_consulta_Update(){
        $consulta = $this->db->query("UPDATE Visitas Set Fecha ='".$_POST['Fecha']."', Hora ='".$_POST['Hora']."',
         Sexo = '".$_POST["Sexo"]."', Nombre = '".$_POST['Nombre']."', Empresa =  '".$_POST["Institucion"]."',
         Email =  '".$_POST['Correo1']."', AreaVisita =  '".$_POST["Depto"]."', Asunto = '".$_POST["Asunto"]."',
         NumAcompa =   '".$_POST["Acomp"]."' Where IdVisita = (Select IdVisita From Visitas
         ORDER BY IdVisita DESC LIMIT 1) ");
    }

}
?>