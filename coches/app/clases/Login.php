<?php
    require_once('../conexion/Conexion.php');

    class Login extends Conexion{

     protected $nia;
     protected $password;

            public function __construct(){
               
                parent::__construct();
 
            }
            public function login($nia,$password){
                
                echo "Hola que tal";

                $sql = "SELECT id_usuario,usuario,tipo_usuario FROM usuario WHERE usuario = ? AND password = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('ss',$nia,$password); 
                $stmt->bind_result($id,$usuario,$tipo_usuario);
                $stmt->execute(); 
       
        
                    if($stmt->fetch()){  
                            session_start();  
                            $_SESSION['$usuario'] = $usuario;
                            $_SESSION['$tipo_usuario'] = $tipo_usuario;
                            $_SESSION['$id'] = $id;
                    }
                   /* 
                $stmt->close();
                $this->conn->close();
                */
             }  

        public function validarLogin($usuario){

            if( !isset($_SESSION['$id']) ){
                //header("location:../index.html");
                exit();
            }      
        }

        public function logout(){
            
            session_unset();
            session_destroy();
        }

    }
    
?>
