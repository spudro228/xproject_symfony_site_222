<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_54b1ddbcc2e664266419c83d0472116a2c8ac886c250a009a9c032768a6b4b4e extends Twig_Template
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
        $__internal_4774ff2e6cd81fc039cf92e6d5572b269011a1a7cf9325e47a6ad19389b85cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4774ff2e6cd81fc039cf92e6d5572b269011a1a7cf9325e47a6ad19389b85cbd->enter($__internal_4774ff2e6cd81fc039cf92e6d5572b269011a1a7cf9325e47a6ad19389b85cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_582fda92913f353041f210b7360bd1e6a203a4412bd6b3f0179c235172e0fcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582fda92913f353041f210b7360bd1e6a203a4412bd6b3f0179c235172e0fcbe->enter($__internal_582fda92913f353041f210b7360bd1e6a203a4412bd6b3f0179c235172e0fcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4774ff2e6cd81fc039cf92e6d5572b269011a1a7cf9325e47a6ad19389b85cbd->leave($__internal_4774ff2e6cd81fc039cf92e6d5572b269011a1a7cf9325e47a6ad19389b85cbd_prof);

        
        $__internal_582fda92913f353041f210b7360bd1e6a203a4412bd6b3f0179c235172e0fcbe->leave($__internal_582fda92913f353041f210b7360bd1e6a203a4412bd6b3f0179c235172e0fcbe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
