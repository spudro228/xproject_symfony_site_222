<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_268f4922d7fe797bd7a3c866ec9f40113cfc8b445c984d6f27addd224d808952 extends Twig_Template
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
        $__internal_359fabe4fa5596d2bb52782639972d89cdb6b22262480191cd1b074e282bd8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359fabe4fa5596d2bb52782639972d89cdb6b22262480191cd1b074e282bd8d7->enter($__internal_359fabe4fa5596d2bb52782639972d89cdb6b22262480191cd1b074e282bd8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8d41be01bc86a18272d9bd9e5f168ba979fad7c2c3c17bfbead191f19cf45f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d41be01bc86a18272d9bd9e5f168ba979fad7c2c3c17bfbead191f19cf45f4a->enter($__internal_8d41be01bc86a18272d9bd9e5f168ba979fad7c2c3c17bfbead191f19cf45f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_359fabe4fa5596d2bb52782639972d89cdb6b22262480191cd1b074e282bd8d7->leave($__internal_359fabe4fa5596d2bb52782639972d89cdb6b22262480191cd1b074e282bd8d7_prof);

        
        $__internal_8d41be01bc86a18272d9bd9e5f168ba979fad7c2c3c17bfbead191f19cf45f4a->leave($__internal_8d41be01bc86a18272d9bd9e5f168ba979fad7c2c3c17bfbead191f19cf45f4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
