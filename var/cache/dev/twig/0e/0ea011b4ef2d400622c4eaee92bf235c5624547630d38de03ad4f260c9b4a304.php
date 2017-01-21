<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_595e4de3d977c2ed074d505a0fef32eac1ae780461f47265d19f6bc47c3026fd extends Twig_Template
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
        $__internal_a08388e159b0c917e6e33f0f25e5fc0ba51af4a3199049282622267dc0a8101e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08388e159b0c917e6e33f0f25e5fc0ba51af4a3199049282622267dc0a8101e->enter($__internal_a08388e159b0c917e6e33f0f25e5fc0ba51af4a3199049282622267dc0a8101e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7eb481adeee8f28f424ee5d296a6ba2e2fe2bb29c336d18d6abd7e6963cd3b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb481adeee8f28f424ee5d296a6ba2e2fe2bb29c336d18d6abd7e6963cd3b90->enter($__internal_7eb481adeee8f28f424ee5d296a6ba2e2fe2bb29c336d18d6abd7e6963cd3b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a08388e159b0c917e6e33f0f25e5fc0ba51af4a3199049282622267dc0a8101e->leave($__internal_a08388e159b0c917e6e33f0f25e5fc0ba51af4a3199049282622267dc0a8101e_prof);

        
        $__internal_7eb481adeee8f28f424ee5d296a6ba2e2fe2bb29c336d18d6abd7e6963cd3b90->leave($__internal_7eb481adeee8f28f424ee5d296a6ba2e2fe2bb29c336d18d6abd7e6963cd3b90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
