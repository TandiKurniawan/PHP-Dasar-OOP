<?php

class product 
{
    protected string $name;
    protected int $prince;
     
    public function_construct(string $name, int $prince)
    {
        $this->name=$name;
        $this->prince = $prince;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getPrince(): intdi
    {
        return $this->prince;
    }
}

class ProductDummy extends product 
{
    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
    }
}