<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NoticiasController extends Controller
{
    /**
     * @Route("/", name="noticias_home")
     */
    public function indexAction()
    {
        return $this->render('noticias/index.html.twig', array('title' => 'Notícias'));
    }
}
