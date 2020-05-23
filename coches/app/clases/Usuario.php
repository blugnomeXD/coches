<?php

require_once('../conexion/Conexion.php');


    Class Usuario extends Conexion{



            public function __construct(){

                parent::__construct();
            }

            /* Función para mostrar  los datos de un usuario a través de su nombre de Usuario */
        public function mostrarUsuario($usuario){

            $sql = "SELECT usuario,password,dni,nombre,primer_apellido,segundo_apellido,email,telefono FROM  usuario WHERE usuario = ?";
            $result = $this->conn->prepare($sql);
            $result->bind_param('s',$usuario);
            $result->execute();
            $result->bind_result($usuario,$password,$dni,$nombre,$primer_apellido,$segundo_apellido,$email,$telefono);
            $result->fetch();
            $datos = array($usuario,$password,$dni,$nombre,$primer_apellido,$segundo_apellido,$email,$telefono);
            
                $result->close();
                $this->conn->close();
               
                return $datos;
                }
        

           /* Función para  que el usuario pueda actualizar los datos */

        public function editarUsuario($usuario,$password,$dni,$nombre,$primer_apellido,$segundo_apellido,$email,$telefono){

            $sql = "UPDATE usuario SET password = ? , dni= ? , nombre= ? , primer_apellido= ? , segundo_apellido= ? ,
             email= ? , telefono= ? WHERE usuario = ? ";
            
               

            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssssssis",$password,$dni,$nombre,$primer_apellido,$segundo_apellido,$email,$telefono,$usuario);
            $stmt->execute();      
            
            $stmt->close();
            $this->conn->close();
            
        }


        public function registroUsuario($usuario,$password,$dni,$nombre,$primer_apellido,$segundo_apellido,$email,$telefono){
            
            $sql = "INSERT INTO usuario (usuario,password,dni,nombre,primer_apellido,segundo_apellido,email,telefono)     
                            VALUES (?,?,?,?,?,?,?,?)";
                                                
                        $stmt= $this->conn->prepare($sql);
  
                    $stmt->bind_param('sssssssi',$usuario,$password,$dni,$nombre,$primer_apellido,$segundo_apellido,$email,$telefono);
                
                        $stmt->execute();
                        $stmt->close();
                        $this->conn->close();
        }

        public function compraCoche($id_coche,$usuario_compra){

            $sql = "INSERT INTO historial_compras (id_coche,usuario_compra ) VALUES (?,?)"; 

            $stmt= $this->conn->prepare($sql);
            $stmt->bind_param("is",$id_coche,$usuario_compra);                  
            $stmt->execute();
            $stmt->close();

            $this->conn->close();

        }
   
        public function ventaCoche($titulo,$marca,$modelo,$precio,$antiguedad,$kms,$usuario){

            $sql = "INSERT INTO coches (titulo,marca,modelo,precio,antiguedad,kms,usuario_venta) VALUES (?,?,?,?,?,?,?)"; 

            $stmt= $this->conn->prepare($sql);
            $stmt->bind_param("sssiiis",$titulo,$marca,$modelo,$precio,$antiguedad,$kms,$usuario);                  
            $stmt->execute();
            $stmt->close();

            $this->conn->close();

        }

        public function listarCompras($user){


            $sql = "SELECT coches.marca,coches.modelo ,coches.precio,coches.antiguedad,coches.kms,coches.usuario_venta,historial_compras.id_compra,historial_compras.fecha  FROM coches INNER JOIN historial_compras 
            ON coches.id=historial_compras.id_coche WHERE historial_compras.usuario_compra ='$user' ";
            
            
            $result = $this->conn->query($sql);

            if ($result->num_rows > 0) {

                  $perfil = $result->fetch_all(MYSQLI_ASSOC);

                return $perfil;
           }                    
                   $this->conn->close();
        }
        
        public function cochesOfertados($user){


            $sql = "SELECT * FROM coches WHERE usuario_venta ='$user' ";
            
            
            $result = $this->conn->query($sql);

            if ($result->num_rows > 0) {

                  $perfil = $result->fetch_all(MYSQLI_ASSOC);

                return $perfil;
           }                    
                   $this->conn->close();
        }
        public function listarVentas($user){


            $sql = " SELECT coches.id,coches.titulo,coches.marca,coches.modelo,coches.modelo,coches.precio,coches.antiguedad,coches.kms, historial_compras.fecha 
            FROM coches INNER JOIN historial_compras  ON coches.id = historial_compras.id_coche WHERE coches.usuario_venta ='$user'; ";
  
            $result = $this->conn->query($sql);

            if ($result->num_rows > 0) {

                  $perfil = $result->fetch_all(MYSQLI_ASSOC);

                return $perfil;
           }                    
                   $this->conn->close();
        }

    public function buscarCoche($keyword){

        $sql = "SELECT * FROM coches WHERE coches.titulo LIKE '%$keyword%'  OR coches.marca LIKE '%$keyword%'";

        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {

              $perfil = $result->fetch_all(MYSQLI_ASSOC);

            return $perfil;
       }                    
               $this->conn->close();
          }

    }

   


 





     