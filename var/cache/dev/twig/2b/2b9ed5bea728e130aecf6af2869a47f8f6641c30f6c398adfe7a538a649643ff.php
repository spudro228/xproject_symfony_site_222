<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e9c075145866c8e53b7dc21ce66d3dbdaf1149746b0df6ee8980f5d64eae7e68 extends Twig_Template
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
        $__internal_e96445907b772a24e2bb066347897a41b06d00c436a4f1ab636e6b2abf40f4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96445907b772a24e2bb066347897a41b06d00c436a4f1ab636e6b2abf40f4e9->enter($__internal_e96445907b772a24e2bb066347897a41b06d00c436a4f1ab636e6b2abf40f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_9808bed74e7c1545d4b56bff62bf6a60743ed9fea3dac68ef858fcdf744f3b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9808bed74e7c1545d4b56bff62bf6a60743ed9fea3dac68ef858fcdf744f3b04->enter($__internal_9808bed74e7c1545d4b56bff62bf6a60743ed9fea3dac68ef858fcdf744f3b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e96445907b772a24e2bb066347897a41b06d00c436a4f1ab636e6b2abf40f4e9->leave($__internal_e96445907b772a24e2bb066347897a41b06d00c436a4f1ab636e6b2abf40f4e9_prof);

        
        $__internal_9808bed74e7c1545d4b56bff62bf6a60743ed9fea3dac68ef858fcdf744f3b04->leave($__internal_9808bed74e7c1545d4b56bff62bf6a60743ed9fea3dac68ef858fcdf744f3b04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
