<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Symfony;
class ClientController extends AbstractController
{
    /**
     * @Route("/clients", name="app_clients")
     */
    public function index(): Response
    {
        $allinfo= $this->getDoctrine()
                    ->getRepository(Symfony::class)
                    ->findBy(['title'=>"yogesh"]);
                   
        return $this->render('client/index.html.twig', [
            'info' =>$allinfo,
        ]);
    }
}
