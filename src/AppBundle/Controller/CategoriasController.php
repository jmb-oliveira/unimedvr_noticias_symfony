<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriasController extends Controller
{
    /**
     * @Route("/categorias/{page}", defaults={"page" = 1}, name="categorias_list")
     */
    public function listAction($page)
    {
    	$repo = $this->getDoctrine()
    			   ->getRepository('AppBundle:Categoria');

    	$paginator = $this->get('knp_paginator');
    	$pagination = $paginator->paginate($repo->getCategorias(), $page, 5);

        return $this->render('categorias/index.html.twig', array('title' => 'Categorias', 'pagination' => $pagination));
    }

    /**
     * @Route("/categorias/detalhes/{id}", defaults={"id" = null}, name="show_categoria_noticias")
     */
    public function showNoticiasAction($id)
    {

    }
}
