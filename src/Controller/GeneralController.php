<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('general/index.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }

    /**
     * @Route("/pageLudi", name="pageludi")
     */
    public function pageludi()
    {
        return $this->render('general/pageludi.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }

    /**
     * @Route("/pageMelvin", name="pagemelvin")
     */
    public function pagemelvin()
    {
        return $this->render('general/pagemelvin.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }

    /**
     * @Route("/pageAlex", name="pagealex")
     */
    public function pagealex()
    {
        return $this->render('general/pagealex.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }    
}
