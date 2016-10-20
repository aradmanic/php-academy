<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header('Content-Type: text/plain');

$n = 1;
$f = 2.5;
$b = true;
var_dump($n + $f + $b);

$n = 1;

$n+=10; // $n = $n + 10

echo $n;


// spajanje dva array-a

$a = [1, 2, 'one'=>'a1', 'two'=>'a2'];
$b = [3, 4, 'two'=>'b2', 'three'=>'b3'];

var_dump($a +$b);
var_dump(array_merge($a, $b));
var_dump(array_replace($a, $b));