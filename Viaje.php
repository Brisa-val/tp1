<?php

class viaje{
    private $codigo;
    private $destino;
    private $maximoPasajeros;
    private $cantidadPasajeros;

    public function __construct($codigo,$destino,$maximoPasajeros,$cantidadPasajeros)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maximoPasajeros= $maximoPasajeros;
        $this->cantidadPasajeros =$cantidadPasajeros;
    }
     /**
     * Se muestra la informacion del viaje
     * @return void
     */
    public function info()
    {
        $cantidadPasajeros = count($this->pasajeros);

        echo "codigo: " . $this->codigo;
        echo "destino: ". $this->destino;
        echo "pasajeros: " . $cantidadPasajeros . " de " . $this->maximoPasajeros . " como maximo";
        echo "listado de pasajeros:";
        print_r($this->pasajeros);
        
    }

    /**
     * Get the value of codigo
     * @param int
     */ 
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     * @param int
     * @return void
     */ 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Get the value of destino
     * @array string
     */ 
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * Set the value of destino
     * @array string
     * @return void
     */ 
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    /**
     * Get the value of maximoPasajeros
     * @param int
     */ 
    public function getMaximoPasajeros()
    {
        return $this->maximoPasajeros;
    }

    /**
     * Set the value of maximoPasajeros
     * @param int
     * @return void
     */ 
    public function setMaximoPasajeros($maximoPasajeros)
    {
        $this->maximoPasajeros = $maximoPasajeros;
    }

    /**
     * Get the value of cantidadPasajeros
     * @array
     */ 
    public function getCantidadPasajeros()
    {
        return $this->cantidadPasajeros;
    }

    /**
     * Add new pasajero
     * @array string
     * @param int
     * @return void
     */ 
    public function addPasajeros($nombre,$apellido,$documento)
    {
        $this->cantidadPasajeros[] = [
                                       "nombre"=>$nombre,
                                       "apellido"=>$apellido,
                                       "documento"=> $documento
                                    ];
    }
}


  