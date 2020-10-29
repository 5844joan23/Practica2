<?php
include 'persona.php';
    final class Administrador extends Persona{
        public function __construct($email,$passwd){
            parent:: __construct($email,$passwd);
        }
    }