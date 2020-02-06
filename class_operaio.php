<?php
include_once 'class_dipendente.php';
include_once 'trait_imp_op.php';

class Operaio extends Dipendente
{

    // caratteristiche comuni alle classi Impiegato e Operaio
    use Imp_Op;
    public $qualifica;
    public $specializzazione;
    public $turni;

    public function __construct($_cognome, $_nome, $_matricola)
    {
        // cognome e  nome sono attributi della trait 'Persona'
        // matricola è un attributo della classe 'Dipendente'
        $this -> cognome = $_cognome;
        $this -> nome = $_nome;
        $this -> matricola = $_matricola;

        $this -> data_nascita = "non presente";
        $this -> email = "NULL@NULL.COM";
        $this -> telefono = "0000000000";

    }
}
 ?>
