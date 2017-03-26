<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function testAction(Request $request)
    {
        $response = new Response();
        //$response->headers->setCookie(new Cookie('test','Hello, Cookie!!!'));
        $response->headers->setCookie(new Cookie('test', 'Hello, Cookie!!!',0, '/', null, false, false));
        $response->send();
        echo "Test!";
        return new Response();
    }
}
