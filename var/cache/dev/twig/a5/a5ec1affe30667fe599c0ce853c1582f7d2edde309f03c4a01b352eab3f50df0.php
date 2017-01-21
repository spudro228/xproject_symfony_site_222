<?php

/* @Posts/post/new.html.twig */
class __TwigTemplate_70a87a415bcd1c7227f2a771209aa974e353710c8a650d3714275622a4f40f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Posts/post/new.html.twig", 1);
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
        $__internal_6325c443ffb56629e88b521d8c54606e6adf4aee1bb7b473963fb34d9d3d3546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6325c443ffb56629e88b521d8c54606e6adf4aee1bb7b473963fb34d9d3d3546->enter($__internal_6325c443ffb56629e88b521d8c54606e6adf4aee1bb7b473963fb34d9d3d3546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/post/new.html.twig"));

        $__internal_4c482d38fd0a14618b58743377a37b9bba026a0fdd13b27807a675d456022fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c482d38fd0a14618b58743377a37b9bba026a0fdd13b27807a675d456022fb8->enter($__internal_4c482d38fd0a14618b58743377a37b9bba026a0fdd13b27807a675d456022fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6325c443ffb56629e88b521d8c54606e6adf4aee1bb7b473963fb34d9d3d3546->leave($__internal_6325c443ffb56629e88b521d8c54606e6adf4aee1bb7b473963fb34d9d3d3546_prof);

        
        $__internal_4c482d38fd0a14618b58743377a37b9bba026a0fdd13b27807a675d456022fb8->leave($__internal_4c482d38fd0a14618b58743377a37b9bba026a0fdd13b27807a675d456022fb8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a3ccfdaf1f1999acfbbf48468cccd89083ba0f83d0f29c2a49f3af9b24a9e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3ccfdaf1f1999acfbbf48468cccd89083ba0f83d0f29c2a49f3af9b24a9e6e->enter($__internal_7a3ccfdaf1f1999acfbbf48468cccd89083ba0f83d0f29c2a49f3af9b24a9e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41687ae7eadb3fee4f848a2d91b37aedf726f9dab86992105174850d44916988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41687ae7eadb3fee4f848a2d91b37aedf726f9dab86992105174850d44916988->enter($__internal_41687ae7eadb3fee4f848a2d91b37aedf726f9dab86992105174850d44916988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_41687ae7eadb3fee4f848a2d91b37aedf726f9dab86992105174850d44916988->leave($__internal_41687ae7eadb3fee4f848a2d91b37aedf726f9dab86992105174850d44916988_prof);

        
        $__internal_7a3ccfdaf1f1999acfbbf48468cccd89083ba0f83d0f29c2a49f3af9b24a9e6e->leave($__internal_7a3ccfdaf1f1999acfbbf48468cccd89083ba0f83d0f29c2a49f3af9b24a9e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Posts/post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Posts/post/new.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle\\Resources\\views\\post\\new.html.twig");
    }
}
