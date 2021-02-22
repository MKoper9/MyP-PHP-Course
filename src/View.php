<?php

declare(strict_types=1);


namespace App;

class View
{
    public function render(string $page): void  //?przed string - zmienna może być nullem
    {
        require_once("templates/layout.php");        
    }
}