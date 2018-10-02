<?php

namespace LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Login/Default/index.html.twig');
    }
}
