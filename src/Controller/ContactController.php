<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactType;

class ContactController extends AbstractController
{
    /**
     * @Route("/contactez-nous", name="contact")
     */
    public function index(Request $request)
    {
      $form = $this->createForm(ContactType::class);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $contact=$form->getData();
        //dd($contact);
      }

        return $this->render('home/contact.html.twig',['contacForm'=>$form->createView()]);
    }
}
