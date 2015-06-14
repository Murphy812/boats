<?php

if(isset($_GET['q'])) {
    header("Content-type: text/txt; charset=UTF-8");
    $n = $_GET['q'];
    echo ($n*$n);
}


if(isset($_POST['z'])) {
    header("Content-type: text/txt; charset=UTF-8");
    if($_POST['z']=='1') {
        echo 'запрос POST успешно обработан, z = 1';
    }
    else {
        echo 'корявый POST запрос';
    }

}


?>
