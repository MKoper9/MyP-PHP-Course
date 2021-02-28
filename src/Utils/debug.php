<?php

declare(strict_types=1);

error_reporting(E_ALL); //nie ignoruje jakiegokolwiek błędu w trakcie pisania kodu
ini_set('display_errors', '1'); //wyświetla wszystkie błędy

function dump($data)
{
    echo '<div 
    style="
        display: inline-block;
        padding: 0px 10px;
        border: 1px dashed gray;
        background: lightgray;">
    <pre>';
        print_r($data);
        echo '</pre>
    </div>
    <br/>';
}