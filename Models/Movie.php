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

    //Metodi

    public function setData($_descrizione, $_cover)
    {
        $this->descrizione = $_descrizione;
        $this->cover = $_cover;
    }

    public function printMovie()
    {
        return "
        Titolo: {$this->titolo},</br>
        Descrizione: {$this->descrizione}</br>
        Cover: {$this->cover}</br>
        ";
    }
}
