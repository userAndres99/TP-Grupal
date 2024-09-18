<?php


class ABMAuto{

    /**
     * Función utilizada en caso que esperemos un arreglo de un solo elemento.
     * Llama a Buscar, convierte el obj del indice 0 a arreglo y lo retorna.
     * Si retorna un arreglo vacío, devuelve null.
     * @return array|null
     */
    public function arrayOnull($arrAsoc){
        $objetoOnull = $this->buscar($arrAsoc);
        $element = null;

        if(count($objetoOnull) === 1){
            echo "<br>Auto no es null<br>";
            $element = dismount($objetoOnull[0]);
        }else echo "<br>Auto es null<br>";
        
        return $element;
    }

    /**
     * Recibe un arreglo de objetos Auto y retorna un arreglo con todas las patentes de los automóviles
     * @return array
     */
    public function mostrarPatentes(){
        $arrPatentes = [];

        $colObjAutos = $this->buscar(null);
        foreach($colObjAutos as $objAuto){
            $arrPatentes[] = $objAuto->getPatente();
        }
        return $arrPatentes;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $datos
     * @return bool
     */
    public function abm($datos){
        $resp = false;
        if($datos['accion']=='editar'){
            if($this->modificacion($datos)){
                $resp = true;
            }
        }
        if($datos['accion']=='borrar'){
            if($this->baja($datos)){
                $resp =true;
            }
        }
        if($datos['accion']=='nuevo'){
            if($this->alta($datos)){
                $resp =true;
            }
            
        }
        return $resp;

    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $obj = null;

        if(array_key_exists('patente',$param) && array_key_exists('marca',$param) && array_key_exists('modelo', $param) && array_key_exists('objDuenio', $param)){
            $obj = new Auto();
            // $objDuenio = new Persona();
            // $objDuenio->setNroDni($param['dniduenio']);
            // $objDuenio->cargar();

            $obj->setear($param['patente'], $param['marca'], $param['modelo'], $param['objDuenio']);
        }

        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['Patente']) ){
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['patente']))
            $resp = true;
        return $resp;
    }
    
    /**
     * permite ingresar un objeto
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        // $param['patente'] =null;
        $objAuto = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($objAuto!=null and $objAuto->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjetoConClave($param);
            if ($objAuto!=null and $objAuto->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjeto($param);
            if($objAuto!=null and $objAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if (isset($param['Patente'])) $where.=" and Patente ='".$param['Patente']."'";
            if (isset($param['Marca'])) $where.=" and Marca ='".$param['Marca']."'";
            if (isset($param['Modelo'])) $where.=" and Modelo =".$param['Modelo']."";
            if (isset($param['DniDuenio'])) $where.=" and DniDuenio =".$param['DniDuenio']."";

        }
        $autito = new Auto();
        $arreglo = $autito->listar($where);  
        return $arreglo;
        
    }
    
}
?>
