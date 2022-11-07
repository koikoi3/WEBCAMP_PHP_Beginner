<?php

class MyTest
{
    //
    public function add($i, $j)
    {
        return $i + $j; 
    }
    public function sub($i, $j)
    {
        return $i - $j;
    }
}

class MyTest2
{
    private $price;
    private $name;
    
    //
    public function setPrice($i)
    {
        $this->price = $i;
    }
    public function getPrice()
    {
        return $this->price;
    }
    
    //
    public function setName($s)
    {
        $this->name = $s;
    }
    public function getName()
    {
        return $this->name;
    }
}