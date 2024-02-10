<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResevationrdvController extends AbstractController
{
    #[Route('/reservation', name: 'app_resevationrdv')]
    public function index(): Response
    {
        return $this->render('resevationrdv/index.html.twig', [
            'controller_name' => 'ResevationrdvController',
        ]);
    }
}
