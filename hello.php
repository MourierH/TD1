<?php

class Movie
{
    private $date ;
    private $name;
    private $description;
    private $duration;
    
    
    function affiche()
    {
        print ' Name of the movie: '. $this->name .  "\n" . 'Date of the movie : ' . $this->date.   "\n" .'Description of the movie : '  .   $this->description   . "\n" .'Duration of the movie:' . $this->duration   . "\n" .   "\n";  
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function setName($name= "" )
    {
        $this->name = $name;
    }
    
     public function getDate()
    {
        return $this->date;
    }
    public function setDate($date= "" )
    {
        $this->date = $date;
    }
    
     public function getDuration()
    {
        return $this->duration;
    }
    public function setDuration($duration= "" )
    {
        $this->duration = $duration;
    }
    
     public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description= "" )
    {
        $this->description = $description;
    }
    
    public function __construct($name = "",$description = "" ,$duration = "" ,$date = "")
   {
       $this->name = $name;
       $this->description = $description;
       $this->duration = $duration;
       $this->date = $date;
   } 
  
  
   
} 
$movie= new Movie;
$movie-> setName(" My Little Pony");
$movie->setDate ( " 21/12/12");
$movie-> setDuration (" 1h11 ");
$movie-> setDescription (" 21/20 sur Allociné ");
// Seconde méthode  plus courte 

$movie2= new Movie('rainbow dash','blblblb','2h22', '21/21/11');

$movie->affiche();
$movie2->affiche();

/*
 Osef de femer la balise PHP car on est dans un fichier full PHP pur . Du coup c'est même mieux de rien
 mettre pour pas se retrouver avec une ligne vide sous le ccode PHP qui sera traduit en HTML et qui décalera
 tout le reste du site */

