<?php
session_start();


$lenght = '';
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

foreach ($arrayComponents as $elem){
    if( $elem['active']){
        $lenght .= $elem['base'];
        $lenghtFiltered = strlen($elem['base']);
    }
}

function createPassword($qtyLetters, $password, $repeatCha, $lenghtFiltered, $lenght ){
    if( $qtyLetters > 0  && $lenghtFiltered > 0){
        if ( $repeatCha == 'repeatNo'){
            for ( $i = 0; strlen($password) < $qtyLetters; $i++ ){
                $randomCha = $lenght[rand(0, strlen($lenght) - 1)];

                if(!preg_match( "/$randomCha/", $password )){
                    $password .= $randomCha;
                }
            }  
        } else {
            for ( $i = 0; strlen($password) < $qtyLetters; $i++ ){
                $password .= $lenght[rand(0, strlen($lenght) - 1)];
            }

        }

        return $password;
    }
}

var_dump( createPassword($qtyLetters, $password, $repeatCha, $lenghtFiltered, $lenght ) );
?>