<?php

declare(strict_types=1);


class Animal {
    protected $type;

    // Constructor
    public function __construct($type) {
        $this->type = $type;
    }

    // Mètode per obtenir tipus d'animal
    public function getType() {
        return $this->type;
    }

    
    public function makeSound() {
        echo "L'animal fa un so...\n";
    }
}



?>