<?php

namespace AdminBundle\Controller;

use AdminBundle\AdminBundle;
use PostsBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    use \BuildFormsJSON;

    const LIMIT = 5;
    const CURRENT_PAGE = 1;

    /** Возвращает список всех постов.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $limit = 5;
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllByPage(1, self::LIMIT);
        $postsCount = ceil($posts->count() / $limit);
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', ['id' => 9]))
            ->setMethod('DELETE')
            ->getForm();
        return $this->render(
            'AdminBundle:Default:index.html.twig',
            ['posts' => $posts,
                'maxPages' => $postsCount,
                'form' => $form->createView()]);
    }


    public function getAllPostsAction(int $currentPage)
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllByPage($currentPage, 5);
        $posts = $posts->getQuery()->getArrayResult();
        return new JsonResponse($posts);

        /*return $this->render('AdminBundle:Default:index.html.twig',
            ['post' => $posts->getQuery(),
                'maxPages' => 228,
                'hui' => "HUI"], new JsonResponse());*/


    }

    public function testAction()
    {

        return new JsonResponse(['forms' => $this->createDeleteFormJSON('AdminBundle:test:test.html.twig', 'post_delete')]);
    }


}

