<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\GenreRepository;
use App\Repository\LivreRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/admin")
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin")
     */
    public function index(
        LivreRepository $livreRepository,
        GenreRepository $genreRepository
    ): Response {
        $livres = $livreRepository->findBy([], ['updatedAt' => 'DESC']);
        $genres = $genreRepository->findAll();

        return $this->render(
            'admin/index.html.twig',
            compact('livres', 'genres')
        );
    }

    /**
     * @Route("/users/delete/{id}", name="admin_delete_user")
     */
    public function deleteUser(Livre $livre): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return new Response("Suppresion du livre {$livre->getId()}");
    }
}