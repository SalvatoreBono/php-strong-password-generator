<?php
/* $passwordLen = contiene la lunghezza selezionata */
$passwordLen = $_GET["passwordLen"] ?? null;

/* $chars = contiene tutti i caratteri che si vogliono generare */
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";

/* str_shuffle($chars) randomizza i caratteri presenti nella variabile $chars  */
/*  0, $passwordLen significa che deve partire da 0 e $passwordLen massimo di caratteri selezionati dall'utente */

$passwordGenerator = substr(str_shuffle($chars), 0, $passwordLen);
