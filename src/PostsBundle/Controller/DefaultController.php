<?php

namespace PostsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PostsBundle:Default:index.html.twig');
    }
}
