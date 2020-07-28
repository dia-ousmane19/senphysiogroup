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
    public function index(Request $request, \Swift_Mailer $mailer)
    {
      $success="";
      $form = $this->createForm(ContactType::class);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $contact=$form->getData();
        $message=(new \Swift_Message('nouveau message'))
                ->setFrom($contact['email'])
                ->setTo('ousane@gmail.com')
                ->setBody(
                  $this->renderView(
                    'email/email.html.twig',
                    compact('contact')
                  ),
                  'text/html'
                )
        ;
        $mailer->send($message);
        $success='Votre message a bien été envoyé,nous reviendrons vers vous dans les plus brefs délais';
        $this->addFlash("success", $success);

        return $this->redirectToRoute('contact');
      }

        return $this->render('home/contact.html.twig',['contacForm'=>$form->createView(),"messageSuccess" => $success]);
    }
}
