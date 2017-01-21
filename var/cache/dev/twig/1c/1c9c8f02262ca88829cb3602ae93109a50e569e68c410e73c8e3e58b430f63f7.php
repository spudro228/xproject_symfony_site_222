<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6a0f3e882071550f83ee6a7f82eb5b475e0d96eb1eac6203e3188ab8c9bf37d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cfe5a549eb09fdfd763b623136968939480f8957642b4d3e9e7039febb5783b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfe5a549eb09fdfd763b623136968939480f8957642b4d3e9e7039febb5783b->enter($__internal_7cfe5a549eb09fdfd763b623136968939480f8957642b4d3e9e7039febb5783b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_90610ee8e138f8e7312ad2a044fd247572e9393b86caff1739c140e5ee1eaeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90610ee8e138f8e7312ad2a044fd247572e9393b86caff1739c140e5ee1eaeff->enter($__internal_90610ee8e138f8e7312ad2a044fd247572e9393b86caff1739c140e5ee1eaeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7cfe5a549eb09fdfd763b623136968939480f8957642b4d3e9e7039febb5783b->leave($__internal_7cfe5a549eb09fdfd763b623136968939480f8957642b4d3e9e7039febb5783b_prof);

        
        $__internal_90610ee8e138f8e7312ad2a044fd247572e9393b86caff1739c140e5ee1eaeff->leave($__internal_90610ee8e138f8e7312ad2a044fd247572e9393b86caff1739c140e5ee1eaeff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
