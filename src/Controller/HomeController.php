<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ServicesRepository;
use App\Repository\IntervenantsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ServicesRepository $reposervices,IntervenantsRepository $repoIntervenant,PaginatorInterface $paginator,Request $request)
    {
      $data=$reposervices->findAllService();
      $pagination=$repoIntervenant->findAllIntervenant();



    $dataIntervenant = $paginator->paginate(
        $pagination, /* query NOT result */
        $request->query->getInt('page', 1), /*page number*/
        4 /*limit per page*/
    );

        return $this->render('home/index.html.twig',compact('data','dataIntervenant'));

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
     * @Route("/{slug}/intervenant", name="docteur")
     */
    public function docteur($slug,IntervenantsRepository $repoIntervenant)
    {

      $dataOtherIntervenant=$repoIntervenant->findOtherIntervenant($slug);
      $data=$repoIntervenant->findOneIntervenant($slug);
        return $this->render('home/doctors.html.twig',compact('data','dataOtherIntervenant'));
    }
    /**
     * @Route("/services", name="service")
     */
    public function service()
    {
        return $this->render('home/services.html.twig');
    }
}
