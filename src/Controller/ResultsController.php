<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ResultsController extends AbstractController
{


    /**
     * @Route("/tournament/results/1",name="results")
     */
    public function results()
    {

        $entityManager = $this->getDoctrine()->getManager();
        $conn = $entityManager->getConnection();

        $sql = 'SELECT * FROM tournament_entry ORDER BY travel_distance desc';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // returns an array of Product objects
        $results = $stmt->fetchAll();

        return $this->render('results/1.html.twig', [
            'results' => $results,
        ]);
    }

}
