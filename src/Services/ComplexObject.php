<?php
// src/Services/ComplexObject.php
namespace App\Services;

use Symfony\Component\HttpFoundation\Response;

class ComplexObject
{  
    public function __construct()
    {
    }

    public function doSomething(): Response {
        return new Response(
            '<html><body> Le service va bien </body></html>'
        );
    }
}