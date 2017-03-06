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
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Post::class);

        $posts = $repository->findBySubj($request->get('subj'));

        //todo:: неплохо было бы maxPage убрать куда нибудб, чтобы не тоскать везде
        return $this->render('PostsBundle:post:index.html.twig',
            [
                'posts' => $posts,
                'maxPages' => $repository->getTotalBySubj($request->get('subj'))
            ]);
    }

    public function getSubjectsAction(Request $request)
    {
        $subjects = $this->getDoctrine()->getRepository(Subject::class)->findAll();

        return $this->render('PostsBundle:subject:index.html.twig',
            [
                'subjects' => $subjects
            ]);
    }

}