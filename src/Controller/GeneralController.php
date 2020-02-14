<?php

namespace App\Controller;

use App\Entity\MemoAlex;
use App\Repository\MemoAlexRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function pagealex(MemoAlex $contents)
    {
        dump($contents);
        return $this->render('general/pagealex.html.twig', [
            'contents' => $contents,
        ]);
    }    
}
