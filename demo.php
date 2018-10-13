<?php

$x = 5;
function my(){
    global $x;
    echo $x;
}

my();

