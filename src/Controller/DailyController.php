<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DailyController extends AbstractController
{
    #[Route('/daily', name: 'app_daily')]
    public function index(): Response
    {
        return $this->render('daily/index.html.twig', [
            'controller_name' => 'DailyController',
        ]);
    }
}
