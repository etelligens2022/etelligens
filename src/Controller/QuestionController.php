<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class QuestionController
{
	/**
     * @Route("/", name="app_homepage")
     */
	public function homepage()
	{
         return new Response('What a controller iam having');
	}
    /**
	* @Route("/questions/{slug}")
	*/ 
	public function show($slug)
	{		
		return new Response(sprintf('Future page questions "%s"',str_replace('-',' ',$slug)));
	}
}