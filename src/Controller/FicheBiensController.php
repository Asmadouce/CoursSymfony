<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Biens;

class FicheBiensController extends AbstractController
{
    /**
     * @Route("/fiche/{id}", name="fiche_biens")
     */
    public function index($id)
    {
       
        $biens = $this -> getDoctrine()
        -> getRepository(Biens::class)
        -> find($id);
        dump($biens);
        return $this->render('fiche_biens/fiche.html.twig', [
            'controller_name' => 'FicheBiensController',
            'bien'           =>  $biens,
            
            
        ]);
    }
}
