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
    public $salario_base;

    public function __construct($_cognome, $_nome, $_matricola)
    {
        $this -> cognome = $_cognome;
        $this -> nome = $_nome;
        $this -> matricola = $_matricola;
    }

    public function calcolaStipendio()
    {
         if (!is_numeric($this -> salario_base) || !is_numeric($this -> straordinari)) {
            throw new Exception("C'è stato un problema di contabilità!");
         }
         else {
             $stipendio = $this -> salario_base + $this -> straordinari;
             echo 'Stipendio dipendente: ' . $stipendio . '€';
         }
    }
}
?>
