<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_385ea5f33a161f393e71f857ac286a529d2cfcb396940dc0a247b5eeaac8bec9 extends Twig_Template
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
        $__internal_d2a396d9ecf3c7c51f129bcbb87085ff191b5425cecafa40aa5ac6c2e6486a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a396d9ecf3c7c51f129bcbb87085ff191b5425cecafa40aa5ac6c2e6486a74->enter($__internal_d2a396d9ecf3c7c51f129bcbb87085ff191b5425cecafa40aa5ac6c2e6486a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0e725a02d0e189483848ef8acf81bca44dc1ca219c9394c1230eb5634cc93894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e725a02d0e189483848ef8acf81bca44dc1ca219c9394c1230eb5634cc93894->enter($__internal_0e725a02d0e189483848ef8acf81bca44dc1ca219c9394c1230eb5634cc93894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d2a396d9ecf3c7c51f129bcbb87085ff191b5425cecafa40aa5ac6c2e6486a74->leave($__internal_d2a396d9ecf3c7c51f129bcbb87085ff191b5425cecafa40aa5ac6c2e6486a74_prof);

        
        $__internal_0e725a02d0e189483848ef8acf81bca44dc1ca219c9394c1230eb5634cc93894->leave($__internal_0e725a02d0e189483848ef8acf81bca44dc1ca219c9394c1230eb5634cc93894_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
