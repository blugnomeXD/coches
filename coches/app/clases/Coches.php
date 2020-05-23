<?php

require_once('../conexion/Conexion.php');

    class Coches extends Conexion{

        public function __construct(){

            parent::__construct();
        }

        public function listarCoches(){
        
            $sql = "SELECT * FROM coches";
                $result = $this->conn->query($sql);

                    if ($result->num_rows > 0) {

                        $coches = $result->fetch_all(MYSQLI_ASSOC);

                        return $coches;
                    }

                    $this->conn->close();
        }

  
    }

    

?>