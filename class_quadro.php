<?php
// descrizione:
// definizione della classe figlia Quadro
include_once 'class_dipendente.php';

class Quadro extends Dipendente
{

    public $rif_dirigente;
    public $num_impiegati;

    public function __construct($_cognome, $_nome, $_matricola)
    {
        // cognome e  nome sono attributi della trait 'Persona'
        // matricola è un attributo della classe padre 'Dipendente'
        // richiamo il costruttore della classe padre con i suoi parametri
        parent::__construct($_cognome, $_nome, $_matricola);

        $this -> data_nascita = "non presente";
        $this -> email = "NULL@NULL.COM";
        $this -> telefono = "0000000000";

        echo 'Creo un Dipendente di classe: <strong>'. __CLASS__ .  '</strong><br />';


    }
}

 ?>
