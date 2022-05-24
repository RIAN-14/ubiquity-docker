<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController
{
    public function hello(): Response
    {
        return new Response(
            '<html><body> HELLO WORLD </body></html>'
        );
    }
}