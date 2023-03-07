<?php 
include_once __DIR__ . '/product.php';

class Accessories extends Product{
    public $material;
    public $dimensions;

    public function __construct(String $image, String $name, Float $price, Categorie $category, String $material, String $dimensions)
        {
            $this->material = $material;
            $this->dimensions = $dimensions;
            parent::__construct($image, $name, $price, $category);
        }
}
?>