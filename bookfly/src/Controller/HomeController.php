<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('name', TextType::class,[
                'constraints' =>[
                    new NotBlank,
                    new Length(['min' => 2])
                ]
            ])
            ->add('email', EmailType::class, [
                'constraints' =>[
                    new Email(),

                ]
            ])
            ->add('message', TextareaType::class,[
                'constraints' =>[
                    new NotBlank,
                    new Length(['min' => 12])
                ]
            ])
            ->add('rebot', CheckboxType::class,[
                'label' => 'Check if youre not a robot',
                'constraints'=>[
                    new IsTrue()
                ]
            ])
            ->getForm()
            ;

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            dd("Hello world");
        }
        return $this->render('Articles/index.html.twig', ['form' =>$form->createView()
        ]);

        
    }
}


