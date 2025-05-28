<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgeController extends AbstractController
{
    #[Route('/age', name: 'app_age')]
    public function index(): Response
    {
        return $this->render('age/index.html.twig');
    }
}