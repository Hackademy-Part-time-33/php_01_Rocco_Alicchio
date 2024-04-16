<?php

// Traccia 1:
// Definisci 4 variabili:

// Integer 
// Float 
// String 
// Boolean
// A schermo, fai comparire il tipo di dato delle varie variabili. Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.


$intero = 13;
$decimale = 5.5;
$string = "rocco";
$booleano = true;


// echo $intero;


// Traccia 2:
// Date le seguenti variabili:

// $1text = "Marco";
// $text2 = "hai";
// $text.3 = "sete";
// $text4 = "?";
// @text5 = "Perché";
// $te-xt6 = '$text2';
// $text 7 = 'bevuto';
// $text8 = "tutto"
// correggi eventuali errori e stampa correttamente a terminale la stringa: 

// “Marco hai sete? Perché hai bevuto tutto.“


// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perché";
// $text6 = " ";
// $text7 = 'bevuto';
// $text8 = "tutto.";

// echo $text1.$text6.$text2.$text6.$text3.$text4.$text6.$text5.$text6.$text2.$text6.$text7.$text6.$text8;



// Traccia 3:
// Dati i seguenti array:

$words1=['una',67,'vita','colle','mi','rosso',['oscura','era',89,['mezzo',['cammin','Nel',['selva','la',['via','una',true,]],]],'ritrovai','per'],'diritta']; 

$words2 = [
 'elemento1' => 25.89,
 'elemento2' => 'nostra',
 'elemento3' => [
  'Virgilio',
  'smarrita',
  'ché'
 ]
];


$results = $words1[6][3][1][1]." ".$words1[6][3][0]." "."del"." ".$words1[6][3][1][0]." "."di"." ".$words2["elemento2"]." ".$words1[2]." ".$words1[4]." ".$words1[6][4]." ".$words1[6][5]." ".$words1[0]." ".$words1[6][3][1][2][0]." ".$words1[6][0].","." ".$words2["elemento3"][2]." ".$words1[6][3][1][2][1]." ".$words1[7]." ".$words1[6][3][1][2][2][0]." ".$words1[6][1]." ".$words2["elemento3"][1];

var_dump($results);

// Crea una variabile di tipo Stringa chiamata $results che stampi a terminale il seguente testo, attraverso l’accesso agli array sopra: 

// “Nel mezzo del cammin di nostra vita mi ritrovai per una selva oscura, ché la diritta via era smarrita“.



// HINT:

// Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo più opportuno: nuove variabili, concatenamenti, ecc ecc.




?>