<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_469c005269d38cb099637e7bc24c0a4f10c6c08b55159a2e0fa787a73c358baa extends Twig_Template
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
        $__internal_c45f8c9b6db3f65c36c26ad61d30b04d82acbd3ce4010416e3b844ee86d7ed91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45f8c9b6db3f65c36c26ad61d30b04d82acbd3ce4010416e3b844ee86d7ed91->enter($__internal_c45f8c9b6db3f65c36c26ad61d30b04d82acbd3ce4010416e3b844ee86d7ed91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ba63427480b745b76422751ace1a413d7b5c2f0abb59a92633159716978627b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba63427480b745b76422751ace1a413d7b5c2f0abb59a92633159716978627b8->enter($__internal_ba63427480b745b76422751ace1a413d7b5c2f0abb59a92633159716978627b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c45f8c9b6db3f65c36c26ad61d30b04d82acbd3ce4010416e3b844ee86d7ed91->leave($__internal_c45f8c9b6db3f65c36c26ad61d30b04d82acbd3ce4010416e3b844ee86d7ed91_prof);

        
        $__internal_ba63427480b745b76422751ace1a413d7b5c2f0abb59a92633159716978627b8->leave($__internal_ba63427480b745b76422751ace1a413d7b5c2f0abb59a92633159716978627b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
