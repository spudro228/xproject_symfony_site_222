<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b4ae885c18046c8d8c039307608563ba60c9679d65a0625123b570a384442b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6495685a5e1ac34793ff9406032f48a4fbcce632c1e1797a954fb5750449c254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6495685a5e1ac34793ff9406032f48a4fbcce632c1e1797a954fb5750449c254->enter($__internal_6495685a5e1ac34793ff9406032f48a4fbcce632c1e1797a954fb5750449c254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_40c8fe910da6de74a2eadf8bc97862e4935bac706ad323d7fa089659b15e86fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c8fe910da6de74a2eadf8bc97862e4935bac706ad323d7fa089659b15e86fa->enter($__internal_40c8fe910da6de74a2eadf8bc97862e4935bac706ad323d7fa089659b15e86fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6495685a5e1ac34793ff9406032f48a4fbcce632c1e1797a954fb5750449c254->leave($__internal_6495685a5e1ac34793ff9406032f48a4fbcce632c1e1797a954fb5750449c254_prof);

        
        $__internal_40c8fe910da6de74a2eadf8bc97862e4935bac706ad323d7fa089659b15e86fa->leave($__internal_40c8fe910da6de74a2eadf8bc97862e4935bac706ad323d7fa089659b15e86fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1633448fc9b34957e767a82095c1e8a8c8bb0c064ba5fc6f90cd88a980dc6d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1633448fc9b34957e767a82095c1e8a8c8bb0c064ba5fc6f90cd88a980dc6d94->enter($__internal_1633448fc9b34957e767a82095c1e8a8c8bb0c064ba5fc6f90cd88a980dc6d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3c638b5e34cad8d02f6ef47b1bb8f5c0329a87a7760ac34b7057e488aa38a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c638b5e34cad8d02f6ef47b1bb8f5c0329a87a7760ac34b7057e488aa38a73->enter($__internal_a3c638b5e34cad8d02f6ef47b1bb8f5c0329a87a7760ac34b7057e488aa38a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a3c638b5e34cad8d02f6ef47b1bb8f5c0329a87a7760ac34b7057e488aa38a73->leave($__internal_a3c638b5e34cad8d02f6ef47b1bb8f5c0329a87a7760ac34b7057e488aa38a73_prof);

        
        $__internal_1633448fc9b34957e767a82095c1e8a8c8bb0c064ba5fc6f90cd88a980dc6d94->leave($__internal_1633448fc9b34957e767a82095c1e8a8c8bb0c064ba5fc6f90cd88a980dc6d94_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_58a8687a3005140d0fa644c8fbbe5477f9b1c473e3dd6db1ba860a22e4db3bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a8687a3005140d0fa644c8fbbe5477f9b1c473e3dd6db1ba860a22e4db3bdd->enter($__internal_58a8687a3005140d0fa644c8fbbe5477f9b1c473e3dd6db1ba860a22e4db3bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72849b63e17393c0e2bce50e4701bd2db9e0a8abf36d2282c4c4a4193a3afc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72849b63e17393c0e2bce50e4701bd2db9e0a8abf36d2282c4c4a4193a3afc9a->enter($__internal_72849b63e17393c0e2bce50e4701bd2db9e0a8abf36d2282c4c4a4193a3afc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_72849b63e17393c0e2bce50e4701bd2db9e0a8abf36d2282c4c4a4193a3afc9a->leave($__internal_72849b63e17393c0e2bce50e4701bd2db9e0a8abf36d2282c4c4a4193a3afc9a_prof);

        
        $__internal_58a8687a3005140d0fa644c8fbbe5477f9b1c473e3dd6db1ba860a22e4db3bdd->leave($__internal_58a8687a3005140d0fa644c8fbbe5477f9b1c473e3dd6db1ba860a22e4db3bdd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
