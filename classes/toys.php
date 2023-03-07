<?php 
class Toys extends Product{
    public $characteristics;
    public $dimensions;

    public function __construct(String $image, String $name, Float $price, Categorie $category, String $characteristics, String $dimensions)
    
        {
            $this->characteristics = $characteristics;
            $this->dimensions= $dimensions;
            parent::__construct($image, $name, $price, $category);
        }
}

?>