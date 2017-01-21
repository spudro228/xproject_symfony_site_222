<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_18e1dce76c57d79eb9e812cb36efacf1d7d57ab5bb986d77dac79e8865d62d98 extends Twig_Template
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
        $__internal_e8cb62e4c4d708d45aa974199f5d384602958a274f3ce22baa8ef62bc262109b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8cb62e4c4d708d45aa974199f5d384602958a274f3ce22baa8ef62bc262109b->enter($__internal_e8cb62e4c4d708d45aa974199f5d384602958a274f3ce22baa8ef62bc262109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d92e36f87e631713b4adf1d6f44265fcf10d4746567491b9b4f10e15c2957724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92e36f87e631713b4adf1d6f44265fcf10d4746567491b9b4f10e15c2957724->enter($__internal_d92e36f87e631713b4adf1d6f44265fcf10d4746567491b9b4f10e15c2957724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e8cb62e4c4d708d45aa974199f5d384602958a274f3ce22baa8ef62bc262109b->leave($__internal_e8cb62e4c4d708d45aa974199f5d384602958a274f3ce22baa8ef62bc262109b_prof);

        
        $__internal_d92e36f87e631713b4adf1d6f44265fcf10d4746567491b9b4f10e15c2957724->leave($__internal_d92e36f87e631713b4adf1d6f44265fcf10d4746567491b9b4f10e15c2957724_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
