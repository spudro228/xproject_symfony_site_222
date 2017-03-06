<?php
/**
 * Created by Dmity Smolyakov.
 * User: spudro228
 * Date: 28.02.2017
 * Time: 20:15
 */

namespace PostsBundle\Controller;


use PostsBundle\Entity\Post;
use Proxies\__CG__\PostsBundle\Entity\Subject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SubjectController extends Controller
{
    /**
     * path: /{subj}
     * Все посты принадлежащие к определенной теме (subj).
     *
     * Выбираем из URL название темы, если она существует,
     * ищем все посты с этой темой , подщитываем их кол-во.
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);

        $posts = $repository->findBySubj($request->get('subj'));

        return $this->render('PostsBundle:post:index.html.twig',
            [
                'posts' => $posts,
                'maxPages' => $repository->getTotalBySubj($request->get('subj'))
            ]);
    }

    /**
     * Составлюем список всех тема, которые существуют.
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getSubjectsAction(Request $request)
    {
        $subjects = $this->getDoctrine()->getRepository(Subject::class)->findAll();

        return $this->render('PostsBundle:subject:index.html.twig',
            [
                'subjects' => $subjects
            ]);
    }

}