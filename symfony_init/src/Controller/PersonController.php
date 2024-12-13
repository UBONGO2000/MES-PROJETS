<?php

namespace App\Controller;

use App\Entity\Personne;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonController extends AbstractController
{
    #[Route('/personne', name: 'app_person')]
    public function addPersonne(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $person = new Personne();
        $person->setFirstname("Jean");
        $person->setLastname("Daniel");
        $person->setTrade("Enseignant");
        $person->setAge(30);
        //ajout de l'operation d'insertion de la personne dans ma transaction
        $entityManager->persist($person);

        //execution la transaction
        $entityManager->flush();
        return $this->render('personne/detail.html.twig', [
            'person' => $person,
        ]);
    }
}
