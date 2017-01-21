<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_73cad633a700359b762474f1f1a728858856b844fde822d4726cc79e886331a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_626f2638302760e22769c831a56161eb49968b56a1bb749c4f5ccd5696a4cbe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626f2638302760e22769c831a56161eb49968b56a1bb749c4f5ccd5696a4cbe6->enter($__internal_626f2638302760e22769c831a56161eb49968b56a1bb749c4f5ccd5696a4cbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0bbb9d98cb4de6f44d79cfc14c57590085cbb8fe7c2b03953cfa68bb57b92725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbb9d98cb4de6f44d79cfc14c57590085cbb8fe7c2b03953cfa68bb57b92725->enter($__internal_0bbb9d98cb4de6f44d79cfc14c57590085cbb8fe7c2b03953cfa68bb57b92725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_626f2638302760e22769c831a56161eb49968b56a1bb749c4f5ccd5696a4cbe6->leave($__internal_626f2638302760e22769c831a56161eb49968b56a1bb749c4f5ccd5696a4cbe6_prof);

        
        $__internal_0bbb9d98cb4de6f44d79cfc14c57590085cbb8fe7c2b03953cfa68bb57b92725->leave($__internal_0bbb9d98cb4de6f44d79cfc14c57590085cbb8fe7c2b03953cfa68bb57b92725_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe768c12220482f8b0ee117b74e957c5530841804d43f5662bfefefb3d7a56bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe768c12220482f8b0ee117b74e957c5530841804d43f5662bfefefb3d7a56bd->enter($__internal_fe768c12220482f8b0ee117b74e957c5530841804d43f5662bfefefb3d7a56bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9e1d1409d47c2336faa5abeeef178417ff34fddf5e6960950c0eb582b9e120e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1d1409d47c2336faa5abeeef178417ff34fddf5e6960950c0eb582b9e120e1->enter($__internal_9e1d1409d47c2336faa5abeeef178417ff34fddf5e6960950c0eb582b9e120e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9e1d1409d47c2336faa5abeeef178417ff34fddf5e6960950c0eb582b9e120e1->leave($__internal_9e1d1409d47c2336faa5abeeef178417ff34fddf5e6960950c0eb582b9e120e1_prof);

        
        $__internal_fe768c12220482f8b0ee117b74e957c5530841804d43f5662bfefefb3d7a56bd->leave($__internal_fe768c12220482f8b0ee117b74e957c5530841804d43f5662bfefefb3d7a56bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
