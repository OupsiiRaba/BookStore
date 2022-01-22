<?php

namespace App\Controller;

use App\Form\LivreSearchType;
use App\Repository\GenreRepository;
use App\Repository\AuteurRepository;
use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Livre;
use App\Entity\Auteur;
use App\Entity\Genre;
use Knp\Component\Pager\PaginatorInterface;

use Doctrine\Persistence\ManagerRegistry;
class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */

   
    public function index( LivreRepository $livreRepository, GenreRepository $genreRepository, AuteurRepository $auteurRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $repo = $livreRepository->findAll();
       

        $livres = $paginator->paginate(
            $repo, // on passe les données
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            8 // N° de la page en cours, 1 par défaut
             // nombre d'éléments par page
        );

        return $this->render("home/index.html.twig", [
            'livres' => $livres,
            'genres' => $genreRepository->findAll(),
            'auteurs' => $auteurRepository->findAll(),
            'dates' => $livreRepository->findDates(),
        ]);
    }
    /** 
        *@Route("/show/{id}", name="show")
     */

    public function show(ManagerRegistry $doctrine, int $id): Response

    {
        $livre = $doctrine->getRepository(livre::class)->find($id);
        if (!$livre) {
            return $this->redirectToRoute('home');
        }
        return $this->render("show/index.html.twig",[
            'livre' => $livre,
            
        ]);
    }
    /**
 * @Route("/genres", name="genres")
 */

    public function genres(ManagerRegistry $doctrine):Response

    {
        $repo = $doctrine->getRepository(Genre::class);
        
         $genres = $repo->findAll();

     
        return $this->render("genres/index.html.twig",[
            
            'genres' => $genres,
        ]);
    }

     /**
 * @Route("/auteurs", name="auteurs")
 */

public function auteurs(ManagerRegistry $doctrine):Response

{
    $repo = $doctrine->getRepository(Auteur::class);
    
     $auteurs = $repo->findAll();

 
    return $this->render("auteurs/index.html.twig",[
        
        'auteurs' => $auteurs,
    ]);
}


    /**
     * @Route("/rechercher", name="rechercher")
     */
    public function rechercher(Request $request, LivreRepository $repo , PaginatorInterface $paginator)
    {
        $searchForm = $this->createForm(LivreSearchType::class);
        $searchForm->handleRequest($request);
       
        $donnees = $repo->findAll();

        if ($searchForm->isSubmitted() && $searchForm->isValid())
        {
            $titre = $searchForm->getData()->getTitre();
            $donnees = $repo->search($titre);
        }
          // Paginate the results of the query
          $livres = $paginator->paginate(
            $donnees, // Doctrine Query, not results
            $request->query->getInt('page', 1), // Define the page parameter
            4 // Items per page
        );

      

        return $this->render('rechercher/index.html.twig', [
            
            'livres' => $livres,
            'searchForm' => $searchForm->createView()
        ]);
    }
   
    
    /**
     * @Route("/livre/liste-entre-deux-dates/{dateMin}/{dateMax}")
     */
    public function listeEntreDeuxDates($dateMin, $dateMax, LivreRepository $livreRepository): Response
    {
        $livres = $livreRepository->findBetweenTwoDates(strval($dateMin), strval($dateMax));
        return $this->render('home/chercher.html.twig', [
            'livres' => $livres,
        ]);
    }

    /**
     * @Route("/livre/liste-par-note/{note}", name="livre_list_by_note", methods={"GET"})
     */
    public function listByNote(LivreRepository $livreRepository, $note): Response
    {
        $livres = $livreRepository->findByNote($note);
        return $this->render('home/chercher.html.twig', [
            'livres' => $livres,
        ]);
    }

    /**
     * @Route("/livre/liste-par-date/{date}/", name="livre_list_by_date", methods={"GET"})
     */
    public function listByDate(LivreRepository $livreRepository, $date): Response
    {
        $livres = $livreRepository->findByDate($date);
        return $this->render('home/chercher.html.twig', [
            'livres' => $livres,
        ]);
    }


    /**
     * @Route("/livre/liste-par-auteur/{auteur}/", name="livre_list_by_auteur", methods={"GET"})
     */
    public function listByAuteur(LivreRepository $livreRepository, $auteur): Response
    {
        $livres = $livreRepository->findByAuteur($auteur);
        return $this->render('home/chercher.html.twig', [
            'livres' => $livres,
        ]);
    }

    /**
     * @Route("/livre/liste-par-genre/{genre}/", name="livre_list_by_genre", methods={"GET"})
     */
    public function listByGenre(LivreRepository $livreRepository, $genre): Response
    {
        $livres =  $livreRepository->findByGenre($genre);

        return $this->render('home/chercher.html.twig', [
            'livres' => $livres,
        ]);
    }
}
