<?php

namespace AdminBundle\Controller;

use PostsBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{


    const LIMIT = 5;
    const CURRENT_PAGE = 1;

    /**
     * Рендерит стартовую страницу.
     *
     * Возвращает список всех постов с формами для их удаления
     * и количество всех постов для пагинации.
     * можно убрать только нужно перенести подщет количество постов
     *
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $limit = 5;
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllByPage(1, self::LIMIT);
        $postsCount = ceil($posts->count() / $limit);
        return $this->render(
            'AdminBundle:Default:index.html.twig',
            [//'posts' => $posts,
                'maxPages' => $postsCount,
            ]);
    }


    public function getAllPostsAction($currentPage)
    {

        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllByPage($currentPage, 5);

        $forms = array_map(function ($n) {
            return $this->get('posts.controller')->createDeleteForm($n);
        }, $posts->getIterator()->getArrayCopy());

        $response = $this->get('templating')->render('@Admin/post/posts.html.twig',
            [
                'posts' => $posts,
                'forms' => $forms
            ]);


        return new JsonResponse($response);


    }

}

