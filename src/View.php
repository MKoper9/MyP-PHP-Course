<?php

declare(strict_types=1);


namespace App;

class View
{
    public function render(string $page, array $params): void  //?przed string - zmienna może być nullem
    {
        require_once("templates/layout.php");        
    }
}