<?php 

class Music extends Media
{
    protected $name;

    public function __construct($name,$duration){
        $this->name = $name;
        $this->duration = $duration;
    }

    public function print(){
        return parent::displayMedia();
    }
}
