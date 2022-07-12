<?php

//this is the database connection class

class DbConn
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "trydb"; 

    public function db_connect() 
    {
        try{
            $string ='mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            return $db = new PDO($string,$this->user,$this->pwd);
        //    var_dump($db);

        }catch(PDOException $e){
            die($e->getMessage());

        }
    }

    public function read($query, $data = []){

        $DB = $this->db_connect();
        $stm = $DB->prepare($query);

        if(count($data) == 0){
            $stm = $DB->query($query);
            $check = 0;
            if($stm){
                $check = 1;
            }
        }else{
            $check = $stm->execute($data);
        }
        

        if($check){
            return $stm->fetchAll(PDO::FETCH_OBJ);

        }else{
            return false;
        }
    }

    public function write($query, $data = []){

        $DB = $this->db_connect();
        $stm = $DB->prepare($query);

        if(count($data) == 0){
            $stm = $DB->query($query);
            $check = 0;
            if($stm){
                $check = 1;
            }
        }else{
            $check = $stm->execute($data);
        }
        

        if($check){
            return true;

        }else{
            return false;
        }
    }
}