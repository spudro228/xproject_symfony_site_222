<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_909b11294dace351828201dbd0b635a6c3d0b145bc2f209dae035ba2970d610f extends Twig_Template
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
        $__internal_c4608517a39e160aa28411a1b0188e8fc462baac004a046f2e79fdcd8055d35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4608517a39e160aa28411a1b0188e8fc462baac004a046f2e79fdcd8055d35b->enter($__internal_c4608517a39e160aa28411a1b0188e8fc462baac004a046f2e79fdcd8055d35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_df515f2db456caf6a6a3149e1b4a368ff19758dbd07557153ac1e4027936db41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df515f2db456caf6a6a3149e1b4a368ff19758dbd07557153ac1e4027936db41->enter($__internal_df515f2db456caf6a6a3149e1b4a368ff19758dbd07557153ac1e4027936db41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_c4608517a39e160aa28411a1b0188e8fc462baac004a046f2e79fdcd8055d35b->leave($__internal_c4608517a39e160aa28411a1b0188e8fc462baac004a046f2e79fdcd8055d35b_prof);

        
        $__internal_df515f2db456caf6a6a3149e1b4a368ff19758dbd07557153ac1e4027936db41->leave($__internal_df515f2db456caf6a6a3149e1b4a368ff19758dbd07557153ac1e4027936db41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
