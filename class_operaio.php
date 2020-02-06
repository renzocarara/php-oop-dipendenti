<?php
// descrizione:
// definizione della classe figlia Operaio,
// usa la trait Imp_Op, che contiene caratteristiche comuni
// a questa classe e alla classe Impiegato

include_once 'class_dipendente.php';
include_once 'trait_imp_op.php';

class Operaio extends Dipendente
{

    // caratteristiche comuni alle classi Impiegato e Operaio
    use Imp_Op;
    public $qualifica;
    public $specializzazione;
    public $turni;
    public $reparto;


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
//     public function __construct()
// {
//   echo 'The class "', __CLASS__, '" was initiated!<br />';
// }
}
 ?>
