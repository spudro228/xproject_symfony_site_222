<?php

/* PostsBundle:comment:index.html.twig */
class __TwigTemplate_2056261d5327522c9aa2e6b992f9a1ca73abc619f27b04992b6d79300060180f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:comment:index.html.twig", 1);
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
        $__internal_e2f398fff4c4c829f3d5de7c360cb6a694213c98526655551c1003f6cae90afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f398fff4c4c829f3d5de7c360cb6a694213c98526655551c1003f6cae90afb->enter($__internal_e2f398fff4c4c829f3d5de7c360cb6a694213c98526655551c1003f6cae90afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:index.html.twig"));

        $__internal_54287c0686279cbdd0b32a501a0a436da046880b14c26914edcb390739b6002f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54287c0686279cbdd0b32a501a0a436da046880b14c26914edcb390739b6002f->enter($__internal_54287c0686279cbdd0b32a501a0a436da046880b14c26914edcb390739b6002f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f398fff4c4c829f3d5de7c360cb6a694213c98526655551c1003f6cae90afb->leave($__internal_e2f398fff4c4c829f3d5de7c360cb6a694213c98526655551c1003f6cae90afb_prof);

        
        $__internal_54287c0686279cbdd0b32a501a0a436da046880b14c26914edcb390739b6002f->leave($__internal_54287c0686279cbdd0b32a501a0a436da046880b14c26914edcb390739b6002f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_119ee0df101b46690b4f7bcf6e93fb67a7282a92c954750dc81b597d57722152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119ee0df101b46690b4f7bcf6e93fb67a7282a92c954750dc81b597d57722152->enter($__internal_119ee0df101b46690b4f7bcf6e93fb67a7282a92c954750dc81b597d57722152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe741f83b9401a749171facc77b61ba90abdbc604de820930a17cfa852d2986b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe741f83b9401a749171facc77b61ba90abdbc604de820930a17cfa852d2986b->enter($__internal_fe741f83b9401a749171facc77b61ba90abdbc604de820930a17cfa852d2986b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comments list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Text</th>
                <th>Createat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["comment"], "createAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new");
        echo "\">Create a new comment</a>
            ";
        // line 42
        echo "            ";
        echo twig_include($this->env, $context, Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PostsBundle:Comment:new"));
        echo "
        </li>
    </ul>
";
        
        $__internal_fe741f83b9401a749171facc77b61ba90abdbc604de820930a17cfa852d2986b->leave($__internal_fe741f83b9401a749171facc77b61ba90abdbc604de820930a17cfa852d2986b_prof);

        
        $__internal_119ee0df101b46690b4f7bcf6e93fb67a7282a92c954750dc81b597d57722152->leave($__internal_119ee0df101b46690b4f7bcf6e93fb67a7282a92c954750dc81b597d57722152_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  119 => 40,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Comments list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Text</th>
                <th>Createat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for comment in comments %}
            <tr>
                <td><a href=\"{{ path('comment_show', { 'id': comment.id }) }}\">{{ comment.id }}</a></td>
                <td>{{ comment.title }}</td>
                <td>{{ comment.text }}</td>
                <td>{% if comment.createAt %}{{ comment.createAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('comment_show', { 'id': comment.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('comment_edit', { 'id': comment.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comment_new')}}\">Create a new comment</a>
            {#{{ render(controller('PostsBundle:Comment:new')) }}#}
            {{ include(controller('PostsBundle:Comment:new')) }}
        </li>
    </ul>
{% endblock %}
", "PostsBundle:comment:index.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/comment/index.html.twig");
    }
}
