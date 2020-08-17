<?php
    // Llamada al modelo
    require_once("models/consultas_model.php");
    $consult = new consultas_model(); /* Donde se hacen la consultas*/
    //$datosSelect = $consult -> get_consulta_Select();
    if (!empty($_POST['Nombre']) && empty($_POST['Editar']) && empty($_POST['EditarOK'])){ //Si contiene valores, entrar a insertar el registro
        $datosInsert = $consult -> get_consulta_Insert();
        $datosSelect = $consult -> get_consulta_Select();
        // Llamada a la vista de registro exitoso
        require_once("views/consultas_view.phtml"); 
    } 
    else if (!empty($_POST['Editar']) && empty($_POST['EditarOK'])){  //Entra aquí sí se va a editar el registro
        // Llamada a la vista para editar el registro
        require_once("views/consultas_view_update.phtml"); 
    } 
    else if (!empty($_POST['EditarOK'])){      //Entra aquí sí ya se edito el registro y se va a guardar
        $datosUpdate = $consult -> get_consulta_Update();
        // Llamada a la vista para editar el registro
        require_once("views/consultas_view_updateOK.phtml"); 
        //require_once("views/consultas_view_update.phtml");
    } else {    // Si no cumple las anteriores quiere decir que viene de boton eliminar registro 
        $datosDelete = $consult -> get_consulta_Delete();
         // Llamada a la vista de borrado exitoso
         require_once("views/consultas_view_delete.phtml");
    }        
?>