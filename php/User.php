<?php

class User{

    //atributos

    public $identificador;
    public $nombre;
    public $apellido;
    public $email;
    public $celular;
    public $materia;
    public $estado;
    public $pass;
    public $token;
    
    //construc
    public function __construct($id){
       
        $dato = mysqli_fetch_assoc(consultarSQL(" SELECT * FROM usuario WHERE id='$id' "));
        $this->identificador = $dato['id'];
        $this->nombre = $dato['Nombre'];
        $this->apellido = $dato['Apellido'];
        $this->email = $dato['Email'];
        $this->celular = $dato['Celular'];
        $this->materia = $dato['materias'];
        $this->estado = $dato['estado'];
        $this->pass = $dato['Contraseña'];
        $this->token = $dato['token'];
        session_start();
        $_SESSION['token'] = md5(uniqid(mt_rand(), true));
        $this->tk = $_SESSION['token'];
        $_SESSION['email'] = $this->email;
               
    }

    ?>
