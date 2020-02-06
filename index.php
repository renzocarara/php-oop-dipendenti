<?php

// classe padre: Dipendente (usa trait Persona),
// classi figlie: Dirigente, Quadro, Impiegato (usa trait Imp_Op), Operaio (usa trait Imp_Op)


include_once 'class_dirigente.php';
include_once 'class_quadro.php';
include_once 'class_impiegato.php';
include_once 'class_operaio.php';

// -----------------------------------------------------------------------------
// creo un oggetto di classe Dirigente
$dir_1 = new Dirigente("Paolo", "Rossi", "BB3457");
// valorizzo alcuni attributi della classe Dirigente non inizializzati col costruttore
$dir_1 -> data_nascita="1956-03-23";
$dir_1 -> luogo_nascita="Roma";
$dir_1 -> assunto_il="2018-03-02";
$dir_1 -> salario_base=50000;
$dir_1 -> bonus=10000;
$dir_1 -> telefono="3393672666";
$dir_1 -> email="paolo.rossi@aziendax.com";
$dir_1 -> indirizzo="via Piaccapi 7, Boolandia";
// stampo delgli attributi specifici di Persona
$dir_1 -> stampaDettaglioAnagrafica();
$dir_1 -> stampaDettaglioContatti();
// try{
//     // racchiudo questa chiamata a funzione in una try & catch
//     $dir_1 -> calcolaStipendio();
// } catch (Exception $eccezione_stipendio){
//     echo 'Eccezione: ' . $eccezione_stipendio->getMessage();
//     }

// -----------------------------------------------------------------------------
// creo un oggetto di classe Impiegato
$imp_1 = new Dirigente("Franco", "Nero", "CC9459");
// valorizzo alcuni attributi della classe Impiegato non inizializzati col costruttore
$imp_1 -> data_nascita="1969-03-23";
$imp_1 -> luogo_nascita="Milano";
$imp_1 -> assunto_il="2015-09-02";
$imp_1 -> salario_base=20000;
// il valore null genera un eccezione sul calcolo dello stipendio
// $imp_1 -> straordinari=null;
$imp_1 -> straordinari=500;
$imp_1 -> telefono="3393672666";
$imp_1 -> email="franco.nero@aziendax.com";
$imp_1 -> indirizzo="via Laravel 10, Boolandia";
// stampo delgli attributi specifici di Persona
$imp_1 -> stampaDettaglioAnagrafica();
$imp_1 -> stampaDettaglioContatti();

try{
    // racchiudo questa chiamata a funzione in una try & catch
    $imp_1 -> calcolaStipendio();
} catch (Exception $eccezione_stipendio){
    echo 'Eccezione: ' . $eccezione_stipendio->getMessage();
    }

 ?>
