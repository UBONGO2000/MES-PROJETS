<?php
//precise l'emplacemment de mon controller home par rapport a src(App)
namespace App\Controller;
/*mport de la classe Response*/
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function bonjour(): Response
{
    return new Response("Bonjour à tous");
}
    public function aurevoir(): RedirectResponse
{
    return $this->redirectToRoute('acceuil');
}
    public function redirectToLinkeding(): RedirectResponse
{
    return $this->redirect('https://www.linkedin.com/feed/update/urn:li:activity:7263585315448119296/');
}

    public function rte(){
        return $this->render('base.html.twig',[]);
    }

    public function showrequest(Request $request){
        $parametre = $request->query->get('product'); 
        dump($parametre);
        return $this->render('base.html.twig',[]);
    }

    #[Route('/pages',name:'pages')]

    public function getPages(){
        return $this->render('pages.html.twig',[]);
    }
}