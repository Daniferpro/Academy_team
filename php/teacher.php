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

    public function __construct($id){
        $this->id = $id;
        $Conexion = new Conexion();
        $data = $Conexion->querySQL("SELECT * FROM `teacher` WHERE `id` = $this->id ");
        $data = mysqli_fetch_assoc($data);
        
        $this->name       = $data['name'];
        $this->surname    = $data['surname'];
        $this->country    = $data['country'];
        $this->location   = $data['location'];
        $this->entry      = $data['entry'];
        $this->email      = $data['email'];
        $this->celular    = $data['telefono'];
        $this->status     = $data['status'];     
    }

    //Cuento los registros 
    public function countRegisters()
{
    $Conexion = new Conexion();
    $data = $Conexion->querySQL("SELECT COUNT(*)FROM `teacher`");
    $data = mysqli_fetch_assoc($data);
    $Cantidad = $data['COUNT(*)'];
    echo $Cantidad;
}
 
    //Muestro todos los registros
    public function printAllRegisters()
    {
        $Conexion = new Conexion();
        //primero busco la cantidad de profesores que hay regitrados
        $data = $Conexion->querySQL("SELECT COUNT(*)FROM `teacher`");
        $data = mysqli_fetch_assoc($data);
        $Cantidad = $data['COUNT(*)'];
        $id=1;
        //segundo: hago la busqueda a la base de datos
        while($id<=$Cantidad){
        $data = $Conexion->querySQL("SELECT * FROM `teacher` WHERE `id` = $id");
        $data = mysqli_fetch_assoc($data);
        $nombre = $data['name'];
        $apellido = $data['surname'];
        $pais = $data['country'];
        $localidad = $data['location'];
        $email = $data['email'];
        $telefono = $data['telefono'];

        if ($data['status']=='active'){
            
            $estadoCuenta = 'activa'; 

        }
        if($data['status']=='pending'){
        
            $estadoCuenta = 'pendiente'; 
        }

        
        //imprimo por pantalla los registros   
        echo 
            "<style>
            .registros{
                font: italic 0.5em sans-serif;
            }
            </style>

        <td class=\"registros\" width=\"25%\"><font face=\"verdana\">" . 
        $nombre . "</font></td>";    
        echo "<td class=\"registros\" width=\"25%\"><font face=\"verdana\">" . 
	    $apellido . "</font></td>";
        echo "<td class=\"registros\" width=\"25%\"><font face=\"verdana\">" . 
	    $pais . "</font></td>";
        echo "<td class=\"registros\" width=\"25%\"><font face=\"verdana\">" . 
	    $localidad. "</font></td>";    
        echo "<td class=\"registros\" width=\"25%\"><font face=\"verdana\">" . 
	    $email. "</font></td>";
        echo "<td class=\"registros\" width=\"25%\"><font face=\"verdana\">" . 
	    $telefono. "</font></td>"; 
        echo "<td class=\"registros\" width=\"25%\"><font face=\"verdana\">" . 
	    $estadoCuenta. "</font></td></tr>.<br/>"; 

        $id++;
        }
        
    }        
        
         


    //Obtengo información
    public function getName()
    {
        return $this->name;
    }






}



