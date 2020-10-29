<?php

class Persona {
    protected $id_persona;
    protected $nombre_persona;
    protected $primer_apellido;
    protected $segundo_apellido;
    protected $grupo;
    protected $passwd_persona;
    protected $email_persona;

    function __construct($email,$passwd) {
        $this->email_persona = $email;
        $this->passwd_persona = $passwd;

    }

    public function getId_persona(){
        return $this->id_persona;
    }
    public function setId_persona($id_persona){
        $this->id_persona = $id_persona;
        return $this;
    }


    public function getNombre_persona(){
        return $this->nombre_persona;
    }
    public function setNombre_persona($nombre_persona){
        $this->nombre_persona = $nombre_persona;
        return $this;
    }
 
    public function getPassword_persona(){
        return $this->passwd_persona;
    }
    public function setPassword_persona($passwd_persona){
        $this->passwd_persona = $passwd_persona;
        return $this;
    }

    public function getEmail_persona(){
        return $this->email_persona;
    }
    public function setEmail_persona($email_persona){
        $this->email_persona = $email_persona;
        return $this;
    }

    /**
     * Get the value of primer_apellido
     */ 
    public function getPrimer_apellido()
    {
        return $this->primer_apellido;
    }

    /**
     * Set the value of primer_apellido
     *
     * @return  self
     */ 
    public function setPrimer_apellido($primer_apellido)
    {
        $this->primer_apellido = $primer_apellido;

        return $this;
    }

    /**
     * Get the value of segundo_apellido
     */ 
    public function getSegundo_apellido()
    {
        return $this->segundo_apellido;
    }

    /**
     * Set the value of segundo_apellido
     *
     * @return  self
     */ 
    public function setSegundo_apellido($segundo_apellido)
    {
        $this->segundo_apellido = $segundo_apellido;

        return $this;
    }

    /**
     * Get the value of grupo
     */ 
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set the value of grupo
     *
     * @return  self
     */ 
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }
}
