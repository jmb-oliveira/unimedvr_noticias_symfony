<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Categoria;

class CategoriasController extends Controller
{
    /**
     * @Route("/admin/categorias/{page}", defaults={"page" = 1}, name="adm_categorias_grid", requirements={
     *     "page": "\d+"
     * })
     */
    public function listAction($page)
    {
    	$repo = $this->getDoctrine()
    			     ->getRepository('AppBundle:Categoria');

        $itemsPerPage = 5;
    	$paginator = $this->get('knp_paginator');
    	$pagination = $paginator->paginate($repo->getCategorias(), $page, $itemsPerPage);
        $maxPage = ($pagination->getTotalItemCount() > 0) ? ceil($pagination->getTotalItemCount() / $itemsPerPage) : 1;

        if($page > $maxPage){
            throw $this->createNotFoundException();
        }

        return $this->render('admin/categorias_grid.html.twig', array('title' => 'Gerenciar Categorias',
                                                                      'pagination' => $pagination,
                                                                      'total_rows' => $pagination->getTotalItemCount()
                                                                     ));
    }

    /**
     * @Route("/admin/categorias/inserir", name="adm_categorias_insert")
     */
    public function insertAction()
    {
        return $this->render('admin/categorias_insert.html.twig', array('title' => 'Inserir Categoria'));
    }

    /**
     * @Route("/admin/categorias/editar/{id}", name="adm_categorias_edit")
     */
    public function editAction(Categoria $categoria)
    {
        return $this->render('admin/categorias_edit.html.twig', array('title' => $categoria->getDCategoria()));
    }

    /**
     * @Route("/admin/categorias/remover/{id}", defaults={"id" = null}, name="adm_categorias_delete")
     */
    public function deleteAction()
    {
        throw $this->createNotFoundException();
    }
}