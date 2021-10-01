<?php

session_start();

function getnowdate(){
    ini_set('date.timezone','America/Bogota'); 
    return date('Y-m-d H:i:s');
}