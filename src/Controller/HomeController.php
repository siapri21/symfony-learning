<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;


class HomeController
{

    #[Route('/', name: 'home_index')]
    public function index(): Response
    {
        return new Response('Hello World');
    }

    #[Route('/hello/{name}', name: 'home_index')]
    public function hello(Request $request)
    {
        return new Response('Bonjour' . $request->get('name'));
        $request->get('toto');
    }

    #[Route('/salutation/{age}', name: 'home_salutation', requirements:['age' => Requirement::DIGITS])]
    public function salutation($age)
    {
        return new Response("bonjour , j'ai $age");
    }
}