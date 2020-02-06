<?php
// descrizione
// classe padre: Dipendente (usa trait Persona),
// classi figlie: Dirigente, Quadro, Impiegato (usa trait Imp_Op), Operaio (usa trait Imp_Op)
// creo delle istanze delle 4 classi Dirigente, Quadro, Impiegato e Operaio
// chiamo alcuni metodi per stampare a video delle info

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
// stampo gli attributi specifici di Persona
$dir_1 -> stampaAnagrafica();
$dir_1 -> stampaContatti();

// racchiudo questa chiamata a funzione in una try & catch per gestire l'eccezione
try{
    $dir_1 -> calcolaStipendio();
} catch (Exception $eccezione_stipendio){
    echo 'Eccezione: ' . $eccezione_stipendio->getMessage() . '<br><br>';
    }

// -----------------------------------------------------------------------------
// creo un oggetto di classe Impiegato
$imp_1 = new Impiegato("Franco", "Nero", "CC9459");
// valorizzo alcuni attributi della classe Impiegato non inizializzati col costruttore
$imp_1 -> data_nascita="1969-03-23";
$imp_1 -> luogo_nascita="Milano";
$imp_1 -> assunto_il="2015-09-02";
$imp_1 -> salario_base=20000;
// il valore null nel campo straordinari genera un'eccezione sul calcolo dello stipendio
// $imp_1 -> straordinari=null;
$imp_1 -> straordinari=500;
$imp_1 -> telefono="3393672666";
$imp_1 -> email="franco.nero@aziendax.com";
$imp_1 -> indirizzo="via Laravel 10, Boolandia";
// stampo gli attributi specifici di Persona
$imp_1 -> stampaAnagrafica();
$imp_1 -> stampaContatti();

// racchiudo questa chiamata a funzione in una try & catch per gestire l'eccezione
try{
    $imp_1 -> calcolaStipendio();
} catch (Exception $eccezione_stipendio){
    echo 'Eccezione: ' . $eccezione_stipendio->getMessage() . '<br><br>';
    }

// -----------------------------------------------------------------------------
// creo un oggetto di classe Operaio
$ope_1 = new Operaio("Giorgio", "Giallo", "DD9411");

// stampo gli attributi anagrafici
$ope_1 -> stampaAnagrafica();
// racchiudo questa chiamata a funzione in una try & catch per gestire l'eccezione
try{
    $ope_1 -> calcolaStipendio();
} catch (Exception $eccezione_stipendio){
    echo 'Eccezione: ' . $eccezione_stipendio->getMessage() . '<br><br>';
    }
// -----------------------------------------------------------------------------
// creo un oggetto di classe Quadro
$qua_1 = new Quadro("Marco", "Verdi", "FQ8831");
$qua_1 -> stampaAnagrafica();
// racchiudo questa chiamata a funzione in una try & catch per gestire l'eccezione
try{
    $qua_1 -> calcolaStipendio();
} catch (Exception $eccezione_stipendio){
    echo 'Eccezione: ' . $eccezione_stipendio->getMessage() . '<br><br>';
    }

 ?>
