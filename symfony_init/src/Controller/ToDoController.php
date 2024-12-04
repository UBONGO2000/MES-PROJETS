<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ToDoController extends AbstractController
{
    #[Route('/todo', name: 'app_to_do')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();

        if(!$session->has('todos')){
            $todos = array(
                'achat' => 'achaeter clé usb',
                'cours' => 'Finaliser mon cours',
                'correction' => 'corriger mes examens'
            );

            $session->set('todos',$todos);
        }
        return $this->render('to_do/index.html.twig');
    }

    #[Route('/todo/{name}/{content}',name:'todo.add')]
    public function addToDo(Request $request, $name , $content): Response{

        $session = $request->getSession();
        //si ma session a deja un todos alors je l'affiche
        if ($session->has('todos')){
            $todos = $session->get('todo');
        }
        //sinon je retourne une erreur
        else{
            $this->addFlash('error',"La liste todos n'est pas encore initialiser !!!");
        }
    }
}
