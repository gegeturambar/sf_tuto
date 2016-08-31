<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

classBlogController extends Controller
{
	/*
	* Matches blog exactly
	*
	* @Route("/blogi/{page}", name="blog_list", requirements={"page": "\d+"}))
	*/
	public function listAction($page)
	{
		$this->render();
	}
	
	/**
     	* Matches /blog/*
     	*
     	* @Route("/blog/{slug}", name="blog_show")
     	*/
    	public function showAction($slug)
    	{
    	    // $slug will equal the dynamic part of the URL
    	    // e.g. at /blog/yay-routing, then $slug='yay-routing'
	
	        // ...
	}
}
