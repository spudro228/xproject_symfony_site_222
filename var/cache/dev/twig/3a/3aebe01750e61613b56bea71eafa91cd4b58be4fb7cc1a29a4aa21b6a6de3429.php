<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f2c23b96b9a120b9b969a4556c93c00dfc30b7f92847e583fe540533935b8335 extends Twig_Template
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
        $__internal_b0a6a79fc39090b9dfc247b3e691405ad3825b94b5ad516a6f9f0a6483cb83fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a6a79fc39090b9dfc247b3e691405ad3825b94b5ad516a6f9f0a6483cb83fa->enter($__internal_b0a6a79fc39090b9dfc247b3e691405ad3825b94b5ad516a6f9f0a6483cb83fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d29f34f5083e849012945dc4c9d47318b2ad506f81f0ff8190c1241dd2aa761e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29f34f5083e849012945dc4c9d47318b2ad506f81f0ff8190c1241dd2aa761e->enter($__internal_d29f34f5083e849012945dc4c9d47318b2ad506f81f0ff8190c1241dd2aa761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b0a6a79fc39090b9dfc247b3e691405ad3825b94b5ad516a6f9f0a6483cb83fa->leave($__internal_b0a6a79fc39090b9dfc247b3e691405ad3825b94b5ad516a6f9f0a6483cb83fa_prof);

        
        $__internal_d29f34f5083e849012945dc4c9d47318b2ad506f81f0ff8190c1241dd2aa761e->leave($__internal_d29f34f5083e849012945dc4c9d47318b2ad506f81f0ff8190c1241dd2aa761e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
