<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NoticiasController extends Controller
{
    /**
     * @Route("/{page}", defaults={"page" = 1}, name="noticias_home")
     */
    public function indexAction($page)
    {
    	$repo = $this->getDoctrine()
    			   ->getRepository('AppBundle:Noticia');

    	$query = $repo->createQueryBuilder('t1')
    				->where('t1.removed_on IS NULL')
    				->orderBy('t1.publicada_em', 'DESC')
    				->getQuery();

    	$paginator = $this->get('knp_paginator');
    	$pagination = $paginator->paginate($query, $page, 10);

        return $this->render('noticias/index.html.twig', array('title' => 'Notícias', 'pagination' => $pagination));
    }

    /**
     * @Route("/noticias/detalhes", name="noticias_detalhes")
     */
    public function detalhesAction()
    {

    }
}
