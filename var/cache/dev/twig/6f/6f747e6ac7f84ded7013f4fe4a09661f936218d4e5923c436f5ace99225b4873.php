<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b20aa0fdddff91ea4e4f1ae3b8f04612e9b95d668525f35be6f67a04c2f649ea extends Twig_Template
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
        $__internal_abd472342572f8e5254a5c24981351a4b889734a56b3d5ffdd1c7b59acb4ffb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd472342572f8e5254a5c24981351a4b889734a56b3d5ffdd1c7b59acb4ffb5->enter($__internal_abd472342572f8e5254a5c24981351a4b889734a56b3d5ffdd1c7b59acb4ffb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_0379a7101084e4b5125995c48059286eb516bac1c16a0f092a315bba12a1295f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0379a7101084e4b5125995c48059286eb516bac1c16a0f092a315bba12a1295f->enter($__internal_0379a7101084e4b5125995c48059286eb516bac1c16a0f092a315bba12a1295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_abd472342572f8e5254a5c24981351a4b889734a56b3d5ffdd1c7b59acb4ffb5->leave($__internal_abd472342572f8e5254a5c24981351a4b889734a56b3d5ffdd1c7b59acb4ffb5_prof);

        
        $__internal_0379a7101084e4b5125995c48059286eb516bac1c16a0f092a315bba12a1295f->leave($__internal_0379a7101084e4b5125995c48059286eb516bac1c16a0f092a315bba12a1295f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
