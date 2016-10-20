<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('Content-Type: text/plain');

$isTrue = True;

if($isTrue){
    echo 'True';
}

//=== provjerava i tip podatka

$result = $isTrue ? 'one' : 'two';//isto kao i if ispod, skraćeno

if ($isTrue){
    $result = $isTrue;
}else{
    $result = $isTrue;
};

/* is_array(), is_number(), is_null(), is_int()
 *isset, empty()
 * if(isset($lol) && &lol == 3) {} 
 *kod nedefiniranih varijabli, prvo seta $lol pa odrađuje dalje
 */