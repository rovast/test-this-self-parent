<?php

class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Cat extends Animal
{
    public $sex;
    public $age;

    public function __construct($sex, $age)
    {
        parent::__construct('Tom'); // parent 指向父类

        $this->sex = $sex;
        $this->age = $age;
    }

    public function printCat()
    {
        print("name: {$this->name}, age: {$this->age}, sex: {$this->sex}" . PHP_EOL);
    }
}

$catObject = new Cat('male', '10');
$catObject->printCat();
