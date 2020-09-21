<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ResultsController extends AbstractController
{
    /**
     * @Route("/results/1")
     */
    public function results()
    {
        $results = array(
            'names' => array(
                'mark','peter'
            ),
            'distance' => array(
                '10m','12m'
            ),
            'date' => array(
                '02.08','11.08'
            ),
            'time' => array(
                '10s','2s'
                ),
            'modell' => array(
                'A700','A800'
            )
        );

        return $this->render('results/1.html.twig', [
            'results' => $results,
        ]);
    }

}
