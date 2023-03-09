<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * 
     * @Route("/blog/{_lang<fr|en>}/{year<\d{4}>}/{title<^[a-zA-Z0-9-]+$>}", name="blog")
     * 
     */
    public function blogAction($_lang, $year, $title)//$_locale ='fr',
    {
        return $this->render('blog/blog.html.twig', 
        [
            'title' => $title, 
            'year' => $year,
            '_lang' => $_lang,
        ]);
    }
}
