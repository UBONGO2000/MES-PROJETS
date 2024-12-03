<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first/{name}',name:'first')]
    public function index(): Response
    {
    
        return $this->render('index.html.twig',[
            'Controller_name' => 'FirstController',
            'name'=>'georges'
        ]);

        //  return new Response(
        //      "<h1>Hello new response</h1>"
        //  );
    }
}
