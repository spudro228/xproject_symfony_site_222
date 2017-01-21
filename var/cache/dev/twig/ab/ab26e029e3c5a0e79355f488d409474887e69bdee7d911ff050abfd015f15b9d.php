<?php

/* PostsBundle:comment:edit.html.twig */
class __TwigTemplate_3e17b62064f38e2c2a961edf053cfb200339e6b1c6bb63d891eaacc454e7758a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:comment:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaebadcfc82c3c81cbf3a88ed9f6d7f3c56abd534ed6dc5bdeebd6c978890b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaebadcfc82c3c81cbf3a88ed9f6d7f3c56abd534ed6dc5bdeebd6c978890b0f->enter($__internal_eaebadcfc82c3c81cbf3a88ed9f6d7f3c56abd534ed6dc5bdeebd6c978890b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:edit.html.twig"));

        $__internal_41f8e987e6ccd61b0f11e4f31e93ae935770daae2ec4f3c2410de52b7c45be0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f8e987e6ccd61b0f11e4f31e93ae935770daae2ec4f3c2410de52b7c45be0f->enter($__internal_41f8e987e6ccd61b0f11e4f31e93ae935770daae2ec4f3c2410de52b7c45be0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaebadcfc82c3c81cbf3a88ed9f6d7f3c56abd534ed6dc5bdeebd6c978890b0f->leave($__internal_eaebadcfc82c3c81cbf3a88ed9f6d7f3c56abd534ed6dc5bdeebd6c978890b0f_prof);

        
        $__internal_41f8e987e6ccd61b0f11e4f31e93ae935770daae2ec4f3c2410de52b7c45be0f->leave($__internal_41f8e987e6ccd61b0f11e4f31e93ae935770daae2ec4f3c2410de52b7c45be0f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62e28614e2bf063500be949b573ce07900afaba8c7d594af70a9137385098fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e28614e2bf063500be949b573ce07900afaba8c7d594af70a9137385098fc4->enter($__internal_62e28614e2bf063500be949b573ce07900afaba8c7d594af70a9137385098fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5600185de609750dedf5b4476ad49ad948965e253cb7bfeb0c0882eb5103a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5600185de609750dedf5b4476ad49ad948965e253cb7bfeb0c0882eb5103a78->enter($__internal_c5600185de609750dedf5b4476ad49ad948965e253cb7bfeb0c0882eb5103a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c5600185de609750dedf5b4476ad49ad948965e253cb7bfeb0c0882eb5103a78->leave($__internal_c5600185de609750dedf5b4476ad49ad948965e253cb7bfeb0c0882eb5103a78_prof);

        
        $__internal_62e28614e2bf063500be949b573ce07900afaba8c7d594af70a9137385098fc4->leave($__internal_62e28614e2bf063500be949b573ce07900afaba8c7d594af70a9137385098fc4_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:comment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comment edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "PostsBundle:comment:edit.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/comment/edit.html.twig");
    }
}
