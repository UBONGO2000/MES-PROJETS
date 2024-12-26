<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FirstController extends AbstractController
{
    #[Route('/first/{name}',name:'first')]
    public function index(): Response
    {
    
        return $this->render('detail.html.twig',[
            'Controller_name' => 'FirstController',
            'name'=>'georges'
        ]);

        //  return new Response(
        //      "<h1>Hello new response</h1>"
        //  );
    }


}


class AppExtension extends AbstractExtension
{
    public function getFunctions(){
        return [new TwigFunction('image',[$this,'DefaultImage'])];

    }
    public function DefaultImage($image){
        if($image=null){
            imagepng($image);
        }
    }

}