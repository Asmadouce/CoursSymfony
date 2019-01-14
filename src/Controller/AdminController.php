<?php
//TUTO UTILE:
//https://www.youtube.com/watch?v=_cgZheTv-FQ&feature=youtu.be
//https://www.youtube.com/watch?v=_GjHWa9hQic

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Biens;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\BiensType;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        $biens = $this -> getDoctrine()
        -> getRepository(Biens::class)
        -> findAll();
        dump($biens);

        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'IndexController',
            'biens'           =>  $biens,    
        ]);
    }
 //---------------------------------------------------------CREATION------------------------------------------   
       /**
     * @Route("/form", name="form")
     * * @Route("/form", name="form")
     */
    
    public function create(Request $request, ObjectManager $manager)
    {
    
     $biens = new Biens();
     

     $form = $this ->createFormBuilder($biens)
             ->add('title')
             ->add('surface')
             ->add('picture')
             ->add('price')
             ->getForm();
     $form->handleRequest($request);
     
     if($form->isSubmitted() && $form->isValid())
     {
         //$manager = $this->getDoctrine()->getManager(); 2ieme option.
         $manager->persist($biens);
         $manager->flush();

         return $this->redirectToRoute('index',['id' => $biens->getId()]);
     }


     return $this->render('admin/form.html.twig', 
     [
         'formBiens'=>$form->createView(),
        
         
     ]);
         
     }
//-----------------------------------------------------------EDITION--------------------------------------   
    /**
     * @Route("/form", name="form")
     * * @Route("admin/{id}/edit", name="edit")
     */
    
    public function edit(Biens $biens = null, Request $request, ObjectManager $manager)
    {
    if(!$biens)
    {
        $biens = new Biens();
    }
     

     $form = $this ->createFormBuilder($biens)
             ->add('title')
             ->add('surface')
             ->add('picture')
             ->add('price')
             ->getForm();
     $form->handleRequest($request);

     if($form->isSubmitted() && $form->isValid())
     {
         //$manager = $this->getDoctrine()->getManager(); 2ieme option.
         $manager->persist($biens);
         $manager->flush();

         return $this->redirectToRoute('admin');
     }


     return $this->render('admin/form.html.twig', 
     [
         'formBiens'=>$form->createView(),
         'editMode' =>$biens->getId() !== null
     ]);
         
     }
//----------------------------------------------------------SUPRESSSION-----------------------------------------------------
    /**
     * * @Route("admin/{id}/remove", name="remove")
     */
    public function remove($id, ObjectManager $manager)
        {
            $biens = $manager->getRepository(Biens::class)->find($id);
           
                $manager->remove($biens,$user);
                $manager->flush();
                
                

                $message = $this->addFlash(
                    'notice',
                    'Le bien a été supprimé!'
                );

                return $this->redirectToRoute('admin', [
                    'message'=>$message,
                    
                ]);
                   
        }

}
