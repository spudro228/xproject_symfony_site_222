<?php

/* @Posts/post/show.html.twig */
class __TwigTemplate_6ba6586f4d8cb084d42d441f1694d75da7ec9376e8f4a49f232d822d1288c553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Posts/post/show.html.twig", 1);
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
        $__internal_b7214ff392beeb8dd916bce61aac4ff685b23b38840992e5ea6f4721312fd5ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7214ff392beeb8dd916bce61aac4ff685b23b38840992e5ea6f4721312fd5ee->enter($__internal_b7214ff392beeb8dd916bce61aac4ff685b23b38840992e5ea6f4721312fd5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/post/show.html.twig"));

        $__internal_0ef53721d688f18fdfdb49e54af93e712a6e7ccc467166e081500d27c2f079ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef53721d688f18fdfdb49e54af93e712a6e7ccc467166e081500d27c2f079ec->enter($__internal_0ef53721d688f18fdfdb49e54af93e712a6e7ccc467166e081500d27c2f079ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/post/show.html.twig"));

        // line 2
        $context["go"] = $this->loadTemplate(":default:macro.html.twig", "@Posts/post/show.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7214ff392beeb8dd916bce61aac4ff685b23b38840992e5ea6f4721312fd5ee->leave($__internal_b7214ff392beeb8dd916bce61aac4ff685b23b38840992e5ea6f4721312fd5ee_prof);

        
        $__internal_0ef53721d688f18fdfdb49e54af93e712a6e7ccc467166e081500d27c2f079ec->leave($__internal_0ef53721d688f18fdfdb49e54af93e712a6e7ccc467166e081500d27c2f079ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_91e8271679260d2b360e9ca1d694cff3f52a1c824818469015127d442b499d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e8271679260d2b360e9ca1d694cff3f52a1c824818469015127d442b499d7a->enter($__internal_91e8271679260d2b360e9ca1d694cff3f52a1c824818469015127d442b499d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_420b2d12238ea6c63d81c36ba1fe1a2144e30b17155ddb6cff0d65b5b3103409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420b2d12238ea6c63d81c36ba1fe1a2144e30b17155ddb6cff0d65b5b3103409->enter($__internal_420b2d12238ea6c63d81c36ba1fe1a2144e30b17155ddb6cff0d65b5b3103409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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





    ";
        // line 23
        echo $context["go"]->getgoto_button($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index"), "goHome");
        echo "
    ";
        // line 24
        echo $context["go"]->getgoto_button("", "goEdit");
        echo "



    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\" class=\"pure-button pure-button-primary\">Go index</a>
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"pure-button pure-button-primary\">Edit</a>
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
    <input class=\"pure-button pure-button-primary\" type=\"submit\" value=\"Delete\">
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "


    ";
        // line 35
        echo twig_include($this->env, $context, "@Posts/comment/index.html.twig", array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))));
        echo "

";
        
        $__internal_420b2d12238ea6c63d81c36ba1fe1a2144e30b17155ddb6cff0d65b5b3103409->leave($__internal_420b2d12238ea6c63d81c36ba1fe1a2144e30b17155ddb6cff0d65b5b3103409_prof);

        
        $__internal_91e8271679260d2b360e9ca1d694cff3f52a1c824818469015127d442b499d7a->leave($__internal_91e8271679260d2b360e9ca1d694cff3f52a1c824818469015127d442b499d7a_prof);

    }

    public function getTemplateName()
    {
        return "@Posts/post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  114 => 32,  109 => 30,  105 => 29,  101 => 28,  94 => 24,  90 => 23,  78 => 14,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  52 => 4,  43 => 3,  33 => 1,  31 => 2,  11 => 1,);
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





    {{ go.goto_button( path('post_index'), 'goHome') }}
    {{ go.goto_button(\"\", \"goEdit\") }}



    <a href=\"{{ path('post_index') }}\" class=\"pure-button pure-button-primary\">Go index</a>
    <a href=\"{{ path('post_edit', { 'id': post.id }) }}\" class=\"pure-button pure-button-primary\">Edit</a>
    {{ form(delete_form) }}
    <input class=\"pure-button pure-button-primary\" type=\"submit\" value=\"Delete\">
    {{ form_end(delete_form) }}


    {{ include('@Posts/comment/index.html.twig', {'comments':comments} ) }}

{% endblock %}
", "@Posts/post/show.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle\\Resources\\views\\post\\show.html.twig");
    }
}
