<?php

/* @Posts/comment/show.html.twig */
class __TwigTemplate_1ffc5cef8db13f98729f44e0a29c9745d9156560f65c1823f26d044658aadf4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Posts/comment/show.html.twig", 1);
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
        $__internal_0f0402298bc0a5b5c635dd39effe49f6184e1737b8dea7dab03984e4495784d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0402298bc0a5b5c635dd39effe49f6184e1737b8dea7dab03984e4495784d0->enter($__internal_0f0402298bc0a5b5c635dd39effe49f6184e1737b8dea7dab03984e4495784d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/comment/show.html.twig"));

        $__internal_9f7ed471ea32244a3a6e70c8beeefaf175d3135228478337a4fccadebd3b445e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7ed471ea32244a3a6e70c8beeefaf175d3135228478337a4fccadebd3b445e->enter($__internal_9f7ed471ea32244a3a6e70c8beeefaf175d3135228478337a4fccadebd3b445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/comment/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f0402298bc0a5b5c635dd39effe49f6184e1737b8dea7dab03984e4495784d0->leave($__internal_0f0402298bc0a5b5c635dd39effe49f6184e1737b8dea7dab03984e4495784d0_prof);

        
        $__internal_9f7ed471ea32244a3a6e70c8beeefaf175d3135228478337a4fccadebd3b445e->leave($__internal_9f7ed471ea32244a3a6e70c8beeefaf175d3135228478337a4fccadebd3b445e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d5c88fc13a751686715ce483d9132b0e00eb1ce3f76e20a21be0dcb747fe31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5c88fc13a751686715ce483d9132b0e00eb1ce3f76e20a21be0dcb747fe31f->enter($__internal_2d5c88fc13a751686715ce483d9132b0e00eb1ce3f76e20a21be0dcb747fe31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a44a97f0f9341825899afc3ca9f1f83665dbcb9a5fc307736dc56d88a3c13cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44a97f0f9341825899afc3ca9f1f83665dbcb9a5fc307736dc56d88a3c13cbc->enter($__internal_a44a97f0f9341825899afc3ca9f1f83665dbcb9a5fc307736dc56d88a3c13cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "text", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createat</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_edit", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a44a97f0f9341825899afc3ca9f1f83665dbcb9a5fc307736dc56d88a3c13cbc->leave($__internal_a44a97f0f9341825899afc3ca9f1f83665dbcb9a5fc307736dc56d88a3c13cbc_prof);

        
        $__internal_2d5c88fc13a751686715ce483d9132b0e00eb1ce3f76e20a21be0dcb747fe31f->leave($__internal_2d5c88fc13a751686715ce483d9132b0e00eb1ce3f76e20a21be0dcb747fe31f_prof);

    }

    public function getTemplateName()
    {
        return "@Posts/comment/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  102 => 35,  96 => 32,  90 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ comment.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ comment.title }}</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>{{ comment.text }}</td>
            </tr>
            <tr>
                <th>Createat</th>
                <td>{% if comment.createAt %}{{ comment.createAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('comment_edit', { 'id': comment.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Posts/comment/show.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle\\Resources\\views\\comment\\show.html.twig");
    }
}
