<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OmController extends AbstractController
{
    /**
     * @Route("/om", name="app_om")
     */
    public function index(): Response
    {

        $number=random_int(0,100);
        return new Response(
         '<html><body>Luck Number: '.$number.'</body></html>'
        );
    }


    public function thankyou(): Response 
    {
        return $this->render('om/thankyou.html.twig',[
            'thanks' => "Thank You for Registeration",
      ]);
    }
}
