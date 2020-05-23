<?php

    require_once('Usuario.php');

    class Administrador extends Usuario{

        public function __construct(){

            parent::__construct();
        }


        public function listarUsuarios(){

           $sql = " SELECT * FROM usuario ";
  
            $result = $this->conn->query($sql);

            if ($result->num_rows > 0) {

                  $perfil = $result->fetch_all(MYSQLI_ASSOC);

                return $perfil;
           }                    
                   $this->conn->close();
        }

        public function listarCoches(){

            $sql = " SELECT * FROM coches ";
   
             $result = $this->conn->query($sql);
 
             if ($result->num_rows > 0) {
 
                   $perfil = $result->fetch_all(MYSQLI_ASSOC);
 
                 return $perfil;
            }                    
                    $this->conn->close();
         }

         public function listarHistorial(){

         $sql = " SELECT historial_compras.id_compra,historial_compras.id_coche,historial_compras.usuario_compra,historial_compras.fecha,coches.usuario_venta 
            FROM historial_compras INNER JOIN coches ON coches.id = historial_compras.id_coche  ";
        
   
             $result = $this->conn->query($sql);
 
             if ($result->num_rows > 0) {
 
                   $perfil = $result->fetch_all(MYSQLI_ASSOC);
 
                 return $perfil;
            }                    
                    $this->conn->close();
         }

         public function eliminarUsuario($id){

          $sql = "DELETE FROM usuario WHERE id_usuario=?";

          
              $stmt = $this->conn->prepare($sql);
              $stmt->bind_param('i',$id);
              $stmt->execute();
          
          $stmt->close();
          $this->conn->close();        
         }

         public function eliminarCoche($id){

            $sql = "DELETE FROM coches   WHERE id=?";
  
            
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('i',$id);
                $stmt->execute();
            
            $stmt->close();
            $this->conn->close();        
           }

    }

?>