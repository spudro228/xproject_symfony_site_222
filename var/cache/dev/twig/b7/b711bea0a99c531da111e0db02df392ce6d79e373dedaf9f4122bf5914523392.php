<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_72593176b9f1c137c7c66713f4e50473b97836f06fbad2ea380d9f18e330318f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_03f6da79d656664b6ab4f4d8b6c1ac0061c500f41bfe664054345cca46c0ea37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f6da79d656664b6ab4f4d8b6c1ac0061c500f41bfe664054345cca46c0ea37->enter($__internal_03f6da79d656664b6ab4f4d8b6c1ac0061c500f41bfe664054345cca46c0ea37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e71a17e4f037b38d75dc5eb03461de593c3a8a5fa17c4c5324a5e00ac11bec2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71a17e4f037b38d75dc5eb03461de593c3a8a5fa17c4c5324a5e00ac11bec2f->enter($__internal_e71a17e4f037b38d75dc5eb03461de593c3a8a5fa17c4c5324a5e00ac11bec2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03f6da79d656664b6ab4f4d8b6c1ac0061c500f41bfe664054345cca46c0ea37->leave($__internal_03f6da79d656664b6ab4f4d8b6c1ac0061c500f41bfe664054345cca46c0ea37_prof);

        
        $__internal_e71a17e4f037b38d75dc5eb03461de593c3a8a5fa17c4c5324a5e00ac11bec2f->leave($__internal_e71a17e4f037b38d75dc5eb03461de593c3a8a5fa17c4c5324a5e00ac11bec2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e697f20de99cda0d09353cfbbe178ed7259d95befb31bd939a3b695ce28615d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e697f20de99cda0d09353cfbbe178ed7259d95befb31bd939a3b695ce28615d->enter($__internal_2e697f20de99cda0d09353cfbbe178ed7259d95befb31bd939a3b695ce28615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fe2590295424285809485b5940479ef36db277052a2f775dffc0999141ce0910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2590295424285809485b5940479ef36db277052a2f775dffc0999141ce0910->enter($__internal_fe2590295424285809485b5940479ef36db277052a2f775dffc0999141ce0910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fe2590295424285809485b5940479ef36db277052a2f775dffc0999141ce0910->leave($__internal_fe2590295424285809485b5940479ef36db277052a2f775dffc0999141ce0910_prof);

        
        $__internal_2e697f20de99cda0d09353cfbbe178ed7259d95befb31bd939a3b695ce28615d->leave($__internal_2e697f20de99cda0d09353cfbbe178ed7259d95befb31bd939a3b695ce28615d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd064ae711bc90d885a372724c0e3c228de1383ee075a2b1fd3a6c4da64f7af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd064ae711bc90d885a372724c0e3c228de1383ee075a2b1fd3a6c4da64f7af4->enter($__internal_fd064ae711bc90d885a372724c0e3c228de1383ee075a2b1fd3a6c4da64f7af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c18ec165bd88291be5f5d47b2e024b7d82c65be8947fba5164732881d02e6b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18ec165bd88291be5f5d47b2e024b7d82c65be8947fba5164732881d02e6b4f->enter($__internal_c18ec165bd88291be5f5d47b2e024b7d82c65be8947fba5164732881d02e6b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c18ec165bd88291be5f5d47b2e024b7d82c65be8947fba5164732881d02e6b4f->leave($__internal_c18ec165bd88291be5f5d47b2e024b7d82c65be8947fba5164732881d02e6b4f_prof);

        
        $__internal_fd064ae711bc90d885a372724c0e3c228de1383ee075a2b1fd3a6c4da64f7af4->leave($__internal_fd064ae711bc90d885a372724c0e3c228de1383ee075a2b1fd3a6c4da64f7af4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5d4c3f8471200e1cb003fd05289c2fa2a4dc19e1896fd9b8b15b8053a62b3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d4c3f8471200e1cb003fd05289c2fa2a4dc19e1896fd9b8b15b8053a62b3d8->enter($__internal_e5d4c3f8471200e1cb003fd05289c2fa2a4dc19e1896fd9b8b15b8053a62b3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bfd18f59ab72f96a75e95375103a03df07cb0620414b70dd4ead40d02bc95ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd18f59ab72f96a75e95375103a03df07cb0620414b70dd4ead40d02bc95ce1->enter($__internal_bfd18f59ab72f96a75e95375103a03df07cb0620414b70dd4ead40d02bc95ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bfd18f59ab72f96a75e95375103a03df07cb0620414b70dd4ead40d02bc95ce1->leave($__internal_bfd18f59ab72f96a75e95375103a03df07cb0620414b70dd4ead40d02bc95ce1_prof);

        
        $__internal_e5d4c3f8471200e1cb003fd05289c2fa2a4dc19e1896fd9b8b15b8053a62b3d8->leave($__internal_e5d4c3f8471200e1cb003fd05289c2fa2a4dc19e1896fd9b8b15b8053a62b3d8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
