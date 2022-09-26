<?php

abstract class persona{
    private string $name;
    private string $dni;
    private string $email;
    
    function __construct($name, $dni, $email) {
        $this->name = $name;
        $this->dni = $dni;
        $this->email = $email;
    }
}