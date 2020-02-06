<?php

include_once 'class_dirigente.php';
include_once 'class_quadro.php';
include_once 'class_impiegato.php';
include_once 'class_operaio.php';

// creo un oggetto di classe Dirigente
$dir_1 = new Dirigente("Paolo", "Rossi", "BB3457");
// valorizzo alcuni attributi della classe Dirigente non inizializzati col costruttore
$dir_1 -> data_nascita="1956-03-23";
$dir_1 -> luogo_nascita="Roma";
$dir_1 -> assunto_il="2018-03-02";
$dir_1 -> stipendio=50000;
$dir_1 -> bonus=10000;
$dir_1 -> telefono="3393672666";
$dir_1 -> email="paolo.rossi@aziendax.com";
$dir_1 -> indirizzo="via Piaccapi 7, Boolandia";


$dir_1 -> stampaDettaglioAnagrafica();
$dir_1 -> stampaDettaglioContatti();
// $dir_1 -> stampaDettagliPosizione();

 ?>
