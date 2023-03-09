<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyNumberController extends AbstractController
{
     /**
     * @Route("/lucky/number2/", name="lucky_number2")  //CECI EST DU CODE !!!! C'est une annotation PHP
     *
     * Au final, cela donne l'url suivante: http://localhost:8000/lucky/number/
     *
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
        return $this->render('luckyNumber/number.html.twig', [
            'number' => $number, 
            'title' => "Mon premier essai symphony"
       ]);
    }
}
