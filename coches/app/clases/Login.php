<?php
    require_once('../conexion/Conexion.php');

    class Login extends Conexion{

     protected $nia;
     protected $password;

            public function __construct(){
               
                parent::__construct();
 
            }
             public function login($me,$id){

                $sql = "SELECT id_usuario,usuario FROM usuario WHERE usuario = ? AND password = ?"; 
              /*
                        $stmtSelect=$this->conn->prepare($sql );
                        $stmtSelect->bind_param("ss",$me,$id);
                        if(!$stmtSelect->execute()){
                    echo "error: ".$this->conn->error;
                }*/
               
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
