<?php

namespace App\Controller;

use App\Entity\TournamentEntry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntryController extends AbstractController
{
    /**
     * @Route("/entry", name="entry")
     */
    public function index()
    {
        return $this->render('entry/index.html.twig', [
            'controller_name' => 'EntryController',
        ]);

    }
    /**
     * @Route("/tournament/new", name="create_tournamentEntry")
     */
    public function createTournamentEntry(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $tournamentEntry = new TournamentEntry();
        $tournamentEntry->setTraveldistance(28.3);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($tournamentEntry);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id ' . $tournamentEntry->getId());
    }


}
