<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_be63f7a5fae789150b5500916201111e112cd07a202bccb525f492e3cc52df0f extends Twig_Template
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
        $__internal_ca2aa5995440e225e7fdd25d973b09caffa9738499a6deac5b40aaf37cfc7408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2aa5995440e225e7fdd25d973b09caffa9738499a6deac5b40aaf37cfc7408->enter($__internal_ca2aa5995440e225e7fdd25d973b09caffa9738499a6deac5b40aaf37cfc7408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d53024b3eb9a669cf819d6680a1bfb8f9543cf57b71031c2d79398d76bcd4233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53024b3eb9a669cf819d6680a1bfb8f9543cf57b71031c2d79398d76bcd4233->enter($__internal_d53024b3eb9a669cf819d6680a1bfb8f9543cf57b71031c2d79398d76bcd4233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ca2aa5995440e225e7fdd25d973b09caffa9738499a6deac5b40aaf37cfc7408->leave($__internal_ca2aa5995440e225e7fdd25d973b09caffa9738499a6deac5b40aaf37cfc7408_prof);

        
        $__internal_d53024b3eb9a669cf819d6680a1bfb8f9543cf57b71031c2d79398d76bcd4233->leave($__internal_d53024b3eb9a669cf819d6680a1bfb8f9543cf57b71031c2d79398d76bcd4233_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
