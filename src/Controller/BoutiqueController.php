<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;

class BoutiqueController extends AbstractController
{
    #[Route('/boutique', name: 'app_boutique')]
    public function listArticleAction(EntityManagerInterface $entityManager): Response
    {   
        $articles = $entityManager->getRepository(article::class)->findAll();
        return $this->render('boutique/index.html.twig',
        [
            'articles' => $articles
        ]
        );
    }

    #[Route('/article/{id}', name: 'article')]
    public function showArticleAction(EntityManagerInterface $entityManager, int $id){
        
        $article = $entityManager->getRepository(article::class)->findOneBy(['id' => $id]);
        return $this->render('boutique/article.html.twig',
        [
            'article' => $article
        ]
        );
    }
}
