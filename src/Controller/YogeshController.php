<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YogeshController extends AbstractController
{
	/**
     * @Route("/yogesh", name="yogesh_hello")
     */
	public function hello() : Response
	{
		$number=random_int(0,1000);
       return $this->render('om/hitman.html.twig',[
       	  'number' => $number,
       ]);
	}
}
