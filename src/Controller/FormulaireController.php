<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('formulaire/index.html.twig');
    }

    #[Route('/bonjour', name: 'app_bonjour')]
    public function bonjour(Request $request): Response
    {
        $prenom = $request->request->get('prenom');
        $nom = $request->request->get('nom');
        
        return $this->render('formulaire/bonjour.html.twig', [
            'prenom' => $prenom,
            'nom' => $nom,
            'date_heure' => date('d/m/Y H:i:s')
        ]);
    }
}