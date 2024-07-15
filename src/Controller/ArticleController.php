<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/', name: 'home_index')]

class ArticleController extends AbstractController
{
    public function index() : Response {
        return new Response('Hello World');
    }
}





