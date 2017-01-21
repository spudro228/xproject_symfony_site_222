<?php

/* PostsBundle:post:index.html.twig */
class __TwigTemplate_e1e81598a1a00baba65b44c906d0649908d2af69367e9d955d9b97551f540beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:post:index.html.twig", 1);
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
        $__internal_82fd1a7119bf4e7ac9a7e3b807d5f7b5155d17981e785f88e48c9ea5f420f04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fd1a7119bf4e7ac9a7e3b807d5f7b5155d17981e785f88e48c9ea5f420f04d->enter($__internal_82fd1a7119bf4e7ac9a7e3b807d5f7b5155d17981e785f88e48c9ea5f420f04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:index.html.twig"));

        $__internal_8312d1886e2d717d47bce59d8bcc09701bd199d7f73138f4aa7666cbb67fc83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8312d1886e2d717d47bce59d8bcc09701bd199d7f73138f4aa7666cbb67fc83e->enter($__internal_8312d1886e2d717d47bce59d8bcc09701bd199d7f73138f4aa7666cbb67fc83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82fd1a7119bf4e7ac9a7e3b807d5f7b5155d17981e785f88e48c9ea5f420f04d->leave($__internal_82fd1a7119bf4e7ac9a7e3b807d5f7b5155d17981e785f88e48c9ea5f420f04d_prof);

        
        $__internal_8312d1886e2d717d47bce59d8bcc09701bd199d7f73138f4aa7666cbb67fc83e->leave($__internal_8312d1886e2d717d47bce59d8bcc09701bd199d7f73138f4aa7666cbb67fc83e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30df3265d116917f5d379c061a6f199aef25dd2549b717afa0b8e14339f72ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30df3265d116917f5d379c061a6f199aef25dd2549b717afa0b8e14339f72ed->enter($__internal_c30df3265d116917f5d379c061a6f199aef25dd2549b717afa0b8e14339f72ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_339cd6e26532b7b8fbbb92923023cfa0b9c246565c23877ca7e02aca059c5eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_339cd6e26532b7b8fbbb92923023cfa0b9c246565c23877ca7e02aca059c5eba->enter($__internal_339cd6e26532b7b8fbbb92923023cfa0b9c246565c23877ca7e02aca059c5eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Autor</th>
            <th>Title</th>
            <th>Text</th>
        </tr>
        </thead>
        ";
        // line 37
        echo "    </table>
    <ul class=\"posts\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 40
            echo "            <li>
                <div class=\"post\">
                    <span><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></span>
                    <span><s>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "author", array()), "html", null, true);
            echo "</s></span>
                    <span >";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</span>
                    
                    <p>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "text", array()), "html", null, true);
            echo "</p>

                    ";
            // line 49
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"pure-button pure-button-primary\">show</a>

                </div>
            </li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </ul>

    <ul>
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_339cd6e26532b7b8fbbb92923023cfa0b9c246565c23877ca7e02aca059c5eba->leave($__internal_339cd6e26532b7b8fbbb92923023cfa0b9c246565c23877ca7e02aca059c5eba_prof);

        
        $__internal_c30df3265d116917f5d379c061a6f199aef25dd2549b717afa0b8e14339f72ed->leave($__internal_c30df3265d116917f5d379c061a6f199aef25dd2549b717afa0b8e14339f72ed_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 59,  107 => 55,  94 => 49,  89 => 46,  84 => 44,  80 => 43,  74 => 42,  70 => 40,  66 => 39,  62 => 37,  49 => 5,  40 => 4,  11 => 1,);
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
    <h1>Posts list</h1>

    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Autor</th>
            <th>Title</th>
            <th>Text</th>
        </tr>
        </thead>
        {#<tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.autor }}</td>
                <td>{{ post.title }}</td>
                <td>{{ post.text }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('post_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>

        {% endfor %}
        </tbody>#}
    </table>
    <ul class=\"posts\">
        {% for post in posts %}
            <li>
                <div class=\"post\">
                    <span><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></span>
                    <span><s>{{ post.author }}</s></span>
                    <span >{{ post.title }}</span>
                    
                    <p>{{ post.text }}</p>

                    {#<a href=\"{{ path('post_edit', { 'id': post.id }) }}\" class=\"pure-button pure-button-primary\">edit</a>#}
                    <a href=\"{{ path('post_show', { 'id': post.id }) }}\" class=\"pure-button pure-button-primary\">show</a>

                </div>
            </li>

        {% endfor %}
    </ul>

    <ul>
        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", "PostsBundle:post:index.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\var\\cache\\dev/../../../src/PostsBundle/Resources/views/post/index.html.twig");
    }
}
