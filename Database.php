<?php

    class Database {
        private $connection = null;

        public function __construct(){
            $this->connection = new mysqli("localhost","root","","triptravel");
            if ($this->connection->connect_error) {
                echo 'Failed to connect to MySQL - ' . $this->connection->connect_error;
            }
        
        }

        public function query($query){
                
            if(explode(' ',$query)[0] === 'SELECT'){                
                return $this->connection->query($query);
            }else{
                if($this->connection->query($query)!= TRUE){                    
                    echo "Error:".$this->connection->error;
                }
            }
            
            $this->connection->close();

        }
    }

?>