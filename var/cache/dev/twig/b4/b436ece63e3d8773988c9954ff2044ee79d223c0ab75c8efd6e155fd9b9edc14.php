<?php

/* @Posts/comment/index.html.twig */
class __TwigTemplate_f489532caf0d586bfe74b2655a4f2ea71c5d926505691db248d8d4ddb5c40281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Posts/comment/index.html.twig", 1);
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
        $__internal_f89ba59639ba181d083df572dac3c9b9103bdd034db1b5af3b84bd6b12d732c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89ba59639ba181d083df572dac3c9b9103bdd034db1b5af3b84bd6b12d732c2->enter($__internal_f89ba59639ba181d083df572dac3c9b9103bdd034db1b5af3b84bd6b12d732c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/comment/index.html.twig"));

        $__internal_20f714cb80dc7888c8782d4e674237b694bba3aaf779109f07d49f07bea82d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f714cb80dc7888c8782d4e674237b694bba3aaf779109f07d49f07bea82d88->enter($__internal_20f714cb80dc7888c8782d4e674237b694bba3aaf779109f07d49f07bea82d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/comment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89ba59639ba181d083df572dac3c9b9103bdd034db1b5af3b84bd6b12d732c2->leave($__internal_f89ba59639ba181d083df572dac3c9b9103bdd034db1b5af3b84bd6b12d732c2_prof);

        
        $__internal_20f714cb80dc7888c8782d4e674237b694bba3aaf779109f07d49f07bea82d88->leave($__internal_20f714cb80dc7888c8782d4e674237b694bba3aaf779109f07d49f07bea82d88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6e6ce2d03ccc911d520760070844446186b4556aaa6e1f9c722e4bb2574ccbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e6ce2d03ccc911d520760070844446186b4556aaa6e1f9c722e4bb2574ccbc->enter($__internal_a6e6ce2d03ccc911d520760070844446186b4556aaa6e1f9c722e4bb2574ccbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2d003dcc3c32eb9c0bbac3d4d29f59e4532479a3d80a8cce92de9be53b1433c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d003dcc3c32eb9c0bbac3d4d29f59e4532479a3d80a8cce92de9be53b1433c->enter($__internal_e2d003dcc3c32eb9c0bbac3d4d29f59e4532479a3d80a8cce92de9be53b1433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            ";
        // line 41
        echo "        </li>
    </ul>
";
        
        $__internal_e2d003dcc3c32eb9c0bbac3d4d29f59e4532479a3d80a8cce92de9be53b1433c->leave($__internal_e2d003dcc3c32eb9c0bbac3d4d29f59e4532479a3d80a8cce92de9be53b1433c_prof);

        
        $__internal_a6e6ce2d03ccc911d520760070844446186b4556aaa6e1f9c722e4bb2574ccbc->leave($__internal_a6e6ce2d03ccc911d520760070844446186b4556aaa6e1f9c722e4bb2574ccbc_prof);

    }

    public function getTemplateName()
    {
        return "@Posts/comment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
            {#{{ render(controller('PostsBundle:Comment:new')) }}#}
        </li>
    </ul>
{% endblock %}
", "@Posts/comment/index.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle\\Resources\\views\\comment\\index.html.twig");
    }
}
