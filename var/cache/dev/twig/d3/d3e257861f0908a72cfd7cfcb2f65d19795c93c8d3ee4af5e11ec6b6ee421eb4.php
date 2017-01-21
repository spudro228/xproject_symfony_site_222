<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_299865851e13a49ba5ff69e573bbf1c5ff12252036bacd397d4ba8f5a5e855ea extends Twig_Template
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
        $__internal_da3ec13421b2c21251940824d97c2bb6f612c6afca9eb5404ec5f0eb6c624767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3ec13421b2c21251940824d97c2bb6f612c6afca9eb5404ec5f0eb6c624767->enter($__internal_da3ec13421b2c21251940824d97c2bb6f612c6afca9eb5404ec5f0eb6c624767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_276eb9e2b95bf2a046bd0886454d002e8e7ccba4ebe47a4a09b65c61ee2f8364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276eb9e2b95bf2a046bd0886454d002e8e7ccba4ebe47a4a09b65c61ee2f8364->enter($__internal_276eb9e2b95bf2a046bd0886454d002e8e7ccba4ebe47a4a09b65c61ee2f8364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_da3ec13421b2c21251940824d97c2bb6f612c6afca9eb5404ec5f0eb6c624767->leave($__internal_da3ec13421b2c21251940824d97c2bb6f612c6afca9eb5404ec5f0eb6c624767_prof);

        
        $__internal_276eb9e2b95bf2a046bd0886454d002e8e7ccba4ebe47a4a09b65c61ee2f8364->leave($__internal_276eb9e2b95bf2a046bd0886454d002e8e7ccba4ebe47a4a09b65c61ee2f8364_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
