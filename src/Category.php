<?php

namespace App;

class Category{
    protected $category_name;

    public function setCategory(string $category_name){
        $this->category_name = $category_name;
    }

    public function getCategory(){
        return $this->category_name;
    }
}

?>