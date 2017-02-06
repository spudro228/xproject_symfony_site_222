<?php

namespace PostsBundle\Controller;

use PostsBundle\Entity\Comment;
use PostsBundle\Entity\Post;
use PostsBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Post controller.
 *
 */
class PostController extends Controller
{
    //todo:: убать нахуй ненужные акшоны и мб еще немного почистить код
    /**
     * Lists all post entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('PostsBundle:Post')->findAll();

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

        echo $token = $this->get('security.token_storage')->getToken()->getUsername();
        return $this->render('PostsBundle:post:index.html.twig', [
            'posts' => $posts,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Creates a new post entity.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //Значение по умолчанию для пустого поля title
            if ($post->getAuthor() === null || $post->getAuthor() === '') {
                $post->setAuthor('antonymous');
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush($post);

            return $this->redirectToRoute('post_show', array('id' => $post->getId()));
        }

        return $this->render('PostsBundle:post:new.html.twig', [
            'form' => $form->createView(),
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
            'comments' => $comments
        ]);
    }

    /**
     * Displays a form to edit an existing post entity.
     *
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
     */
    public function deleteAction(Request $request, Post $post)
    {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush($post);
        }

        return $this->redirectToRoute('post_index');
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
}
