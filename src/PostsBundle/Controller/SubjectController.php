<?php
/**
 * Created by Dmity Smolyakov.
 * User: spudro228
 * Date: 28.02.2017
 * Time: 20:15
 */

namespace PostsBundle\Controller;


use PostsBundle\Entity\Post;
use PostsBundle\Entity\Subject;
use PostsBundle\Repository\SubjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SubjectController extends Controller
{
    /**
     * path: /{subj}
     * Все посты принадлежащие к определенной теме (subj).
     *
     * Выбираем из URL название темы, если она существует,
     * ищем все посты с этой темой , подщитываем их кол-во.
     * Отобрашаем их и строим пагинацию страниц в зависимости
     * от кол-ва постов.
     *
     * ВАЖНО: Этот контроллер связан с контроллером PostController,
     * так как они используют общий шаблон.
     * Изменяя этот контроллер или шаблон не забывайте изменять
     * другие зависимые от этого шаблона контроллеры.
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $subjRepository = $this->getDoctrine()->getRepository(Subject::class);
        $postRepository = $this->getDoctrine()->getRepository(Post::class);


        /**
         * Проверяем есть ли данная тема,
         * если нет, то возвращам 404.
         * @var Subject $subj - entity
         *
         */
        $subj = $subjRepository->findOneBy(["subjName" => $request->get('subj')]);
        $subjName = $subj ? $subj->getSubjName(): null;

        if (!$subjName) {
            //return new Response("Не найдено!". 404);
            return new Response("<h1>{$request->get('subj')}</h1>", 404);

        }

        /**
         * Проверяем есть ли посты в ней
         *
         * Всегда нужно возвращать имя темы,
         * чтобы работала форма создания постов.
         */

        $posts = $postRepository->findBySubj($subjName);
        \Doctrine\Common\Util\Debug::dump($posts->getQuery()->getArrayResult());

        if (!$posts) {
            return $this->render('PostsBundle:post:index.html.twig',
                [
                    'subj' => $subjName
                ]);

        } else {
            return $this->render('PostsBundle:post:index.html.twig',
                [
                    'posts' => $posts,
                    'maxPages' => $postRepository->getTotalBySubj($subjName),
                    'subj' => $subjName
                ]);
        }
    }

    /**
     * Составлюем список всех тема, которые существуют.
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public
    function getSubjectsAction(Request $request)
    {
        $subjects = $this->getDoctrine()->getRepository(Subject::class)->findAll();

        return $this->render('PostsBundle:subject:index.html.twig',
            [
                'subjects' => $subjects
            ]);
    }

}