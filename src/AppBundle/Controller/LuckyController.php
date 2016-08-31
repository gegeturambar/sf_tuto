<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
	throw new \Exception("Something went wrong");
	
	return $this->render('lucky/number.html.twig',array('number' => $number) );
    }

    /**
    * @Route("/lucky/index")
    */
    public function indexAction()
    {
	$product = null;
	if(!$product){
		throw $this->createNotFoundException('The product does not exists yet');
	}
    }

    /**
    * @Route("/lucky/indexParam")
    */
    public function indexParamAction($firstName="trilou",$lastName="whatever",Request $request)
    {
	$page = $request->query->get('page',3);
	return $this->render('lucky/index.html.twig',array('page'=>$page) );
    }


    /**
    * @Route("/lucky/indexSession")
    */
    public function indexSessionAction(Request $request)
    {
	$session = $request->getSession();

	// store an attribute for reuse during a later user request
	$session->set('foo', 'bar');

	// get the attribute set by another controller in another request
	$foobar = $session->get('foobar');

	// use a default value if the attribute doesn't exist
	$filters = $session->get('filters', array());
	return $this->render('lucky/index.html.twig',array('page'=>'no page'));
    }

    /**
    * @Route("lucky/update",name="luckyUpdate")
    */
    public function updateAction(Request $request)
    {
	if(true){
		$this->addFlash(
			'notice',
			'Your changes were saved !'
		);
		return $this->redirectToRoute('app_gege_number');
        }
	return $this->render('whatever');
    }
}
