<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TP1Ex1Q1Controller extends AbstractController
{
    #[Route('/tp1/ex1/q1', name: 'app_tp1_ex1_q1')]
    public function index(): Response
    {
        return $this->render('tp1_ex1_q1/index.html.twig', [
            'controller_name' => 'TP1Ex1Q1Controller',
            'date_heure' => date('d/m/Y H:i:s')
        ]);
    }

    #[Route('/tp1/ex1/q1/php', name: 'app_tp1_ex1_q1_php')]
    public function phpOnly(): Response
    {
        return new Response(
            '<html><body>Date et heure: '.date('d/m/Y H:i:s').'</body></html>'
        );
    }
}