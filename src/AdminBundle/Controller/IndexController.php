<?php

namespace AdminBundle\Controller;

use PostsBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /** Возвращает список всех постов.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllByPage(1, 5);
        return $this->render('AdminBundle:Default:index.html.twig',
            ['posts' => $posts]);
    }
}
