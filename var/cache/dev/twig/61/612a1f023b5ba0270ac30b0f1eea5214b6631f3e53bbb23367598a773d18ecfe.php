<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_310fddf5e6ad3566e7d89a7e8d30cb1644e19c81de1e49d731a11ab0ddac076c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e96c2a245f636908b813bc8da8c4c7874e118e0c37e96be60dc154a9bd5b0c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96c2a245f636908b813bc8da8c4c7874e118e0c37e96be60dc154a9bd5b0c1c->enter($__internal_e96c2a245f636908b813bc8da8c4c7874e118e0c37e96be60dc154a9bd5b0c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_60bf6f2fc782e918aa5d61803b058609a158a6673177c22e8262d8b01894500d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60bf6f2fc782e918aa5d61803b058609a158a6673177c22e8262d8b01894500d->enter($__internal_60bf6f2fc782e918aa5d61803b058609a158a6673177c22e8262d8b01894500d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96c2a245f636908b813bc8da8c4c7874e118e0c37e96be60dc154a9bd5b0c1c->leave($__internal_e96c2a245f636908b813bc8da8c4c7874e118e0c37e96be60dc154a9bd5b0c1c_prof);

        
        $__internal_60bf6f2fc782e918aa5d61803b058609a158a6673177c22e8262d8b01894500d->leave($__internal_60bf6f2fc782e918aa5d61803b058609a158a6673177c22e8262d8b01894500d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bb7d8f7b7428691ab1f2ce0a051b817be3ec41a4845aed748d4da7650f10e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb7d8f7b7428691ab1f2ce0a051b817be3ec41a4845aed748d4da7650f10e6a->enter($__internal_7bb7d8f7b7428691ab1f2ce0a051b817be3ec41a4845aed748d4da7650f10e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b6c9af59834683975e64ed723deccbf0427d667c6d0e4d4f5d81c4f063e3241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6c9af59834683975e64ed723deccbf0427d667c6d0e4d4f5d81c4f063e3241->enter($__internal_5b6c9af59834683975e64ed723deccbf0427d667c6d0e4d4f5d81c4f063e3241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5b6c9af59834683975e64ed723deccbf0427d667c6d0e4d4f5d81c4f063e3241->leave($__internal_5b6c9af59834683975e64ed723deccbf0427d667c6d0e4d4f5d81c4f063e3241_prof);

        
        $__internal_7bb7d8f7b7428691ab1f2ce0a051b817be3ec41a4845aed748d4da7650f10e6a->leave($__internal_7bb7d8f7b7428691ab1f2ce0a051b817be3ec41a4845aed748d4da7650f10e6a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6ffe9da74b257613b6d8529dabd770bc6b8024351530a45df3d15499ba579d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ffe9da74b257613b6d8529dabd770bc6b8024351530a45df3d15499ba579d8->enter($__internal_b6ffe9da74b257613b6d8529dabd770bc6b8024351530a45df3d15499ba579d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_966fdf5bb5ee827e11325b6b9ca63fd6c45ca25453c2ea2d260c14adddd83bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966fdf5bb5ee827e11325b6b9ca63fd6c45ca25453c2ea2d260c14adddd83bff->enter($__internal_966fdf5bb5ee827e11325b6b9ca63fd6c45ca25453c2ea2d260c14adddd83bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_966fdf5bb5ee827e11325b6b9ca63fd6c45ca25453c2ea2d260c14adddd83bff->leave($__internal_966fdf5bb5ee827e11325b6b9ca63fd6c45ca25453c2ea2d260c14adddd83bff_prof);

        
        $__internal_b6ffe9da74b257613b6d8529dabd770bc6b8024351530a45df3d15499ba579d8->leave($__internal_b6ffe9da74b257613b6d8529dabd770bc6b8024351530a45df3d15499ba579d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d0cd3e0ae57466fd50e2c4ecfaa5102f216fdd66bb1f5597bc20f2e9981c209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0cd3e0ae57466fd50e2c4ecfaa5102f216fdd66bb1f5597bc20f2e9981c209->enter($__internal_4d0cd3e0ae57466fd50e2c4ecfaa5102f216fdd66bb1f5597bc20f2e9981c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf474895c422b17cf72d3f2b6bbef611359e0f3de2411295526558e1c775f1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf474895c422b17cf72d3f2b6bbef611359e0f3de2411295526558e1c775f1bc->enter($__internal_bf474895c422b17cf72d3f2b6bbef611359e0f3de2411295526558e1c775f1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bf474895c422b17cf72d3f2b6bbef611359e0f3de2411295526558e1c775f1bc->leave($__internal_bf474895c422b17cf72d3f2b6bbef611359e0f3de2411295526558e1c775f1bc_prof);

        
        $__internal_4d0cd3e0ae57466fd50e2c4ecfaa5102f216fdd66bb1f5597bc20f2e9981c209->leave($__internal_4d0cd3e0ae57466fd50e2c4ecfaa5102f216fdd66bb1f5597bc20f2e9981c209_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
