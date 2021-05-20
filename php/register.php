<?php

//recibimos las variables mediante POST
// registro de Usuarios

if( isset($_POST['email']) && 
    isset($_POST['password']) && 
    isset($_POST['password2']) &&
    isset($_POST['name']) && 
    isset($_POST['surname']) && 
    isset($_POST['country']) &&
    isset($_POST['location'])){

    include '../DataBase/Conexion.php';

    $Con = new Conexion;


    $email    = $_POST['email'];  
    $name     = $_POST['name'];
    $surname  = $_POST['surname'];
    $country  = $_POST['country'];
    $location = $_POST['location'];
    $status   = "pending";
    $psw1     = $_POST['password'];
    $psw2     = $_POST['password2'];

    if($psw1 == $psw2){
        $password = hash("sha256", $_POST['password']);
        //$name,$surname,$country,$location,$email,$password,$status
        //consultammos si el email ya existe
        $consu = "SELECT * FROM `student` WHERE `email` = '$email'";

        $resulqryEmail = $Con->querySQL($consu);
        if($resulqryEmail->num_rows<=0){

            $qry= "INSERT INTO `student`(`name`, `surname`, `country`, `location`, `email`, `pass`, `status`) VALUES('$name','$surname','$country','$location','$email','$password','pending') ";
            
            $result = $Con->querySQL($qry);
            // realizamos la consulta a la bd y si el resultado es mayor a 0 continuamos con la session 
            if($result){
        
                header("Location: ./");     
           }else{
            // si el email o la pass no existen en la bd o no son corretas mostramos el mensaje en pantalla
            $mensaje = "Inicie Sesión para continuar";
           }
        }else{
            $mensaje = "El Email ya esta registrado en el Sistema";
        }
       
    

    }else{
        $mensaje = "Las Contraseñas no Coinciden";
    }
    
   


}