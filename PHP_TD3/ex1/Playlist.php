<?php 

class Playlist extends Media
{
    protected $name;
    protected $listeMedias = [];

    public function __construct($name){
        $this->name = $name;
    }

    public function add(Media $media){
        array_push($this->listeMedias,$media);
    }


    public function print(){

        $result= "";
        
        foreach ($this->listeMedias as $media) {     
            $result.= $media->print() ;     
        }
        return "Playlist ".$this->name." : " .$result;
    
    }


}