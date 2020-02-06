<?php
include_once 'class_dipendente.php';

class Dirigente extends Dipendente
{

    public $benefit;
    public $bonus;

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

    public function calcolaStipendio()
    {
         if (!is_numeric($this -> salario_base) || !is_numeric($this -> bonus)) {
            throw new Exception("C'è stato un problema di contabilità!");
         }
         else {
             $stipendio = $this -> salario_base + $this -> bonus;
             echo 'Stipendio dirigente: ' . $stipendio . '€' . '<br><br>';
         }
    }
}
 ?>
