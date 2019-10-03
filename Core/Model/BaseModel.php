<?php
namespace Core\Model;


class BaseModel{

    private $conn;
    private $temp_query = "";
    private $where = false;


    public function __construct()
    {
        $this->conn = new \mysqli("localhost","root","","lks");
    }


    // read
    public function all()
    {
        $this->temp_query .= "SELECT * FROM ".$this->table;
        return $this;
    }

    public function find($id)
    {
        $this->temp_query .= "SELECT * FROM ".$this->table." WHERE ".$this->primary_key." = ".$id;
        return $this;
    }


    public function where($key,$val)
    {
        if(!$this->where){
            $this->temp_query .= "SELECT * FROM ".$this->table." WHERE ".$key." = \"".$val."\"";
            $this->where = true;
        }else{

            $this->temp_query .= " AND ".$key." = ".$val;
        }
        return $this;
    }

    public function get()
    {
        $res = [];
        // echo $this->temp_query;
        $q = mysqli_query($this->conn,$this->temp_query);
        while($r = mysqli_fetch_array($q)){
            $res[] = $r;
        }
        $this->temp_query = "";
        $this->where = false;
        
        return   $res;
     
    }



    // create
    public function Create($data)
    {
        
        $k = "";
        $v = "";

        foreach ($data as $key => $value) {
            $k .= $key.",";    
            $v .= '"'.$value.'",';    
        }
        
        $k = rtrim($k,",");
        $v = rtrim($v,",");


        $int_temp_query = "INSERT INTO ".$this->table." (".$k.") VALUES (".$v.")";

        return mysqli_query($this->conn,$int_temp_query);
        
    }
    


    // Development Purpose
    public function dump()
    {
        return $this->temp_query;
    }
}