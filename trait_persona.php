<?php
// descrizione:
// in questo file sono definite le carttaeristiche base associabili ad una persona,
// verranno utilizzate dalla classe 'Dipendente'
// ha 2 metodi per stampare a video alcuni attributi
trait Persona
{
    public $cognome;
    public $nome;
    public $genere;
    public $data_nascita;
    public $luogo_nascita;
    public $nazionalita;
    public $email;
    public $telefono;
    public $indirizzo;

    public function stampaDettaglioAnagrafica()
    {
        echo 'Cognome: ' . $this->cognome . '<br>';
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Data di nascita: ' . $this->data_nascita . '<br>';
        echo 'Luogo di nascita: ' . $this->luogo_nascita . '<br>';
    }
    public function stampaDettaglioContatti()
    {
        echo 'Telefono: ' . $this->telefono . '<br>';
        echo 'Indirizzo: ' . $this->indirizzo . '<br>';
        echo 'E-mail: ' . $this->email . '<br><br>';
    }
}
?>
