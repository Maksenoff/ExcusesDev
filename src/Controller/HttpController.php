<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HttpController extends AbstractController
{
    #[Route('/$http_code', name: 'app_http')]
    public function index(): Response
    {
        return new response (
            $this->render('http/index.html.twig',[
            ])
            
        );
    }
} 
