<?php

class variado extends espacio{
    private string $tipo;
    
    function __construct($puntoWifi, $puntosRed, $tipo) {
        $this->tipo = $tipo;
    }
    
    public function getTipo()
    {
        return $this->tipo;
    }
    
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}