<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NoticiasController extends Controller
{
    /**
     * @Route("/{search}/{page}", defaults={"search" = "todas", "page" = 1}, name="noticias_home")
     */
    public function indexAction($search, $page)
    {
        $request = Request::createFromGlobals();

        $form = $this->createFormBuilder()
                    ->add('search', 'text', array('required' => false, 'attr' => array('class' => "form-control", 'placeholder' => "Digite o que você procura e tecle enter")))
                    ->getForm();
        
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $data = $form->getData();

            return ($data['search'] == '') ? $this->redirect($this->generateUrl('noticias_home')) : $this->redirect($this->generateUrl('noticias_home', array('search' => $data['search'])));
        }

    	$repo = $this->getDoctrine()
    			   ->getRepository('AppBundle:Noticia');

        $itemsPerPage = 5;
    	$paginator = $this->get('knp_paginator');
    	$pagination = $paginator->paginate($repo->getNoticias($search), $page, $itemsPerPage);
        $maxPage = ceil($pagination->getTotalItemCount() / $itemsPerPage);

        if($page > $maxPage){
            throw $this->createNotFoundException();
        }

        return $this->render('noticias/index.html.twig', array('title' => 'Notícias', 'form' => $form->createView(), 'pagination' => $pagination));
    }

    /**
     * @Route("/noticias/detalhes/{id}", defaults={"id" = null}, name="show_noticia")
     */
    public function showAction($id)
    {
        $noticia = $this->getDoctrine()
                        ->getRepository('AppBundle:Noticia')
                        ->find($id);

        if(!$noticia){
            throw $this->createNotFoundException();
        }

        return $this->render('noticias/show_noticia.html.twig', array('title' => $noticia->getTitulo(), 'noticia' => $noticia));
    }
}