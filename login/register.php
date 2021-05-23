<!DOCTYPE html>
<html lang="en">
<?php 
        include '../php/register.php';
?>
<head>
    <title>Register academia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                <span class="login100-form-title">
						Nuevo Registro de Usuario
					</span>
                    <img src="images/logo2.png" alt="Logo Academy">
                </div>

                <form class="login100-form validate-form" method="post" action="">
                    

                    <div class="wrap-input100 validate-input" data-validate="Ingrese un email válido: ejemplo@ejemplo.com">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Ingrese su Nombre">
                        <input class="input100" type="text" name="name" placeholder="Nombre">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Ingrese su apellido">
                        <input class="input100" type="text" name="surname" placeholder="Apellido">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</span>
                    </div>
        
                    

                    <div class="wrap-input100 validate-input" data-validate="Debe seleccionar un Pais">
                        <input class="input100" type="text" name="country" placeholder="Pais">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Ingrese su Departamento">
                        <input class="input100" type="text" name="location" placeholder="Departamento">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Introduzca la Contraseña">
                        <input class="input100" type="password" name="password" placeholder="Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Repita la Contraseña">
                        <input class="input100" type="password" name="password2" placeholder="Repita Contraseña">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="text-center p-t-12">
                        <span class="txt1">
							<?php if(isset($mensaje)){
                                echo $mensaje;
                            } ?>
						</span>
                        
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
							Registrarme
						</button>
                    </div>
                   
                    <div class="text-center p-t-12">
                        <span class="txt1">
							Ya Tienes una cuenta?
						</span>
                        <a class="txt2" href="./index.php">
							Inicia Sesión
						</a>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>