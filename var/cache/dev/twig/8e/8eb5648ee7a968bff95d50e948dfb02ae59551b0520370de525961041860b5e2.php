<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7e0b65613a5ab8b03e1b4e0100472c0dd7fec472b959cb5683f3ee8d680389c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7f7b49c01a5a892609d12cdfd26ddd4182ca1314ed18ebbafe062c409ae93c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f7b49c01a5a892609d12cdfd26ddd4182ca1314ed18ebbafe062c409ae93c8->enter($__internal_f7f7b49c01a5a892609d12cdfd26ddd4182ca1314ed18ebbafe062c409ae93c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_69efb35253985c6e77568c4dee2115b12ca5efe6837343f217197ab3ec693e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69efb35253985c6e77568c4dee2115b12ca5efe6837343f217197ab3ec693e31->enter($__internal_69efb35253985c6e77568c4dee2115b12ca5efe6837343f217197ab3ec693e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7f7b49c01a5a892609d12cdfd26ddd4182ca1314ed18ebbafe062c409ae93c8->leave($__internal_f7f7b49c01a5a892609d12cdfd26ddd4182ca1314ed18ebbafe062c409ae93c8_prof);

        
        $__internal_69efb35253985c6e77568c4dee2115b12ca5efe6837343f217197ab3ec693e31->leave($__internal_69efb35253985c6e77568c4dee2115b12ca5efe6837343f217197ab3ec693e31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_307a1d7514fb88ca48f7fc1f8bb79dec478135b1987fb813a291b3d7f28161a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307a1d7514fb88ca48f7fc1f8bb79dec478135b1987fb813a291b3d7f28161a8->enter($__internal_307a1d7514fb88ca48f7fc1f8bb79dec478135b1987fb813a291b3d7f28161a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_425c79d94e4a2e7d3afd953fff1a0718cc41e39b04e027ba98d4fa89f0c5138b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425c79d94e4a2e7d3afd953fff1a0718cc41e39b04e027ba98d4fa89f0c5138b->enter($__internal_425c79d94e4a2e7d3afd953fff1a0718cc41e39b04e027ba98d4fa89f0c5138b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_425c79d94e4a2e7d3afd953fff1a0718cc41e39b04e027ba98d4fa89f0c5138b->leave($__internal_425c79d94e4a2e7d3afd953fff1a0718cc41e39b04e027ba98d4fa89f0c5138b_prof);

        
        $__internal_307a1d7514fb88ca48f7fc1f8bb79dec478135b1987fb813a291b3d7f28161a8->leave($__internal_307a1d7514fb88ca48f7fc1f8bb79dec478135b1987fb813a291b3d7f28161a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9069f9e698ee0e1cc28a2149f4378f303840575ef7659caacab58b5c14faf60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9069f9e698ee0e1cc28a2149f4378f303840575ef7659caacab58b5c14faf60->enter($__internal_c9069f9e698ee0e1cc28a2149f4378f303840575ef7659caacab58b5c14faf60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd274f3eadd2dba5848ced56b78199c62bdc5edd0848c77f21bd198c34ca3af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd274f3eadd2dba5848ced56b78199c62bdc5edd0848c77f21bd198c34ca3af8->enter($__internal_dd274f3eadd2dba5848ced56b78199c62bdc5edd0848c77f21bd198c34ca3af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd274f3eadd2dba5848ced56b78199c62bdc5edd0848c77f21bd198c34ca3af8->leave($__internal_dd274f3eadd2dba5848ced56b78199c62bdc5edd0848c77f21bd198c34ca3af8_prof);

        
        $__internal_c9069f9e698ee0e1cc28a2149f4378f303840575ef7659caacab58b5c14faf60->leave($__internal_c9069f9e698ee0e1cc28a2149f4378f303840575ef7659caacab58b5c14faf60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d10b09267a6bfdde8288fef04bc0fcc98e68136dda60a1f00f56b37b4b7605f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d10b09267a6bfdde8288fef04bc0fcc98e68136dda60a1f00f56b37b4b7605f->enter($__internal_4d10b09267a6bfdde8288fef04bc0fcc98e68136dda60a1f00f56b37b4b7605f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd58dce12bcd543cf1643d308f4c62ef705ed925f7adabe22fc402e0a627d1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd58dce12bcd543cf1643d308f4c62ef705ed925f7adabe22fc402e0a627d1f5->enter($__internal_cd58dce12bcd543cf1643d308f4c62ef705ed925f7adabe22fc402e0a627d1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd58dce12bcd543cf1643d308f4c62ef705ed925f7adabe22fc402e0a627d1f5->leave($__internal_cd58dce12bcd543cf1643d308f4c62ef705ed925f7adabe22fc402e0a627d1f5_prof);

        
        $__internal_4d10b09267a6bfdde8288fef04bc0fcc98e68136dda60a1f00f56b37b4b7605f->leave($__internal_4d10b09267a6bfdde8288fef04bc0fcc98e68136dda60a1f00f56b37b4b7605f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
