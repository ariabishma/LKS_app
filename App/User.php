<?php
namespace App;

use Core\Model\BaseModel;

class User extends BaseModel{

    protected $table = "user";
    protected $primary_key = "id";
}

