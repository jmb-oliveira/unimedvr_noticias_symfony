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

        $itemsPerPage = 5;
    	$paginator = $this->get('knp_paginator');
    	$pagination = $paginator->paginate($repo->getCategorias(), $page, 5);
        $maxPage = ceil($pagination->getTotalItemCount() / $itemsPerPage);

        if($page > $maxPage){
            throw $this->createNotFoundException();
        }

        return $this->render('categorias/index.html.twig', array('title' => 'Categorias', 'pagination' => $pagination));
    }

    /**
     * @Route("/categorias/noticias/{id}/{page}", defaults={"id" = null, "page" = 1}, name="show_categoria_noticias")
     */
    public function showNoticiasAction($id, $page)
    {
        $categoria = $this->getDoctrine()
                    ->getRepository('AppBundle:Categoria')
                    ->find($id);

        if(!$categoria){
            throw $this->createNotFoundException();
        }

        $itemsPerPage = 5;
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($categoria->getNoticias(), $page, 5);
        $maxPage = ceil($pagination->getTotalItemCount() / $itemsPerPage);

        if($page > $maxPage){
            throw $this->createNotFoundException();
        }

        return $this->render('categorias/show_noticias.html.twig', array('title' => 'Categoria: '. $categoria->getDcategoria(), 'pagination' => $pagination));
    }
}
