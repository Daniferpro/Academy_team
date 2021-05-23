<?php


class Teacher{

    //atributos
    public $id;
    public $name;
    public $surname;
    public $country;
    public $location;
    public $entry;
    public $email;
    public $celular;
    public $status;

    // public function __construct($id){
    //     $this->id = $id;
    //     $Conexion = new Conexion();
    //     $data = $Conexion->querySQL("SELECT * FROM `teacher` WHERE `id` = $this->id ");
    //     $data = mysqli_fetch_assoc($data);
        
    //     $this->name       = $data['name'];
    //     $this->surname    = $data['surname'];
    //     $this->country    = $data['country'];
    //     $this->location   = $data['location'];
    //     $this->entry      = $data['entry'];
    //     $this->email      = $data['email'];
    //     $this->celular    = $data['contacto1'];
    //     $this->status     = $data['status'];     
    // }

    //Cuento los registros 
    public function countRegisters()
{
    $Conexion = new Conexion();
    $data = $Conexion->querySQL("SELECT COUNT(*)FROM `teacher`");
    $data = mysqli_fetch_assoc($data);
    $Cantidad = $data['COUNT(*)'];
    echo $Cantidad;
}
    

    //Obtengo información
    public function getName()
    {
        return $this->name;
    }






}



