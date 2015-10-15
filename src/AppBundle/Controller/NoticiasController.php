<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Noticia;

class NoticiasController extends Controller
{
    /**
     * @Route("/{page}/{search}", defaults={"page" = 1, "search" = "todas"}, name="noticias_home", requirements={
     *     "page": "\d+"
     * })
     */
    public function indexAction($page, $search)
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
        $maxPage = ($pagination->getTotalItemCount() > 0) ? ceil($pagination->getTotalItemCount() / $itemsPerPage) : 1;

        if($page > $maxPage){
            throw $this->createNotFoundException();
        }

        return $this->render('noticias/index.html.twig', array('title' => 'Notícias', 'form' => $form->createView(), 'pagination' => $pagination));
    }

    /**
     * @Route("/noticias/detalhes/{id}", name="show_noticia")
     */
    public function showAction(Noticia $noticia)
    {
        return $this->render('noticias/show_noticia.html.twig', array('title' => $noticia->getTitulo(), 'noticia' => $noticia));
    }
}