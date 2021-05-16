<?php

//recibimos las variables mediante POST

if(isset($_POST['email']) && isset($_POST['password'])){

    include '../DataBase/Conexion.php';

    $Con = new Conexion;
    $email    = $_POST['email'];  
    $password = hash("sha512", $_POST['password']); 
    $qry      = "SELECT * FROM `student` WHERE `email` = '$email' AND `pass` = '$password' AND `status` = 'active' ";
    $result = $Con->querySQL($qry);
    if($result->num_rows>0){

        session_start();

        $Userid = mysqli_fetch_assoc($result); 
        $Userid = $Userid['id'];

        $_SESSION['id']   = $Userid;
        $_SESSION['user'] = "student";  
        header("Location: ../admin/");     
   }else{

    $mensaje = "Usuario o Contraseña incorrectos";
   }



}