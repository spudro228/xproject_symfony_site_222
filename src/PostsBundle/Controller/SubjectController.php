<?php
/**
 * Created by Dmity Smolyakov.
 * User: spudro228
 * Date: 28.02.2017
 * Time: 20:15
 */

namespace PostsBundle\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SubjectController extends Controller
{
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('PostsBundle:Subject');

        $test = $repository->findBySubj();//$request->get('subj')

        //return $this->render('@Posts/subject/index.html.twig',['body'=>$request->get('subj')]);
        return $this->render('PostsBundle:post:index.html.twig', ['posts' => $test]);
    }

}