<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_db27a7a7ab4ed46b7631e3310b06511e3c025abfb3a3bdba8751123f605b55c6 extends Twig_Template
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
        $__internal_265c07a6c2e4335b5664653d1ae5425bce1d444b984b438819006c6e2f770a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265c07a6c2e4335b5664653d1ae5425bce1d444b984b438819006c6e2f770a28->enter($__internal_265c07a6c2e4335b5664653d1ae5425bce1d444b984b438819006c6e2f770a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1847bd77051771137759b76ad13c0190cae1e2c11ed663c5dd7a6feea94b51b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1847bd77051771137759b76ad13c0190cae1e2c11ed663c5dd7a6feea94b51b5->enter($__internal_1847bd77051771137759b76ad13c0190cae1e2c11ed663c5dd7a6feea94b51b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_265c07a6c2e4335b5664653d1ae5425bce1d444b984b438819006c6e2f770a28->leave($__internal_265c07a6c2e4335b5664653d1ae5425bce1d444b984b438819006c6e2f770a28_prof);

        
        $__internal_1847bd77051771137759b76ad13c0190cae1e2c11ed663c5dd7a6feea94b51b5->leave($__internal_1847bd77051771137759b76ad13c0190cae1e2c11ed663c5dd7a6feea94b51b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
