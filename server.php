<?php
    $name = $_GET['name'];
    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];
    if($name == ''){
        echo 'err1';
    }elseif ($p1 == ''){
        echo 'err2';
    }elseif ($p2 == ''){
        echo 'err3';
    }elseif ($p1 != $p2){
        echo 'err4';
    }else{
        echo 'success';
    }
