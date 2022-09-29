<?php

namespace App\Controller;

use App\Entity\Film;
use App\Form\FilmType;
use App\Repository\FilmRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilmController extends AbstractController
{
    #[Route('/','index.index')]
    public function index(FilmRepository $respositry, ): Response
    {
      
      
       
        return $this->render('pages/film/index.html.twig', [
          'films' =>  $films =$respositry->findAll()
           
        ]);
    }
     #[Route('/film/nouveau', 'film.new' , methods: ['GET','POST'])]
        public function new(
     
            ): Response {
            $film = new Film();
        
        


        return $this->render('pages/film/new.html.twig'); 
 
        }
    
    
}
