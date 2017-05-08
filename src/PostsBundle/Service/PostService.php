<?php

namespace PostsBundle\Service;

/**
 * Created by PhpStorm.
 * User: hui
 * Date: 03.05.2017
 * Time: 4:50
 */
use PostsBundle\Entity\Post;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Routing\Router;
use Symfony\Component\Form\Extension\Core\Type\FormType;


class PostService
{
    protected $formFactory;
    protected $router;

    public function __construct(FormFactoryInterface $formFactory, Router $router)
    {
        $this->formFactory = $formFactory;
        $this->router = $router;

    }


    /**
     *  Содзает форму удаления для каждого обьекта Post.
     *
     * @param Post $post
     * @return \Symfony\Component\Form\FormView
     */
    public function createDeleteForm(Post $post)
    {
        return $this->formFactory->createBuilder()
            ->setAction($this->router->generate('post_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')->getForm()->createView();
    }
}