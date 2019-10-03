<?php
namespace App;

use Core\Model\BaseModel;

class Book extends BaseModel{

    protected $table = "books";
    protected $primary_key = "id";
}

