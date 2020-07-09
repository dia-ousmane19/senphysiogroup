<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }
    /**
     * @Route("/contactez-nous", name="contact")
     */
    public function contact()
    {
        return $this->render('home/contact.html.twig');
    }
    /**
     * @Route("/a-propos", name="apropos")
     */
    public function apropos()
    {
        return $this->render('home/apropos.html.twig');
    }
    /**
     * @Route("/prestation", name="prestation")
     */
    public function prestation()
    {
        return $this->render('home/prestation.html.twig');
    }
    /**
     * @Route("/prise-rendez-vous", name="prv")
     */
    public function prv()
    {
        return $this->render('home/prv.html.twig');
    }
    /**
     * @Route("/tarifs", name="tarif")
     */
    public function tarif()
    {
        return $this->render('home/tarif.html.twig');
    }
    /**
     * @Route("/intervenants", name="intervenant")
     */
    public function intervenant()
    {
        return $this->render('home/intervenant.html.twig');
    }
    /**
     * @Route("/institut-physio-dakar", name="IPD")
     */
    public function IPD()
    {
        return $this->render('home/ipd.html.twig');
    }
    /**
     * @Route("/Adresse", name="lieu")
     */
    public function lieu()
    {
        return $this->render('home/lieu.html.twig');
    }
    /**
     * @Route("/doctors", name="docteur")
     */
    public function docteur()
    {
        return $this->render('home/doctors.html.twig');
    }
}
