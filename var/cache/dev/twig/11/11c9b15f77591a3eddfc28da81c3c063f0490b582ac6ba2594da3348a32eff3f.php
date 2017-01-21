<?php

/* PostsBundle:comment:show.html.twig */
class __TwigTemplate_f63083e9ba56b544d46730f0dccd47774cf8c390a8adbab545f17545798a7455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:comment:show.html.twig", 1);
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
        $__internal_2e27cca0879a77e462c9b58de35f06e042a111ed731ad4bd222e99e8ac0b6268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e27cca0879a77e462c9b58de35f06e042a111ed731ad4bd222e99e8ac0b6268->enter($__internal_2e27cca0879a77e462c9b58de35f06e042a111ed731ad4bd222e99e8ac0b6268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:show.html.twig"));

        $__internal_2b843799e6b29445e9e4868516aa4f9243452b4c05d494f10690d1921c89472c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b843799e6b29445e9e4868516aa4f9243452b4c05d494f10690d1921c89472c->enter($__internal_2b843799e6b29445e9e4868516aa4f9243452b4c05d494f10690d1921c89472c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e27cca0879a77e462c9b58de35f06e042a111ed731ad4bd222e99e8ac0b6268->leave($__internal_2e27cca0879a77e462c9b58de35f06e042a111ed731ad4bd222e99e8ac0b6268_prof);

        
        $__internal_2b843799e6b29445e9e4868516aa4f9243452b4c05d494f10690d1921c89472c->leave($__internal_2b843799e6b29445e9e4868516aa4f9243452b4c05d494f10690d1921c89472c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee1625fc00fde5a0d878ba3cf65fae18f0490c744d67a08fd8f3ae4c27e9fcb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1625fc00fde5a0d878ba3cf65fae18f0490c744d67a08fd8f3ae4c27e9fcb4->enter($__internal_ee1625fc00fde5a0d878ba3cf65fae18f0490c744d67a08fd8f3ae4c27e9fcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d04a551e5671c51af12ac793cf94136674e4ac3123bab4ff92352266bc41f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d04a551e5671c51af12ac793cf94136674e4ac3123bab4ff92352266bc41f44->enter($__internal_9d04a551e5671c51af12ac793cf94136674e4ac3123bab4ff92352266bc41f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d04a551e5671c51af12ac793cf94136674e4ac3123bab4ff92352266bc41f44->leave($__internal_9d04a551e5671c51af12ac793cf94136674e4ac3123bab4ff92352266bc41f44_prof);

        
        $__internal_ee1625fc00fde5a0d878ba3cf65fae18f0490c744d67a08fd8f3ae4c27e9fcb4->leave($__internal_ee1625fc00fde5a0d878ba3cf65fae18f0490c744d67a08fd8f3ae4c27e9fcb4_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:comment:show.html.twig";
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
", "PostsBundle:comment:show.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/comment/show.html.twig");
    }
}
