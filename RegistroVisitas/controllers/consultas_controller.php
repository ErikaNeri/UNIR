<?php
// Llamada al modelo
    require_once("models/consultas_model.php");
    $consult = new consultas_model();
    $datos = $consult -> get_consulta();

    
// Llamada a la vista
    require_once("views/consultas_view.phtml");

?>
