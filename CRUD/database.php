<?php
  
    class database{
        public $host = DB_HOST;
        public $user = DB_USER;
        public $pass = DB_PASS;
        public $dbname = DB_NAME;
        
        public $link;
        public $error;
        
        public function __construct(){
            $this->dbconnect();
        }
        
        
        private function dbconnect(){
            $this->link= new mysqli($this->host,$this->user,$this->pass,$this->dbname); 
            if(!$this->link){
                $this->error= "Connection failed".$this->link->connect_error;
            }
            else{
                //echo 'connection successful';    
            }
            
        }
        
        public function select($query){
            $result= $this->link->query($query) or die ($this->link->error.__LINE__);
            
            if($result->num_rows >0){
                return $result;
            }
            else{
                return false;
            }
        }
        
        public function insert($query){
            $result= $this->link->query($query) or die ($this->link->error.__LINE__);
            if($result){
                header ("Location: index.php");
                exit();
            }
            
        } 
        
        public function update($query){
            $result= $this->link->query($query) or die($this->link->error.__LINE__);
                
           /* if($result){
                header("Location: index.php");
                exit();
            } */
            
        }
    }
?>


