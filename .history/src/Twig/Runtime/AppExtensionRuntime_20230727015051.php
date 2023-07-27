<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function doSomething(int $count, string $singular,?string $plural = null):string
    {
        $plural = 
        $resulte = $count=== 1 ? $singular : $plural  ; 
        return "$count $resulte";
    }
}
