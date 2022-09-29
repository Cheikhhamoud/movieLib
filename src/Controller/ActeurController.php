<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActeurController extends AbstractController
{
    #[Route('/acteur', name: 'app_acteur')]
    public function index(): Response
    {
        return $this->render('acteur/index.html.twig', [
            'controller_name' => 'ActeurController',
        ]);
    }
}
