<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_50db921f346b2f9d6c68f470c9ce1a8dc3fc6a82e42c77e768d4f955baa0f79b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c367e5f6da4f77e38615e6f62ed7755ac5f348ec84b9e1987403790acde371a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c367e5f6da4f77e38615e6f62ed7755ac5f348ec84b9e1987403790acde371a->enter($__internal_5c367e5f6da4f77e38615e6f62ed7755ac5f348ec84b9e1987403790acde371a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_7abb42604b3fa23c0f42db2b7ec90a684c6477626fc22b55ee650744ef39df01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abb42604b3fa23c0f42db2b7ec90a684c6477626fc22b55ee650744ef39df01->enter($__internal_7abb42604b3fa23c0f42db2b7ec90a684c6477626fc22b55ee650744ef39df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c367e5f6da4f77e38615e6f62ed7755ac5f348ec84b9e1987403790acde371a->leave($__internal_5c367e5f6da4f77e38615e6f62ed7755ac5f348ec84b9e1987403790acde371a_prof);

        
        $__internal_7abb42604b3fa23c0f42db2b7ec90a684c6477626fc22b55ee650744ef39df01->leave($__internal_7abb42604b3fa23c0f42db2b7ec90a684c6477626fc22b55ee650744ef39df01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e30f63d115fb0f3349b474d720895eb60e7cc7985db0dcf9d85f662d628e3577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30f63d115fb0f3349b474d720895eb60e7cc7985db0dcf9d85f662d628e3577->enter($__internal_e30f63d115fb0f3349b474d720895eb60e7cc7985db0dcf9d85f662d628e3577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7dcc79e81b47deffee182cde6e8c6251e98b1feae023e1d6df77d681d50e5e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcc79e81b47deffee182cde6e8c6251e98b1feae023e1d6df77d681d50e5e33->enter($__internal_7dcc79e81b47deffee182cde6e8c6251e98b1feae023e1d6df77d681d50e5e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7dcc79e81b47deffee182cde6e8c6251e98b1feae023e1d6df77d681d50e5e33->leave($__internal_7dcc79e81b47deffee182cde6e8c6251e98b1feae023e1d6df77d681d50e5e33_prof);

        
        $__internal_e30f63d115fb0f3349b474d720895eb60e7cc7985db0dcf9d85f662d628e3577->leave($__internal_e30f63d115fb0f3349b474d720895eb60e7cc7985db0dcf9d85f662d628e3577_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
