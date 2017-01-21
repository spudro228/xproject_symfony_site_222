<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b61b7f675170547527b502d3ce943dcc01f28f239abc4d416c49e5cdb6567823 extends Twig_Template
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
        $__internal_95af5ce79aa11fe7a370dc26e54980bec69bd93302dd470304b789145532963b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95af5ce79aa11fe7a370dc26e54980bec69bd93302dd470304b789145532963b->enter($__internal_95af5ce79aa11fe7a370dc26e54980bec69bd93302dd470304b789145532963b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2df34b7c4437229962c973d1001bf7fd8386312759d6e7b834bf89745d8d022e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df34b7c4437229962c973d1001bf7fd8386312759d6e7b834bf89745d8d022e->enter($__internal_2df34b7c4437229962c973d1001bf7fd8386312759d6e7b834bf89745d8d022e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_95af5ce79aa11fe7a370dc26e54980bec69bd93302dd470304b789145532963b->leave($__internal_95af5ce79aa11fe7a370dc26e54980bec69bd93302dd470304b789145532963b_prof);

        
        $__internal_2df34b7c4437229962c973d1001bf7fd8386312759d6e7b834bf89745d8d022e->leave($__internal_2df34b7c4437229962c973d1001bf7fd8386312759d6e7b834bf89745d8d022e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
