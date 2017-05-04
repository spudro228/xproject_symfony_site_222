<?php

namespace AdminBundle\Controller;

use function PHPSTORM_META\map;
use PostsBundle\Controller\PostController;

use PostsBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    //TODO: 04.05.17 Добавить коментарии и почистить код

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


    public function getAllPostsAction($currentPage)
    {

        $posts = $this->getDoctrine()->getRepository(Post::class)->findAllByPage($currentPage, 5);
        $argv = $posts->getIterator()->current();

        $forms = array_map(function ($n) {
            return $this->get('posts.controller')->createDeleteForm($n);
        }, $posts->getIterator()->getArrayCopy());

        //var_dump($forms);
        $response = $this->get('templating')->render('@Admin/test/posts.html.twig',
            [
                'posts' => $posts,
                'forms' => $forms
            ]);


        return new Response($response);


    }

    function iterator_map($iterator, callable $callback)
    {
        foreach ($iterator as $current) {
            $callback($current);
        }
    }

    public
    function testAction()
    {

        return new JsonResponse(['forms' => $this->createDeleteFormJSON('AdminBundle:test:test.html.twig', 'post_delete')]);
    }


}

