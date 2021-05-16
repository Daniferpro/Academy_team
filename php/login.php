<?php

//recibimos las variables mediante POST

if(isset($_POST['email']) && isset($_POST['password'])){

    include './DataBase/Conexion.php';

    $Con = new Conexion;
    $email    = $_POST['email'];  
    $password = hash("sha512", $_POST['password']); 
    $qry      = "SELECT * FROM ´student´ WHERE ´email´ = $email AND ´password´ = $password AND ´status´ = 'active' ";
   
    if($result = $Con->querySQL($qry)){

        session_start();

        $Userid = mysqli_fetch_assoc($result); 
        $Userid = $Userid['id'];

        $_SESSION['id']   = $Userid;
        $_SESSION['user'] = "student";        
   }



}