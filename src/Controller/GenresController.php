<?php

namespace App\Controller;
use App\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class GenresController extends AbstractController
/**
 * @Route("/genres", name="genre")
 */
{
 
    public function index(ManagerRegistry $doctrine):Response

    {
        $repo = $doctrine->getRepository(Genre::class);
        
         $genres = $repo->findAll();

     
        return $this->render("genres/index.html.twig",[
            'controller_name' => 'GenresController',
            'genres' => $genres,
        ]);
    }
}
