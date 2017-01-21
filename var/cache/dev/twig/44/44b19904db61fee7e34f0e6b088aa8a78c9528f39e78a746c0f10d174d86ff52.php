<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f901a937b93cec7acff5a0378335795dd55712020674ab2da53e49a6c01544a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_550cea07f530c27ca2a488783963313a61ac26ee7568f1080b6c78d1851d5b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550cea07f530c27ca2a488783963313a61ac26ee7568f1080b6c78d1851d5b80->enter($__internal_550cea07f530c27ca2a488783963313a61ac26ee7568f1080b6c78d1851d5b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3da0abc47a1dbc862d74c8b6439f5264d32dc50c9b872fb0bcf7ce781bef68fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da0abc47a1dbc862d74c8b6439f5264d32dc50c9b872fb0bcf7ce781bef68fb->enter($__internal_3da0abc47a1dbc862d74c8b6439f5264d32dc50c9b872fb0bcf7ce781bef68fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_550cea07f530c27ca2a488783963313a61ac26ee7568f1080b6c78d1851d5b80->leave($__internal_550cea07f530c27ca2a488783963313a61ac26ee7568f1080b6c78d1851d5b80_prof);

        
        $__internal_3da0abc47a1dbc862d74c8b6439f5264d32dc50c9b872fb0bcf7ce781bef68fb->leave($__internal_3da0abc47a1dbc862d74c8b6439f5264d32dc50c9b872fb0bcf7ce781bef68fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7683df70c60bc4d576951a6f7fd271797df734feb61feba72dd141dbfdf6529e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7683df70c60bc4d576951a6f7fd271797df734feb61feba72dd141dbfdf6529e->enter($__internal_7683df70c60bc4d576951a6f7fd271797df734feb61feba72dd141dbfdf6529e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b1c3d2fc470ff5d5a10de7ad1da53e80d2b45bb487c4a2ec4a3ba4eb214dc610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c3d2fc470ff5d5a10de7ad1da53e80d2b45bb487c4a2ec4a3ba4eb214dc610->enter($__internal_b1c3d2fc470ff5d5a10de7ad1da53e80d2b45bb487c4a2ec4a3ba4eb214dc610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b1c3d2fc470ff5d5a10de7ad1da53e80d2b45bb487c4a2ec4a3ba4eb214dc610->leave($__internal_b1c3d2fc470ff5d5a10de7ad1da53e80d2b45bb487c4a2ec4a3ba4eb214dc610_prof);

        
        $__internal_7683df70c60bc4d576951a6f7fd271797df734feb61feba72dd141dbfdf6529e->leave($__internal_7683df70c60bc4d576951a6f7fd271797df734feb61feba72dd141dbfdf6529e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_412bc438419f36ed5396944748e3c70093d6bbf3ab1f9bef241ea6d6fc0005a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412bc438419f36ed5396944748e3c70093d6bbf3ab1f9bef241ea6d6fc0005a5->enter($__internal_412bc438419f36ed5396944748e3c70093d6bbf3ab1f9bef241ea6d6fc0005a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4b98b43bac609283bdf7c3a168f3b052ea5d8b454813e656af7fbdd4b267746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b98b43bac609283bdf7c3a168f3b052ea5d8b454813e656af7fbdd4b267746->enter($__internal_c4b98b43bac609283bdf7c3a168f3b052ea5d8b454813e656af7fbdd4b267746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4b98b43bac609283bdf7c3a168f3b052ea5d8b454813e656af7fbdd4b267746->leave($__internal_c4b98b43bac609283bdf7c3a168f3b052ea5d8b454813e656af7fbdd4b267746_prof);

        
        $__internal_412bc438419f36ed5396944748e3c70093d6bbf3ab1f9bef241ea6d6fc0005a5->leave($__internal_412bc438419f36ed5396944748e3c70093d6bbf3ab1f9bef241ea6d6fc0005a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
