<?php

/* PostsBundle:post:show.html.twig */
class __TwigTemplate_588efb6db846f0ddf5c5fdba05eaccae319d7d07d3e624bdc37a3ccc1c402b3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:post:show.html.twig", 1);
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
        $__internal_fc4c5ca1eeed243da5709143f3ec6e0c884c156a2e248c8ae2ca65c0d9f6f75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4c5ca1eeed243da5709143f3ec6e0c884c156a2e248c8ae2ca65c0d9f6f75d->enter($__internal_fc4c5ca1eeed243da5709143f3ec6e0c884c156a2e248c8ae2ca65c0d9f6f75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:show.html.twig"));

        $__internal_bbd51dcbc2c38ad83a7a27cd759aa8558c9d4a43cd84ed946f0e256709e0c861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd51dcbc2c38ad83a7a27cd759aa8558c9d4a43cd84ed946f0e256709e0c861->enter($__internal_bbd51dcbc2c38ad83a7a27cd759aa8558c9d4a43cd84ed946f0e256709e0c861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:show.html.twig"));

        // line 2
        $context["go"] = $this->loadTemplate(":default:macro.html.twig", "PostsBundle:post:show.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc4c5ca1eeed243da5709143f3ec6e0c884c156a2e248c8ae2ca65c0d9f6f75d->leave($__internal_fc4c5ca1eeed243da5709143f3ec6e0c884c156a2e248c8ae2ca65c0d9f6f75d_prof);

        
        $__internal_bbd51dcbc2c38ad83a7a27cd759aa8558c9d4a43cd84ed946f0e256709e0c861->leave($__internal_bbd51dcbc2c38ad83a7a27cd759aa8558c9d4a43cd84ed946f0e256709e0c861_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a3293eeeb6be6dcfad9c4bcba3c93327b14b342e4a1f805877e54f23ff4d781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3293eeeb6be6dcfad9c4bcba3c93327b14b342e4a1f805877e54f23ff4d781->enter($__internal_6a3293eeeb6be6dcfad9c4bcba3c93327b14b342e4a1f805877e54f23ff4d781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ca4e66fe38993f707031387a0491d10488327770f6199ecb5f4c9503bee1e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca4e66fe38993f707031387a0491d10488327770f6199ecb5f4c9503bee1e3d->enter($__internal_7ca4e66fe38993f707031387a0491d10488327770f6199ecb5f4c9503bee1e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"layout\">
        <h1>Post</h1>


        <div class=\"content\">
            <div class=\"content\"><span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</span>
                <span><s>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</s></span>
                <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "html", null, true);
        echo "</span>
                <span>";
        // line 12
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</span>
                <br/>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "text", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>


    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\" class=\"pure-button pure-button-primary\">Go index</a>
    ";
        // line 25
        echo "

    ";
        // line 27
        echo twig_include($this->env, $context, "@Posts/comment/index.html.twig", array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))));
        echo "

    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PostsBundle:Comment:new", array("post_id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))));
        echo "
";
        
        $__internal_7ca4e66fe38993f707031387a0491d10488327770f6199ecb5f4c9503bee1e3d->leave($__internal_7ca4e66fe38993f707031387a0491d10488327770f6199ecb5f4c9503bee1e3d_prof);

        
        $__internal_6a3293eeeb6be6dcfad9c4bcba3c93327b14b342e4a1f805877e54f23ff4d781->leave($__internal_6a3293eeeb6be6dcfad9c4bcba3c93327b14b342e4a1f805877e54f23ff4d781_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  95 => 27,  91 => 25,  87 => 20,  78 => 14,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  52 => 4,  43 => 3,  33 => 1,  31 => 2,  11 => 1,);
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
{% import ':default:macro.html.twig' as go %}
{% block body %}
    <div class=\"layout\">
        <h1>Post</h1>


        <div class=\"content\">
            <div class=\"content\"><span>{{ post.id }}</span>
                <span><s>{{ post.title }}</s></span>
                <span>{{ post.author }}</span>
                <span>{% if post.createAt %}{{ post.createAt|date('Y-m-d H:i:s') }}{% endif %}</span>
                <br/>
                <p>{{ post.text }}</p>
            </div>
        </div>
    </div>


    <a href=\"{{ path('post_index') }}\" class=\"pure-button pure-button-primary\">Go index</a>
    {#<a href=\"{{ path('post_edit', { 'id': post.id }) }}\" class=\"pure-button pure-button-primary\">Edit</a>
    {{ form(delete_form) }}
    <input class=\"pure-button pure-button-primary\" type=\"submit\" value=\"Delete\">
    {{ form_end(delete_form) }}#}


    {{ include('@Posts/comment/index.html.twig', {'comments':comments} ) }}

    {{ render(controller('PostsBundle:Comment:new',{'post_id':post.id})) }}
{% endblock %}
", "PostsBundle:post:show.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\var\\cache\\dev/../../../src/PostsBundle/Resources/views/post/show.html.twig");
    }
}
