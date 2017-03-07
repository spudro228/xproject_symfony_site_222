<?php

namespace PostsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request, Response $response)
    {
        $token = $this->get('security.firewall.map')->getFirewallConfig($request)->getContext();
        return $this->render('PostsBundle:Default:index.html.twig', [
            'token' => $token
        ]);
    }
}
