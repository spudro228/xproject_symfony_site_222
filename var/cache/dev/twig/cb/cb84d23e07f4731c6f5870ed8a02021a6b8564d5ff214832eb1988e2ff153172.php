<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_20a9a2d0e4e7483a00c7aad385124e9835651f0dfdb3009499e1f41cf889922e extends Twig_Template
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
        $__internal_8efec874162faaed466a52166db0ed989565fcc17782be0d5ef60706179640eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8efec874162faaed466a52166db0ed989565fcc17782be0d5ef60706179640eb->enter($__internal_8efec874162faaed466a52166db0ed989565fcc17782be0d5ef60706179640eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_465e2dc41ac38a023ceaf81feea52c7629995d84e005c58b781f609b975e669d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465e2dc41ac38a023ceaf81feea52c7629995d84e005c58b781f609b975e669d->enter($__internal_465e2dc41ac38a023ceaf81feea52c7629995d84e005c58b781f609b975e669d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8efec874162faaed466a52166db0ed989565fcc17782be0d5ef60706179640eb->leave($__internal_8efec874162faaed466a52166db0ed989565fcc17782be0d5ef60706179640eb_prof);

        
        $__internal_465e2dc41ac38a023ceaf81feea52c7629995d84e005c58b781f609b975e669d->leave($__internal_465e2dc41ac38a023ceaf81feea52c7629995d84e005c58b781f609b975e669d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
