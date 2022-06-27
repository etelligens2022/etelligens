<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OmController extends AbstractController
{
    /**
     * @Route("/lucky/nadeem", name="app_nadeem")
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
