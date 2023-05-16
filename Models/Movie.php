<?php

class Movie
{

    // Attributi 
    public $titolo;
    public $descrizione;
    public $cover;
    public $generi = [];

    //Costruttore
    function __construct($_titolo)
    {
        $this->titolo = $_titolo;
    }

    //Metodi

    public function setData($_descrizione, $_cover, $_generi)
    {
        $this->descrizione = $_descrizione;
        $this->cover = $_cover;
        $this->generi = $_generi;
    }

    public function printMovie()
    {
        $caratteristicheMovie = "";
        $caratteristicheMovie .= "
        Titolo: {$this->titolo},</br>
        Descrizione: {$this->descrizione}</br>
        Cover: {$this->cover}</br>
        Generi: 
        ";
        foreach ($this->generi as $genere) {
            $caratteristicheMovie .= $genere . " ";
        }

        return $caratteristicheMovie;
    }
}
