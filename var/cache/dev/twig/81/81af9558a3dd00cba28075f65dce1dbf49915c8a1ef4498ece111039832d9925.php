<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9aedbbe1155c0653a008e728b9c755797ec1f945f9034ddcfcb13ba2861c7136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_decaafb68e3b649a7945217ca3afd2352a964a415a04c4803d4503488dae33d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_decaafb68e3b649a7945217ca3afd2352a964a415a04c4803d4503488dae33d3->enter($__internal_decaafb68e3b649a7945217ca3afd2352a964a415a04c4803d4503488dae33d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_b315186ea30fd4230069a3d7b8f9a68d5d318d4df00a6c837c36ca95381a1780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b315186ea30fd4230069a3d7b8f9a68d5d318d4df00a6c837c36ca95381a1780->enter($__internal_b315186ea30fd4230069a3d7b8f9a68d5d318d4df00a6c837c36ca95381a1780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_decaafb68e3b649a7945217ca3afd2352a964a415a04c4803d4503488dae33d3->leave($__internal_decaafb68e3b649a7945217ca3afd2352a964a415a04c4803d4503488dae33d3_prof);

        
        $__internal_b315186ea30fd4230069a3d7b8f9a68d5d318d4df00a6c837c36ca95381a1780->leave($__internal_b315186ea30fd4230069a3d7b8f9a68d5d318d4df00a6c837c36ca95381a1780_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b3b19bb746d78a28d16e36684a5fdb6501dc014eef0d3cf56b72d9d2378a613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3b19bb746d78a28d16e36684a5fdb6501dc014eef0d3cf56b72d9d2378a613->enter($__internal_6b3b19bb746d78a28d16e36684a5fdb6501dc014eef0d3cf56b72d9d2378a613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd8b55b4d3cf758903f831527440d71a8bf3b4733e24942f02c875c41d808301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8b55b4d3cf758903f831527440d71a8bf3b4733e24942f02c875c41d808301->enter($__internal_bd8b55b4d3cf758903f831527440d71a8bf3b4733e24942f02c875c41d808301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bd8b55b4d3cf758903f831527440d71a8bf3b4733e24942f02c875c41d808301->leave($__internal_bd8b55b4d3cf758903f831527440d71a8bf3b4733e24942f02c875c41d808301_prof);

        
        $__internal_6b3b19bb746d78a28d16e36684a5fdb6501dc014eef0d3cf56b72d9d2378a613->leave($__internal_6b3b19bb746d78a28d16e36684a5fdb6501dc014eef0d3cf56b72d9d2378a613_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2126a36300281d1ea183593399fb55796bbf653e8a35cd9bf4b5a0098cb6b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2126a36300281d1ea183593399fb55796bbf653e8a35cd9bf4b5a0098cb6b43->enter($__internal_f2126a36300281d1ea183593399fb55796bbf653e8a35cd9bf4b5a0098cb6b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93f8bef25dc78a0d53bddc58ad83886a57e221cbef24e695471d69b165156376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f8bef25dc78a0d53bddc58ad83886a57e221cbef24e695471d69b165156376->enter($__internal_93f8bef25dc78a0d53bddc58ad83886a57e221cbef24e695471d69b165156376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_93f8bef25dc78a0d53bddc58ad83886a57e221cbef24e695471d69b165156376->leave($__internal_93f8bef25dc78a0d53bddc58ad83886a57e221cbef24e695471d69b165156376_prof);

        
        $__internal_f2126a36300281d1ea183593399fb55796bbf653e8a35cd9bf4b5a0098cb6b43->leave($__internal_f2126a36300281d1ea183593399fb55796bbf653e8a35cd9bf4b5a0098cb6b43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
