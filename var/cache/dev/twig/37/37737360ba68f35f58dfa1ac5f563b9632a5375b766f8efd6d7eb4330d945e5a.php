<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_377d8658fb08122d5ee231e15a16609c4c37169cc2dccc6d77dd055c618cc45e extends Twig_Template
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
        $__internal_15f9092541eef2928c439791df7faad3035cdcf768ddfa99c1df6f17e411783d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f9092541eef2928c439791df7faad3035cdcf768ddfa99c1df6f17e411783d->enter($__internal_15f9092541eef2928c439791df7faad3035cdcf768ddfa99c1df6f17e411783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_022fa95a73d8eef07cf72871b1da76ae75332e53b94830ca7db5555db0fcf56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022fa95a73d8eef07cf72871b1da76ae75332e53b94830ca7db5555db0fcf56b->enter($__internal_022fa95a73d8eef07cf72871b1da76ae75332e53b94830ca7db5555db0fcf56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_15f9092541eef2928c439791df7faad3035cdcf768ddfa99c1df6f17e411783d->leave($__internal_15f9092541eef2928c439791df7faad3035cdcf768ddfa99c1df6f17e411783d_prof);

        
        $__internal_022fa95a73d8eef07cf72871b1da76ae75332e53b94830ca7db5555db0fcf56b->leave($__internal_022fa95a73d8eef07cf72871b1da76ae75332e53b94830ca7db5555db0fcf56b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
