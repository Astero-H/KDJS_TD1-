<?php 

class Photo extends Media
{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function print(){
        return "<li>-------[Name : ".$this->name."]</li>";
    }


}
