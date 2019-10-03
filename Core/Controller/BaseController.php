<?php
namespace Core\Controller;

class BaseController {

    private $data;

    public function view($file,$data)
    {
        $this->data = $data;

        $file = file_get_contents(BASE_DIR."/views/".$file.".bsm.php");
        foreach ($this->data as $key => $value) {
            ${$key} = $value;
        }

        eval('?>'.$file);
    }

    public function Component($component,$data=[])
    {   
        foreach ($data as $key => $value){
            ${$key} = $value;
        }

        foreach ($this->data as $key => $value) {
            ${$key} = $value;
        }
        
        require BASE_DIR."/views/components/".$component.".comp.php";
    }


    public function Middleware($middleware,$param=false)
    {
        $m = $middleware::Run($param);
        return $this;
    }




}