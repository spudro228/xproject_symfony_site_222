<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8caa33ff604f9d9cf610e7037de97b3808c5cfa32a4b1762f24c0a55ec02b8b5 extends Twig_Template
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
        $__internal_ba22c3214412c42e88ff2deb999d71766fff3fe6b7719996bcacb36212f1100d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba22c3214412c42e88ff2deb999d71766fff3fe6b7719996bcacb36212f1100d->enter($__internal_ba22c3214412c42e88ff2deb999d71766fff3fe6b7719996bcacb36212f1100d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_906d55f1f91d10dde379ea6a13546106912cfb73693e26a637f88d2bcefb3463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906d55f1f91d10dde379ea6a13546106912cfb73693e26a637f88d2bcefb3463->enter($__internal_906d55f1f91d10dde379ea6a13546106912cfb73693e26a637f88d2bcefb3463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ba22c3214412c42e88ff2deb999d71766fff3fe6b7719996bcacb36212f1100d->leave($__internal_ba22c3214412c42e88ff2deb999d71766fff3fe6b7719996bcacb36212f1100d_prof);

        
        $__internal_906d55f1f91d10dde379ea6a13546106912cfb73693e26a637f88d2bcefb3463->leave($__internal_906d55f1f91d10dde379ea6a13546106912cfb73693e26a637f88d2bcefb3463_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
