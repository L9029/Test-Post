<?php

use PHPUnit\Framework\TestCase;

use App\Category;

class CategoryTest extends TestCase{
    public function test_set_category(){
        $category = new Category();
        $category->setCategory("Tests");

        $this->assertIsString($category->getCategory());
    }
}

?>