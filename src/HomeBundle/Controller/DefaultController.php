<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public $listArticles;

    public function indexAction()
    {


        /* On récupére l'Entity Manager */
        $em = $this->getDoctrine()->getManager();
        /* Recupération du Répository associé a l'entité Article */
        $userRepository = $em->getRepository('ArticleBundle:Article');
        // Recupération de la liste des articles
        $listArticles = $userRepository->findAll();

        return $this->render('@Home/Default/home.html.twig',array("articles"=>$this->listArticles));
    }


    public function aproposAction(){
        return $this->render('@Home/Default/apropos.html.twig');
    }
}
