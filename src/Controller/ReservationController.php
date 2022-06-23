<?php

namespace App\Controller;

use App\Form\ReservationType;
use App\Repository\RoomsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(RoomsRepository $roomsRepository): Response
    {
        $rooms = $roomsRepository->findAll();
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
            'rooms'=> $rooms
        ]);
    }
}
