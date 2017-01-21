<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_59070cb18bd02aaa5cb4e598ae34d318f471f7031c7841e6a6035687b652bec3 extends Twig_Template
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
        $__internal_144d4a81394f9e618a3738d79e72cf566a91ae51888735959f4ceefa0c6c7273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144d4a81394f9e618a3738d79e72cf566a91ae51888735959f4ceefa0c6c7273->enter($__internal_144d4a81394f9e618a3738d79e72cf566a91ae51888735959f4ceefa0c6c7273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_187a225a47e40dc50d407bc183c0fc642ed0e4d89e2f8c0f9667e48cf6a5f74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187a225a47e40dc50d407bc183c0fc642ed0e4d89e2f8c0f9667e48cf6a5f74d->enter($__internal_187a225a47e40dc50d407bc183c0fc642ed0e4d89e2f8c0f9667e48cf6a5f74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_144d4a81394f9e618a3738d79e72cf566a91ae51888735959f4ceefa0c6c7273->leave($__internal_144d4a81394f9e618a3738d79e72cf566a91ae51888735959f4ceefa0c6c7273_prof);

        
        $__internal_187a225a47e40dc50d407bc183c0fc642ed0e4d89e2f8c0f9667e48cf6a5f74d->leave($__internal_187a225a47e40dc50d407bc183c0fc642ed0e4d89e2f8c0f9667e48cf6a5f74d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
