<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubscribedRoutineController extends AbstractController
{
    #[Route('/subscribed_routine', name: 'app_subscribed_routine')]
    public function index(): Response
    {
        return $this->render('subscribed_routine/index.html.twig', [
            'controller_name' => 'SubscribedRoutineController',
        ]);
    }

    #[Route('/subscribed/routine/show', name: 'app_subscribed_routine_show')]
    public function show(): Response
    {
        return $this->render('subscribed_routine/show.html.twig', [
        ]);
    }
}
