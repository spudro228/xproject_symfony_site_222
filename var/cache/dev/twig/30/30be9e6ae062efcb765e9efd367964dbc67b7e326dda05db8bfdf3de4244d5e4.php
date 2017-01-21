<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_77e44c835ea80fe484a3a3641895a7f11a2cf52336018930f068ea05e7bbcb15 extends Twig_Template
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
        $__internal_41af8173cbd3ccba22a60be5b4d736644c40ed591c34a46b664bbe0d7135762e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41af8173cbd3ccba22a60be5b4d736644c40ed591c34a46b664bbe0d7135762e->enter($__internal_41af8173cbd3ccba22a60be5b4d736644c40ed591c34a46b664bbe0d7135762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_46855aca1959e6936096a1f919bdc0b45769591dfcddbb9f5161109054250875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46855aca1959e6936096a1f919bdc0b45769591dfcddbb9f5161109054250875->enter($__internal_46855aca1959e6936096a1f919bdc0b45769591dfcddbb9f5161109054250875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_41af8173cbd3ccba22a60be5b4d736644c40ed591c34a46b664bbe0d7135762e->leave($__internal_41af8173cbd3ccba22a60be5b4d736644c40ed591c34a46b664bbe0d7135762e_prof);

        
        $__internal_46855aca1959e6936096a1f919bdc0b45769591dfcddbb9f5161109054250875->leave($__internal_46855aca1959e6936096a1f919bdc0b45769591dfcddbb9f5161109054250875_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
