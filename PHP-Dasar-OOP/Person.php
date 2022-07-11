<?php

class phpversion
{
    const AUTHOR = "progammer zaman now"

    var string $name;
    var string ?$addres = null;
    var string $country = "Indonesia";

    function _construct(string $name, ?this->addres){
        $this->name = $name;
        $this->addres = $addres;
    }

    function sayhello(?string $name)
    {
        if(is_null($name)){
            echo "Hi,my name is $this->name" .PHP_EOL;
        }else{
            echo "Hi $name, my name is $this->my name" .PHP_EOL;
        }
    }

    }

    function_destruct()
    {
        echo "object person $this->name is destroyed" . PHP_EOL
        
    }
    
