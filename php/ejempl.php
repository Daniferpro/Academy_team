<?php


class ejem{

    //atributos

    public $id;
    public $name;
    public $surname;
    public $email;
    public $celular; //falta en la bd

    

    public function __construct($id){

        $this->id = $id;
        $Conexion = new Conexion();
        $data = $Conexion->querySQL("SELECT * FROM `student` WHERE `id` = $this->id ");
        $data = mysqli_fetch_assoc($data);
        
        $this->name       = $data['name'];
        $this->surname    = $data['surname'];
        $this->email      = $data['email'];
        
    }

    public function getData(){

        


    }

    
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of celular
     */ 
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set the value of celular
     *
     * @return  self
     */ 
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }


    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

   
    }

?>