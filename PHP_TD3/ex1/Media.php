<?php 

class Media
{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function __toString() {
        return $this->print();
    }

    public function displayMedia(){
        return "<li>----[Name : ".$this->name.", Duration: " .$this->duration."]</li><br>";
    }
}
