<?php
    require_once('../conexion/Conexion.php');

    class Login extends Conexion{

     protected $nia;
     protected $password;

            public function __construct(){
               
                parent::__construct();
 
            }
            public function login($nia,$password){

                $sql = "SELECT id_usuario,usuario,tipo_usuario FROM usuario WHERE usuario = $nia AND password = $password";

                $row_cnt = $sql->num_rows; 
        
       printf("Result set has %d rows.\n", $row_cnt);
          $this->conn->close();
                
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
