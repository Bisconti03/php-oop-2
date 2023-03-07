<?php 


include_once __DIR__ . '/product.php';

class Food extends Product{
    public $weight;
    public $ingredients;
    
    public function __construct(String $image, String $name, Float $price, Categorie $category, String $weight, String $ingredients) {

        $this->weight = $weight;
        $this->ingredients = $ingredients;

        parent ::__construct($image, $name, $price, $category);
              
}

}
?>