<?php

namespace AdminBundle\Controller;

use PostsBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /** Возвращает список всех постов.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $limit = 5;
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllByPage(1, $limit);
        $postsCount = ceil($posts->count()/$limit);
        return $this->render('AdminBundle:Default:index.html.twig',
            ['posts' => $posts,
            'maxPages'=>$postsCount]);
    }

    /**
     *  Testing Json.
     * @param int $currentPage
     * @return JsonResponse
     */
    public function getJsonTestAction(int $currentPage)
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllByPage($currentPage, 5);
        return new JsonResponse($posts->getQuery()->getArrayResult());

    }
}
