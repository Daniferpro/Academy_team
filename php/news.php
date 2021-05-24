<?php

    class News{
        public $id;
        public $titulo;
        public $contenido;
        public $fecha;
        public $hora;
        public $profesor;

        public function __construct($id){
            $this->id = $id;
            $Conexion = new Conexion();
            $data = $Conexion->querySQL("SELECT * FROM `news` WHERE `id` = $this->id ");
            $data = mysqli_fetch_assoc($data);
            
            $this->titulo       = $data['titulo'];
            $this->contenido    = $data['contenido'];
            $this->fecha        = $data['fecha'];
            $this->hora         = $data['hora'];
            $this->profesor     = $data['profesor'];   
        }

        public function createNews(){
        if( isset($_POST['titulo']) && 
        isset($_POST['contenido']) && 
        isset($_POST['fecha']) &&
        isset($_POST['hora'])){

            include '../DataBase/Conexion.php';
            $Con = new Conexion();
            $titulo        = $_POST['titulo']; 
            $contenido     = $_POST['contenido'];  
            $fecha         = date("d/m/Y");       
            $hora          = time();
            $profesor      = $id;

            $qry= "INSERT INTO `news`(`titulo`, `contenido`, `fecha`, `hora`, `profesor`) VALUES('$titulo','$contenido','$fecha','$hora','$profesor')";
            $result = $Con->querySQL($qry);
            if($result){
                $mensaje= "Se a dado de alta la noticia correctamente"
                echo $mensaje;
            }





        }






        }











    }




?>