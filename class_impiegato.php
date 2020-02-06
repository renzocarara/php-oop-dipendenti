<?php
include_once 'class_dipendente.php';
include_once 'trait_imp_op.php';

class Impiegato extends Dipendente
{

    // caratteristiche comuni alle classi Impiegato e Operaio
    use Imp_Op;
    public $quadro_responsabile;

    public function __construct($_cognome, $_nome, $_matricola)
    {
        // cognome e  nome sono attributi della trait 'Persona'
        // matricola è un attributo della classe 'Dipendente'
        $this -> cognome = $_cognome;
        $this -> nome = $_nome;
        $this -> matricola = $_matricola;

        $this -> data_nascita = "0000-00-00";
        $this -> email = "NULL@NULL.COM";
        $this -> telefono = "0000000000";

    }
}


 ?>
