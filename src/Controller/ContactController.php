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
      $form = $this->createForm(ContactType::class);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $contact=$form->getData();
        $message=(new \Swift_Message('nouveau message'))
                ->setFrom($contact['email'])
                ->setTo('contact@senphysiogroup.com')
                ->setBody(
                  $this->renderView(
                    'email/email.html.twig',
                    compact('contact')
                  ),
                  'text/html'
                )
        ;
        $mailer->send($message);
        echo "Message a ete bien envoye";
        return $this->redirectToRoute('home');
      }

        return $this->render('home/contact.html.twig',['contacForm'=>$form->createView()]);
    }
}
