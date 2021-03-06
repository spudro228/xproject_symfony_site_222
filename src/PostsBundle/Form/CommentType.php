<?php

namespace PostsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, ['required' => false]);
        $builder->add('author', TextType::class, ['required' => false]);
        $builder->add('text', TextAreaType::class);
        $builder->add('image', FileType::class, ['required' => false]);

        /*->add('post'); контекст поста к которому будет прекреплён коммент
            например по айди или заголовку*/

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PostsBundle\Entity\Comment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'postsbundle_comment';
    }


}
