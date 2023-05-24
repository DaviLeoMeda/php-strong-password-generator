<?php
session_start();


$lenght = 0;
$lenghtFiltered = 0;
$qtyLetters = ( isset($_GET['lenght'])) ? intval( $_GET['lenght']) : '';
$repeatCha =  ( isset($_GET['repeat']))? $_GET['repeat'] : '';
$password = '';

var_dump($qtyLetters, $repeatCha);

$arrayComponents = [
    [
        'characters' => 'letters',
        'base' => 'abcdefghijklmnopqrstuvwxyz',
        'active' => ( isset( $_GET['words'])) ? true : false
    ],
    [
        'characters' => 'number',
        'base' => '0123456789',
        'active' => ( isset( $_GET['numbers'])) ? true : false
    ],
    [
        'characters' => 'symbol',
        'base' => '?|\/%&$+-*{}[]()=_><§€@^',
        'active' => ( isset( $_GET['symbols'])) ? true : false
    ],
];

var_dump($arrayComponents);
?>