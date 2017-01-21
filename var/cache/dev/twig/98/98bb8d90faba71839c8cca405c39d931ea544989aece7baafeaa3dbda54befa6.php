<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1a9abef81353e7667fcf87f5ad4638c7a5c40c9ac90b64fb6079393fc8d03ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_de11e1da24ba8813f13ec8c285943754311f3d34e8edeea3ffffd6a0bbde4db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de11e1da24ba8813f13ec8c285943754311f3d34e8edeea3ffffd6a0bbde4db8->enter($__internal_de11e1da24ba8813f13ec8c285943754311f3d34e8edeea3ffffd6a0bbde4db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0be6823651dadcbbec0ff78236fad5b650a3768d618baf6312e1002a62edcd85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be6823651dadcbbec0ff78236fad5b650a3768d618baf6312e1002a62edcd85->enter($__internal_0be6823651dadcbbec0ff78236fad5b650a3768d618baf6312e1002a62edcd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de11e1da24ba8813f13ec8c285943754311f3d34e8edeea3ffffd6a0bbde4db8->leave($__internal_de11e1da24ba8813f13ec8c285943754311f3d34e8edeea3ffffd6a0bbde4db8_prof);

        
        $__internal_0be6823651dadcbbec0ff78236fad5b650a3768d618baf6312e1002a62edcd85->leave($__internal_0be6823651dadcbbec0ff78236fad5b650a3768d618baf6312e1002a62edcd85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46d9b74b27d65b40159dbf1346ebf63d7bf0502df9dfd2187f9fe7a92859d5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d9b74b27d65b40159dbf1346ebf63d7bf0502df9dfd2187f9fe7a92859d5dd->enter($__internal_46d9b74b27d65b40159dbf1346ebf63d7bf0502df9dfd2187f9fe7a92859d5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e96ba54e498381e3ca2431ef3d624e4309812116ed848111945b169667c0191c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96ba54e498381e3ca2431ef3d624e4309812116ed848111945b169667c0191c->enter($__internal_e96ba54e498381e3ca2431ef3d624e4309812116ed848111945b169667c0191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e96ba54e498381e3ca2431ef3d624e4309812116ed848111945b169667c0191c->leave($__internal_e96ba54e498381e3ca2431ef3d624e4309812116ed848111945b169667c0191c_prof);

        
        $__internal_46d9b74b27d65b40159dbf1346ebf63d7bf0502df9dfd2187f9fe7a92859d5dd->leave($__internal_46d9b74b27d65b40159dbf1346ebf63d7bf0502df9dfd2187f9fe7a92859d5dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2b68d8771f476484bebe2863068fc655edf9d0b19987394e6fcfe5bc7298cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b68d8771f476484bebe2863068fc655edf9d0b19987394e6fcfe5bc7298cbd->enter($__internal_e2b68d8771f476484bebe2863068fc655edf9d0b19987394e6fcfe5bc7298cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2259c095baede468737d98ac501adccb4f3072c2ab447dbe6893b41c8d7cd383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2259c095baede468737d98ac501adccb4f3072c2ab447dbe6893b41c8d7cd383->enter($__internal_2259c095baede468737d98ac501adccb4f3072c2ab447dbe6893b41c8d7cd383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2259c095baede468737d98ac501adccb4f3072c2ab447dbe6893b41c8d7cd383->leave($__internal_2259c095baede468737d98ac501adccb4f3072c2ab447dbe6893b41c8d7cd383_prof);

        
        $__internal_e2b68d8771f476484bebe2863068fc655edf9d0b19987394e6fcfe5bc7298cbd->leave($__internal_e2b68d8771f476484bebe2863068fc655edf9d0b19987394e6fcfe5bc7298cbd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
