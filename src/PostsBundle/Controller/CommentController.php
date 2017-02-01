<?php

namespace PostsBundle\Controller;

use PostsBundle\Entity\Comment;
use PostsBundle\Entity\Post;
use PostsBundle\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Comment controller.
 *
 */
class CommentController extends Controller
{
    /**
     * Отображение формы комментария
     *
     */
    public function indexAction($post_id)
    {
        $post = $this->getPost($post_id);
        $comment = new Comment();
        $comment->setPost($post);
        $form = $this->createForm(CommentType::class, $comment);
        return $this->render('@Posts/comment/form.html.twig', [
            'comment' => $comment,
            'form' => $form->createView()
        ]);
    }

    /**
     * Creates a new comment entity.
     * @param Request $request
     * @param $post_id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request, $post_id)
    {
        //todo:: доделать
        $post = $this->getPost($post_id);

        $comment = new Comment();
        $comment->setPost($post);
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        $userName = $token = $this->get('security.token_storage')->getToken()->getUsername();
        $token = $this->get('security.token_storage')->getToken()->getUsername();
        //echo $token;


        if ($form->isSubmitted() && $form->isValid()) {
            /*
             * Дополнительная проверка на анонимаса.
             * Имхо, избыточна, но пруфов нету.
             * $comment->getAuthor() === null || $comment->getAuthor() === ''
             */
            if ($this->isGranted('IS_AUTHENTICATED_ANONYMOUSLY')) {
                $comment->setAuthor('anonymous');
            } else {
                $comment->setAuthor($userName);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush($comment);
            return $this->redirectToRoute('post_show', [
                'id' => $comment->getPost()->getId()
            ]);
            //return $this->get
        }

        return $this->render('PostsBundle:comment:new.html.twig', array(
            'comment' => $comment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a comment entity.
     *
     */
    public function showAction(Comment $comment)
    {

        $deleteForm = $this->createDeleteForm($comment);

        return $this->render('PostsBundle:comment:show.html.twig', array(
            'comment' => $comment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing comment entity.
     *
     */
    public function editAction(Request $request, Comment $comment)
    {
        $deleteForm = $this->createDeleteForm($comment);
        $editForm = $this->createForm('PostsBundle\Form\CommentType', $comment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comment_edit', array('id' => $comment->getId()));
        }

        return $this->render('PostsBundle:comment:edit.html.twig', array(
            'comment' => $comment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a comment entity.
     * @param Request $request
     * @param Comment $comment
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Comment $comment)
    {
        $form = $this->createDeleteForm($comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($comment);
            $em->flush($comment);
        }

        return $this->redirectToRoute('comment_index');
    }

    /**
     * Creates a form to delete a comment entity.
     *
     * @param Comment $comment The comment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Comment $comment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comment_delete', array('id' => $comment->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    private function getPost($post_id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository(Post::class)->find($post_id);
        if (!$post) {
            throw $this->createNotFoundException("не найдет Post по заданному ID");
        }
        return $post;
    }
}
