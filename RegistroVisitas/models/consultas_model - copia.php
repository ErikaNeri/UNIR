<?php
class consultas_model{
    private $db;
    private $resultado;
    
    public function __construct(){
        $this -> db = Conectar::conexion();
        $this -> resultado = array();
        
    }

    public function get_consulta(){
        $consulta = $this->db->query(" INSERT INTO Visitas (IdVisita, Fecha, Hora, Sexo, Nombre, Empresa, Email, 
            AreaVisita, Asunto, NumAcompa) VALUES ('1', '2020-08-12', '05:37:56', 'Femenino', 'Erika Jazmin Neri 
            Diaz', 'Caltechnix', 'dfkmdm@oskdncs.com', 'dkjcnjdn', 'djcnskjdncksndckjnskcnk', '3') ");
        return $this -> resultado;
    }

}
?>