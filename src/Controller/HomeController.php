<?php

namespace App\Controller;

use App\Services\ComplexObject;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     *
     * Au final, cela donne l'url suivante: http://localhost:8000/
     *
     */
    public function accueil()
    {
        return $this->render('layout.html.twig', [
            'title' => "Mon premier site Symfony"
       ]);
    }

    /**
     * Page de services
     * 
     * @Route("service", name="test_service")
     */
    public function test(ComplexObject $complexObject)
    {
        return $complexObject->doSomething();
    }
}