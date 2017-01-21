<?php

/* PostsBundle:comment:new.html.twig */
class __TwigTemplate_f896d1e38f47a08ebc4cf909d986dd9ab0892c0a3218e378745f8ddfd24c2359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:comment:new.html.twig", 1);
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
        $__internal_feaf86e196ac8ba6425cacebb81d1b676b768e6752449a7e395aed78e08611f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feaf86e196ac8ba6425cacebb81d1b676b768e6752449a7e395aed78e08611f8->enter($__internal_feaf86e196ac8ba6425cacebb81d1b676b768e6752449a7e395aed78e08611f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:new.html.twig"));

        $__internal_b999300683d823c645f001466a15e5f224c79191f431de172e2f2a96c91e1aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b999300683d823c645f001466a15e5f224c79191f431de172e2f2a96c91e1aa2->enter($__internal_b999300683d823c645f001466a15e5f224c79191f431de172e2f2a96c91e1aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feaf86e196ac8ba6425cacebb81d1b676b768e6752449a7e395aed78e08611f8->leave($__internal_feaf86e196ac8ba6425cacebb81d1b676b768e6752449a7e395aed78e08611f8_prof);

        
        $__internal_b999300683d823c645f001466a15e5f224c79191f431de172e2f2a96c91e1aa2->leave($__internal_b999300683d823c645f001466a15e5f224c79191f431de172e2f2a96c91e1aa2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8f799866ead139e7c7e78754d127dd6978c01acfea981017072aaa596cca3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f799866ead139e7c7e78754d127dd6978c01acfea981017072aaa596cca3a8->enter($__internal_f8f799866ead139e7c7e78754d127dd6978c01acfea981017072aaa596cca3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c574693d818fb413051b1208ef7e6cdca057be2359232c16e644a5a1c639e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c574693d818fb413051b1208ef7e6cdca057be2359232c16e644a5a1c639e8c->enter($__internal_5c574693d818fb413051b1208ef7e6cdca057be2359232c16e644a5a1c639e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Add comment for post#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "post", array()), "id", array()), "html", null, true);
        echo "</h1>

    ";
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("PostsBundle:comment:form.html.twig", "PostsBundle:comment:new.html.twig", 11)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 12
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5c574693d818fb413051b1208ef7e6cdca057be2359232c16e644a5a1c639e8c->leave($__internal_5c574693d818fb413051b1208ef7e6cdca057be2359232c16e644a5a1c639e8c_prof);

        
        $__internal_f8f799866ead139e7c7e78754d127dd6978c01acfea981017072aaa596cca3a8->leave($__internal_f8f799866ead139e7c7e78754d127dd6978c01acfea981017072aaa596cca3a8_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:comment:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  60 => 12,  58 => 11,  55 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Add comment for post#{{ comment.post.id }}</h1>

    {#{{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}#}

    {% include 'PostsBundle:comment:form.html.twig' with {'form':form} %}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "PostsBundle:comment:new.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\var\\cache\\dev/../../../src/PostsBundle/Resources/views/comment/new.html.twig");
    }
}
