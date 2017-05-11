<?php

namespace PostsBundle\Controller;


use PostsBundle\Entity\Comment;
use PostsBundle\Entity\Post;
use PostsBundle\Entity\Subject;
use PostsBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Post controller.
 *
 */
class PostController extends Controller
{

    /**
     * Lists all post entities.
     * @param int $currentPage
     * @param int $limit
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($currentPage = 1, $limit = 5)
    {
        $postsRepository = $this->getDoctrine()->getRepository(Post::class);
        $subjRepository = $this->getDoctrine()->getRepository(Subject::class);
        $commentsRepository = $this->getDoctrine()->getRepository(Comment::class);

        $posts = $postsRepository->findAllByPage($currentPage, $limit); //$currentPage = sharing


        /**
         * Лол, с getArrayCopy работет быстрее, т.к. впринципе массивы быстрее итераторов.
         * todo:: Если счетчик комментов понадобится хотябы еще один раз, то вынести его в отдельный сервис!!!
         *
         * @var Post $post
         */
        foreach ($posts->getIterator()->getArrayCopy() as $post) {
            $post->setCommentCount(($commentsRepository->getCommentsCount($post))->getSingleScalarResult());

        }

        return $this->render('PostsBundle:post:index.html.twig', [
            'posts' => $posts,
            'maxPages' => $postsRepository->getTotal(),
            'subj' => $subjRepository->findOneBy([])->getSubjName() // get first subj irrespective of id
        ]);
    }

    /**
     * Creates a new post entity.
     * @param Request $request
     * @param $subj
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request, $subj)
    {

        $subject = $this->getSubject($subj);

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set Author
            if (!$this->get('security.token_storage')->getToken()->isAuthenticated()) {
                $post->setAuthor('antonymous');
            } else {
                /** @var string $userName - получаем его из текущей сессии */
                $userName = $this->get('security.token_storage')->getToken()->getUsername();
                $post->setAuthor($userName);
            }

            // Set Subject
            $post->setSubject($subject);

            // Set Image
            /** @var UploadedFile $file */

            if ($post->getImage()) {
                $fileName = $this->get('file_uploader')->upload($post->getImage());
                $post->setImage($fileName);
            }

            // Persist
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            // redirect to show post
            return $this->redirectToRoute('post_show', [
                'id' => $post->getId(),

            ]);
        }
        //todo:: !!! если форма не валидна , то нужно вернуться назад
        return $this->render('PostsBundle:post:new.html.twig', [
            'form' => $form->createView(),
            'subj' => $subject->getSubjName()
        ]);
    }

    /**
     * Finds and displays a post entity.
     * @param Post $post
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Post $post)
    {
        $deleteForm = $this->createDeleteForm($post);

        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository(Comment::class)->getCommentsForPost($post->getId());

        return $this->render('PostsBundle:post:show.html.twig', [
            'post' => $post,
            'delete_form' => $deleteForm->createView(),
            'comments' => $comments->getResult()
        ]);
    }

    /**
     * Displays a form to edit an existing post entity.
     * @param Request $request
     * @param Post $post
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, Post $post)
    {
        $deleteForm = $this->createDeleteForm($post);
        $editForm = $this->createForm('PostsBundle\Form\PostType', $post);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('post_edit', array('id' => $post->getId()));
        }

        return $this->render('PostsBundle:comment:edit.html.twig', array(
            'post' => $post,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a post entity.
     *
     * @param Request $request
     * @param Post $post
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Post $post)
    {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();
        }
        /*todo:: Запилить для одминки удаление постов через JSON*/

        //При удалении возвращаемся на странцу, с которой был отправлен запрос на удаление.
        return $this->redirect($request->headers->get('referer'));
    }


    /**
     * Creates a form to delete a post entity.
     *
     * @param Post $post The post entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Post $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }


    /**
     *  Get Subject obj by subj name.
     * @param $subj
     * @return null|object|Subject
     */

    private function getSubject($subj)
    {
        $result = $this->getDoctrine()->getManager()->getRepository(Subject::class)
            ->findOneBy(['subjName' => $subj]);
        if (!$result) {
            throw $this->createNotFoundException("Не найде тема по заданному имени.{$subj}");
        }
        return $result;

    }
}
