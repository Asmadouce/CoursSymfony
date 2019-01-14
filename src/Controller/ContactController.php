<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Contact;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $contact = new Contact();
     

        $form = $this ->createFormBuilder($contact)
                ->add('name')
                ->add('firstname') 
                ->add('email')
                ->add('commentaire')
                ->getForm();

        $form->handleRequest($request);

        $infoContact = $form->getData();


        if($form->isSubmitted() && $form->isValid())
            {
                $infoContact = $form->getData();//on récupère toutes les données du formulaire contact
                dump($infoContact);
                $message = (new \Swift_Message('Hello Email'))
                    ->setFrom('contactMaisonsAsmaoui@asmaoui.com')
                    ->setTo('maisonAsmaoui@gmail.com')
                    ->setBody(
                        $this->render
                        (
                            // templates/emails/registration.html.twig
                            'contact/emails.html.twig', [
                                'viewEmail'=>$infoContact,//on renvoie la vue sur le mail
                        ]),   
                        'text/html'
                    );
                $mailer->send($message);
            }

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'formContact'=>$form->createView(),
        ]);
    }

}
