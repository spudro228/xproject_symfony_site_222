<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_460b6c8494c5e7587f834c77a475805e016c2e26e9ba6d611ea3bd7608cd4da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59eb303881f0231d89ebac0d0e57242951cfd30416d8127b307b2496797b0bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59eb303881f0231d89ebac0d0e57242951cfd30416d8127b307b2496797b0bdb->enter($__internal_59eb303881f0231d89ebac0d0e57242951cfd30416d8127b307b2496797b0bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_833d398ec19974186fdbe9da9f76d154c03f055c7bd7ee8ea9a84e9a17d7a6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833d398ec19974186fdbe9da9f76d154c03f055c7bd7ee8ea9a84e9a17d7a6bd->enter($__internal_833d398ec19974186fdbe9da9f76d154c03f055c7bd7ee8ea9a84e9a17d7a6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_59eb303881f0231d89ebac0d0e57242951cfd30416d8127b307b2496797b0bdb->leave($__internal_59eb303881f0231d89ebac0d0e57242951cfd30416d8127b307b2496797b0bdb_prof);

        
        $__internal_833d398ec19974186fdbe9da9f76d154c03f055c7bd7ee8ea9a84e9a17d7a6bd->leave($__internal_833d398ec19974186fdbe9da9f76d154c03f055c7bd7ee8ea9a84e9a17d7a6bd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_50a5784627ed96f6293dc3dc3be96fc45376012f9269278047fc0beed7dcd17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a5784627ed96f6293dc3dc3be96fc45376012f9269278047fc0beed7dcd17c->enter($__internal_50a5784627ed96f6293dc3dc3be96fc45376012f9269278047fc0beed7dcd17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_824af17c4fffd991b5aa9b47d5ebc17a51d967737ffe92a3bc09cb3369ce700d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824af17c4fffd991b5aa9b47d5ebc17a51d967737ffe92a3bc09cb3369ce700d->enter($__internal_824af17c4fffd991b5aa9b47d5ebc17a51d967737ffe92a3bc09cb3369ce700d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_824af17c4fffd991b5aa9b47d5ebc17a51d967737ffe92a3bc09cb3369ce700d->leave($__internal_824af17c4fffd991b5aa9b47d5ebc17a51d967737ffe92a3bc09cb3369ce700d_prof);

        
        $__internal_50a5784627ed96f6293dc3dc3be96fc45376012f9269278047fc0beed7dcd17c->leave($__internal_50a5784627ed96f6293dc3dc3be96fc45376012f9269278047fc0beed7dcd17c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
