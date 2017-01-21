<?php

/* PostsBundle:post:show.html.twig */
class __TwigTemplate_abdd027cd2777b8fb13ee2f3c9f996284b0f3b873aa18ab17e224bc2f3e622e4 extends Twig_Template
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
        $__internal_c119964fb9fbf8373beefbadeabeb7e536817bd2d777acc262bda82db3e47fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c119964fb9fbf8373beefbadeabeb7e536817bd2d777acc262bda82db3e47fc0->enter($__internal_c119964fb9fbf8373beefbadeabeb7e536817bd2d777acc262bda82db3e47fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:show.html.twig"));

        $__internal_68695e55976804e8f6166bb03c29ae8b0f16ea6026f879fe407d9e373516d9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68695e55976804e8f6166bb03c29ae8b0f16ea6026f879fe407d9e373516d9e1->enter($__internal_68695e55976804e8f6166bb03c29ae8b0f16ea6026f879fe407d9e373516d9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:show.html.twig"));

        // line 2
        $context["go"] = $this->loadTemplate(":default:macro.html.twig", "PostsBundle:post:show.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c119964fb9fbf8373beefbadeabeb7e536817bd2d777acc262bda82db3e47fc0->leave($__internal_c119964fb9fbf8373beefbadeabeb7e536817bd2d777acc262bda82db3e47fc0_prof);

        
        $__internal_68695e55976804e8f6166bb03c29ae8b0f16ea6026f879fe407d9e373516d9e1->leave($__internal_68695e55976804e8f6166bb03c29ae8b0f16ea6026f879fe407d9e373516d9e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4879222ba349a31179748ab55986b3403903cf83f5c0781aa83ddc9d130e210c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4879222ba349a31179748ab55986b3403903cf83f5c0781aa83ddc9d130e210c->enter($__internal_4879222ba349a31179748ab55986b3403903cf83f5c0781aa83ddc9d130e210c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b8c0c84d56e7c16b36812eb96dd7fcb9670edafb2a496c2a29d63e737c0d79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8c0c84d56e7c16b36812eb96dd7fcb9670edafb2a496c2a29d63e737c0d79c->enter($__internal_5b8c0c84d56e7c16b36812eb96dd7fcb9670edafb2a496c2a29d63e737c0d79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b8c0c84d56e7c16b36812eb96dd7fcb9670edafb2a496c2a29d63e737c0d79c->leave($__internal_5b8c0c84d56e7c16b36812eb96dd7fcb9670edafb2a496c2a29d63e737c0d79c_prof);

        
        $__internal_4879222ba349a31179748ab55986b3403903cf83f5c0781aa83ddc9d130e210c->leave($__internal_4879222ba349a31179748ab55986b3403903cf83f5c0781aa83ddc9d130e210c_prof);

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
", "PostsBundle:post:show.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/post/show.html.twig");
    }
}
