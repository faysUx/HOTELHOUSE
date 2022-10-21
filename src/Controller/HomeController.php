<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/restaurant', name: 'app_restaurant')]
    public function restaurant(): Response
    {
        return $this->render('home/restaurant/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    
}
}