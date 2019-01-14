<?php

namespace App\Controller;


use App\Entity\Biens;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {     
        $search = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $search);
        $form->handleRequest($request);
        
        
        $biens = $this -> getDoctrine()
        -> getRepository(Biens::class)
        -> findAll();
        

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'biens'           =>  $biens, 
            'filtre'          =>  $form->createView(),

        ]);
    }

    
            
}
