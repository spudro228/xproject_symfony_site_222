<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2844bf2134018fdd6e5eedce8e5bdb9681b0d473af680524511316f3c1152633 extends Twig_Template
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
        $__internal_16ef552b535af0c153c7d022a34b8d64408e56c4ebb3b793af156b4b9911cf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ef552b535af0c153c7d022a34b8d64408e56c4ebb3b793af156b4b9911cf25->enter($__internal_16ef552b535af0c153c7d022a34b8d64408e56c4ebb3b793af156b4b9911cf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d3a165461c5f8963775da09a54accfd6a39204aa3e122c0482c0d93e289c3465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a165461c5f8963775da09a54accfd6a39204aa3e122c0482c0d93e289c3465->enter($__internal_d3a165461c5f8963775da09a54accfd6a39204aa3e122c0482c0d93e289c3465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_16ef552b535af0c153c7d022a34b8d64408e56c4ebb3b793af156b4b9911cf25->leave($__internal_16ef552b535af0c153c7d022a34b8d64408e56c4ebb3b793af156b4b9911cf25_prof);

        
        $__internal_d3a165461c5f8963775da09a54accfd6a39204aa3e122c0482c0d93e289c3465->leave($__internal_d3a165461c5f8963775da09a54accfd6a39204aa3e122c0482c0d93e289c3465_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
