<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2d5919966966d132b0dff806a1cb4bc45bf6e3a5111028a350a0810ba9801291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3f32f4115e0fa8a6b1d0edc179e7312865f3f224c9e2c14b59b284eb1d59bb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f32f4115e0fa8a6b1d0edc179e7312865f3f224c9e2c14b59b284eb1d59bb05->enter($__internal_3f32f4115e0fa8a6b1d0edc179e7312865f3f224c9e2c14b59b284eb1d59bb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9b5a939079a6f5e397388904fdcba0ad609c7a5fa5e395c75bdf7b50972c16b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5a939079a6f5e397388904fdcba0ad609c7a5fa5e395c75bdf7b50972c16b6->enter($__internal_9b5a939079a6f5e397388904fdcba0ad609c7a5fa5e395c75bdf7b50972c16b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f32f4115e0fa8a6b1d0edc179e7312865f3f224c9e2c14b59b284eb1d59bb05->leave($__internal_3f32f4115e0fa8a6b1d0edc179e7312865f3f224c9e2c14b59b284eb1d59bb05_prof);

        
        $__internal_9b5a939079a6f5e397388904fdcba0ad609c7a5fa5e395c75bdf7b50972c16b6->leave($__internal_9b5a939079a6f5e397388904fdcba0ad609c7a5fa5e395c75bdf7b50972c16b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6d7e5964eb529523d107c10ad2ac59de1550c648f05258e5a108466a6b09d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d7e5964eb529523d107c10ad2ac59de1550c648f05258e5a108466a6b09d33->enter($__internal_c6d7e5964eb529523d107c10ad2ac59de1550c648f05258e5a108466a6b09d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5ed866a65a8769d904684692e99d69c5a1594b9640b889ee3855259f8f767391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed866a65a8769d904684692e99d69c5a1594b9640b889ee3855259f8f767391->enter($__internal_5ed866a65a8769d904684692e99d69c5a1594b9640b889ee3855259f8f767391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ed866a65a8769d904684692e99d69c5a1594b9640b889ee3855259f8f767391->leave($__internal_5ed866a65a8769d904684692e99d69c5a1594b9640b889ee3855259f8f767391_prof);

        
        $__internal_c6d7e5964eb529523d107c10ad2ac59de1550c648f05258e5a108466a6b09d33->leave($__internal_c6d7e5964eb529523d107c10ad2ac59de1550c648f05258e5a108466a6b09d33_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0dd451d11eeca174a887269bb3f2cd3f118462c9930e17e667c976b906c84d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd451d11eeca174a887269bb3f2cd3f118462c9930e17e667c976b906c84d52->enter($__internal_0dd451d11eeca174a887269bb3f2cd3f118462c9930e17e667c976b906c84d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bed3e3c2162fbbffb35152a5e61c677c6e19055a0d70b4b75e4498a5bca201e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed3e3c2162fbbffb35152a5e61c677c6e19055a0d70b4b75e4498a5bca201e8->enter($__internal_bed3e3c2162fbbffb35152a5e61c677c6e19055a0d70b4b75e4498a5bca201e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bed3e3c2162fbbffb35152a5e61c677c6e19055a0d70b4b75e4498a5bca201e8->leave($__internal_bed3e3c2162fbbffb35152a5e61c677c6e19055a0d70b4b75e4498a5bca201e8_prof);

        
        $__internal_0dd451d11eeca174a887269bb3f2cd3f118462c9930e17e667c976b906c84d52->leave($__internal_0dd451d11eeca174a887269bb3f2cd3f118462c9930e17e667c976b906c84d52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3053934bb04702f2245b45d62a9d6edb8e03891d9309508f3f109a4e18c31e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3053934bb04702f2245b45d62a9d6edb8e03891d9309508f3f109a4e18c31e37->enter($__internal_3053934bb04702f2245b45d62a9d6edb8e03891d9309508f3f109a4e18c31e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_190788e06573cff80afdba198bd09517c5d3c8c2f75a8485656bafccdd7c19e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190788e06573cff80afdba198bd09517c5d3c8c2f75a8485656bafccdd7c19e3->enter($__internal_190788e06573cff80afdba198bd09517c5d3c8c2f75a8485656bafccdd7c19e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_190788e06573cff80afdba198bd09517c5d3c8c2f75a8485656bafccdd7c19e3->leave($__internal_190788e06573cff80afdba198bd09517c5d3c8c2f75a8485656bafccdd7c19e3_prof);

        
        $__internal_3053934bb04702f2245b45d62a9d6edb8e03891d9309508f3f109a4e18c31e37->leave($__internal_3053934bb04702f2245b45d62a9d6edb8e03891d9309508f3f109a4e18c31e37_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
