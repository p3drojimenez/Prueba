<?php

class Animal{

    private $animalType;

    function __construct($type)
    {
        $this->animalType = $type;
    }
    
    function getType()
    {
        return $this->animalType;
    }

    function getName(){
        return uniqid();
    }
}

class Dog extends Animal{

}
class Cat extends Animal{

}
class Person {
    private $animalList = array();

    function addPet($animal){
        
        $this->animalList = array_merge($this->animalList, array( $animal->getName() => $animal->getType() ));
    }

    function getPets()
    {
        return $this->animalList;
    }
}
$dog = new Dog('dog');
print( $dog->getType() . " => " . $dog->getName());
print( "</br>");

$cat = new Cat('cat');
print( $cat->getType() . " => " . $cat->getName());
print( "</br>");

$person01 = new Person();
$person01->addPet($dog);
$person01->addPet($cat);
print_r($person01->getPets());

