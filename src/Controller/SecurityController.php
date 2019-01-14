<?php
//TUTO:
//https://www.youtube.com/watch?v=_GjHWa9hQic&t=1153s

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{

//-------------------------------------------INSCRIPTION---------------------------------------------------------    
    /**
     * @Route("/inscription", name="registration")
     */
    public function registration(Request $request, ObjectManager $manager,UserPasswordEncoderInterface $encoder)
    {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $encoded = $encoder->encodePassword($user, $user->getPassword());//permet d'encoder le password dans la base de donnée
            //https://symfony.com/doc/4.0/security/password_encoding.html
            $user->setPassword($encoded);//permet d'encoder le password dans la base de donnée
            

            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('login');
        }        
        return $this->render('security/registration.html.twig', [
            'formUser'=>$form->createView(),
            
        ]);
    }
//------------------------------------------CONNEXION-------------------------------------------------------- 
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
    return $this->render('security/login.html.twig');
    }
//------------------------------------------DECONNEXION-------------------------------------------------------- 
    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
    
    }



}
