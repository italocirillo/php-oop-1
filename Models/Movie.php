<?php

class Movie
{

    // Attributi 
    public $titolo;
    public $descrizione;
    public $cover;

    //Costruttore
    function __construct($_titolo)
    {
        $this->titolo = $_titolo;
    }

    //Metodo
    public function printMovie()
    {
        return "Titolo: {$this->titolo}";
    }
}
