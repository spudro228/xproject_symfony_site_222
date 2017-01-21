<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_225007b2f8c8e4ee595234f9ac22295391307af6c7149b45162f4de1bb0df74f extends Twig_Template
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
        $__internal_579b0947f0752a09f448a11efea624026278d48ac37cb5661ffdf90b46d0ed06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579b0947f0752a09f448a11efea624026278d48ac37cb5661ffdf90b46d0ed06->enter($__internal_579b0947f0752a09f448a11efea624026278d48ac37cb5661ffdf90b46d0ed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0c3e9425f887a93003a934210ff338d1166277fc02492e7bc66ad38046bd2e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3e9425f887a93003a934210ff338d1166277fc02492e7bc66ad38046bd2e7d->enter($__internal_0c3e9425f887a93003a934210ff338d1166277fc02492e7bc66ad38046bd2e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_579b0947f0752a09f448a11efea624026278d48ac37cb5661ffdf90b46d0ed06->leave($__internal_579b0947f0752a09f448a11efea624026278d48ac37cb5661ffdf90b46d0ed06_prof);

        
        $__internal_0c3e9425f887a93003a934210ff338d1166277fc02492e7bc66ad38046bd2e7d->leave($__internal_0c3e9425f887a93003a934210ff338d1166277fc02492e7bc66ad38046bd2e7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
