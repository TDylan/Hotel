<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReserveerController extends AbstractController
{
    #[Route('/reserveer', name: 'app_reserveer')]
    public function index(): Response
    {
        return $this->render('reserveer/index.html.twig', [
            'controller_name' => 'ReserveerController',
        ]);
    }
}
