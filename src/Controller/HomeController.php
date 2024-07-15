<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;


class HomeController extends AbstractController
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
    
    #[Route('/template/{param}', name: 'home_template')] 
    public function template($param): Response
    {
        $animals =  ['lion', 'tigre', 'dauphin', 'aigle', 'chevre'];    
       return $this->render('home/index.html.twig',
       ['name'=>"siapri",
         'coucou'=>$param,
        'animals' => $animals]);
        }

}