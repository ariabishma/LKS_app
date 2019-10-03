<?php
namespace Core\Controller;

class BaseController {


    public function view($file,$data)
    {
        $file = file_get_contents(BASE_DIR."/views/".$file.".bsm.php");
        foreach ($data as $key => $value) {
            ${$key} = $value;
        }

        eval('?>'.$file);
    }


    public function Middleware($middleware,$param=false)
    {
        $m = $middleware::Run($param);
        return $this;
    }

}