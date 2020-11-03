<?php

namespace App\Controller;

use App\Entity\TournamentEntry;
use App\Form\Type\TaskType;
use App\Form\Type\TournamentEntryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class EntryController extends AbstractController
{
    /**
     * @Route("/tournament/entry/new/", name="form_tournamentEntry")
     */
    public function createTournamentEntryForm(Request $request): Response
    {
        /* @var $tournamentEntry TournamentEntry */
        $tournamentEntry = new TournamentEntry();

        $form = $this->createForm(TournamentEntryType::class, $tournamentEntry);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $tournamentEntry = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tournamentEntry);
            $entityManager->flush();

            return $this->redirectToRoute('show_tournamentEntry_json',['id'=>$tournamentEntry->getId()]);
        }
        return $this->render('tournament/entry/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/tournament/new/{name}/{travel_distance}/{flight_duration}/{date}/{model}", name="create_tournamentEntry")
     */
    public function createTournamentEntry($name, $travel_distance, $flight_duration, $date, $model): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $tournamentEntry = new TournamentEntry();
        $tournamentEntry->setName($name);
        $tournamentEntry->setTravelDistance($travel_distance);
        $tournamentEntry->setFlightDuration($flight_duration);
        $tournamentEntry->setDate($date);
        $tournamentEntry->setModel($model);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($tournamentEntry);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id ' . $tournamentEntry->getId());
    }

    /**
     * @Route("/tournament/entry/show/{id}.{_format}", name="show_tournamentEntry_json",format="html",requirements={"_format": "html|json|xml"})
     *
     *
     */
    public function show(TournamentEntry $tournamentEntry,string $_format,SerializerInterface $serializer)
    {
        if($_format=='json'){
            $jsonContent = $serializer->serialize($tournamentEntry,'json');
            return new Response($jsonContent);
        }
        if($_format=='xml'){
            $xmlContent = $serializer->serialize($tournamentEntry,'xml');
            return new Response($xmlContent);
        }

        return $this->render('tournament/entry/index.html.twig', [
            'entry' => $tournamentEntry,
            'date' => $tournamentEntry->getDate()->format("d-m-Y")
        ]);

    }

    /**
     * @Route("zxyhui289/tournament/entry/delete/{id}", name="delete_tournamentEntry")
     */
    public function delete(TournamentEntry $tournamentEntry)
    {
        $name = $tournamentEntry->getName();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($tournamentEntry);


        $entityManager->flush();
        return new Response('Tournament Entry delete with name of ' . $name);
    }


}
