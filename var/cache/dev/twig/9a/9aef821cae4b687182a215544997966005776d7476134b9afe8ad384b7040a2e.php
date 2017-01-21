<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_1d835b55e9fb253deda2b0e41e91c20c9bb7aa5896e4c69daa96583f1e72efd0 extends Twig_Template
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
        $__internal_58bd24fe2fe4c974cff86b737d1858755fe31a76b2c5b596c41ba081fb917a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bd24fe2fe4c974cff86b737d1858755fe31a76b2c5b596c41ba081fb917a53->enter($__internal_58bd24fe2fe4c974cff86b737d1858755fe31a76b2c5b596c41ba081fb917a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_da60ab7cb5272708cd85f0b55bb18c2936ee2ebefb87bd1f77637f315258ef3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da60ab7cb5272708cd85f0b55bb18c2936ee2ebefb87bd1f77637f315258ef3d->enter($__internal_da60ab7cb5272708cd85f0b55bb18c2936ee2ebefb87bd1f77637f315258ef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_58bd24fe2fe4c974cff86b737d1858755fe31a76b2c5b596c41ba081fb917a53->leave($__internal_58bd24fe2fe4c974cff86b737d1858755fe31a76b2c5b596c41ba081fb917a53_prof);

        
        $__internal_da60ab7cb5272708cd85f0b55bb18c2936ee2ebefb87bd1f77637f315258ef3d->leave($__internal_da60ab7cb5272708cd85f0b55bb18c2936ee2ebefb87bd1f77637f315258ef3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
