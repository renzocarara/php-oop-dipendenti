<?php

include_once 'trait_persona.php';

class Dipendente
{
    use Persona;
    public $matricola;
    public $assunto_il;
    public $dimesso_il;
    public $reparto;
    public $tipo_contratto;
    public $titolo_studio;
    public $stipendio;

    public function __construct($_cognome, $_nome, $_matricola)
    {
        $this -> cognome = $_cognome;
        $this -> nome = $_nome;
        $this -> matricola = $_matricola;
    }

    public function calcolaStipendio()
    {

        // echo 'Data ultimo ordine: ' . $this->data_ultimo_ordine . '<br><br>';
    }

}
?>
