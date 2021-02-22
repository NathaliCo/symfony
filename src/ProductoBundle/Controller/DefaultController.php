<?php

namespace ProductoBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ProductoBundle\Entity\Producto;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="homepage")
     */
    public function indexAction(Request $request)
    {	
        $manager=$this->getDoctrine()->getManager();
        $repository=$manager->getRepository('ProductoBundle:Producto');
        $productos=$repository->findAll();
	    return $this->render('./default/index.html.twig',array(
            'productos'=>$productos,
        ));
    }
	
    /**
     * @Route("/post/{id}", name="simple_post")
     */
   /* public function simplePost($id)
    {	
	return $this->render('ProductoBundle:Producto:simple.html.twig', array(
		'id' => $id
	));
    }   */
}