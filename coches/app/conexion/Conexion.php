<?php
  
   class Conexion{      

      protected $conn;
      protected $host = 'sql2.freemysqlhosting.net';
      protected $db = 'sql2342823';
      protected $username = 'sql2342823';
      protected $password = 'lU6*wL5%';

      public function Conexion(){


         try{
            
            $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db);
            $this->conn->set_charset("utf8");
            
            
         } 
         catch(EXCEPTION $e){
            echo $e;  
         }

      }
}

?>
