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
        // echo $this->temp_query;
        $q = mysqli_fetch_all(mysqli_query($this->conn,$this->temp_query));
        $this->temp_query = "";
        $this->where = false;

        return $q;
     
    }
    


    // development purpose
    public function dump()
    {
        return $this->temp_query;
    }
}