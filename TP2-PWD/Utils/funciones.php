
<?php

function data_submitted(){
    $datos = array();
    if (!empty($_POST)) 
    	$datos = $_POST;
    else 
		if(!empty($_GET)) {
            $datos = $_GET;
		}
	if (count($datos)){
		foreach ($datos as $indice => $valor) {
				if ($valor=="")
                	$datos[$indice] = 'null'	;
			}
	}
	return $datos;
}

?>

