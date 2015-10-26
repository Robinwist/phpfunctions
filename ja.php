<?php
 function writeHello(){
     echo 'Hello' . '<br/>';
 }

function writeMsg($one){
    echo $one . '<br/>';
}

function writeMsgTo($one, $two="Default"){
    echo $one . ' ' .$two . '<br/>';
}

function addValue($one, $two){
    $r = $one + $two;
    return $r;
}

function calcRect($one, $two){
    $r = $one * $two;
    return $r;
}

function BMI()
{
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $outcome = $weight / ($height * $height);
    include 'form.html';
    echo $outcome;
}