<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HOTELHOUSEController extends AbstractController
{
    #[Route('/h/o/t/e/l/h/o/u/s/e', name: 'app_h_o_t_e_l_h_o_u_s_e')]
    public function index(): Response
    {
        return $this->render('hotelhouse/index.html.twig', [
            'controller_name' => 'HOTELHOUSEController',
        ]);
    }
}
