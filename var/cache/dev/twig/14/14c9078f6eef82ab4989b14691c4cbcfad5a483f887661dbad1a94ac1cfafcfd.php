<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e86ac6bd179f51036145fb977c3c384277e7c1f77097514d455c1b738d3435d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7e41beb3aaec664a13a300757920cc2bb3fc95d3fe798fa4aef92a6a5a5e5a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e41beb3aaec664a13a300757920cc2bb3fc95d3fe798fa4aef92a6a5a5e5a6b->enter($__internal_7e41beb3aaec664a13a300757920cc2bb3fc95d3fe798fa4aef92a6a5a5e5a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_22ee20322d517360d6b3335a3571caf1347d763328819e2482666e0377cadf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ee20322d517360d6b3335a3571caf1347d763328819e2482666e0377cadf36->enter($__internal_22ee20322d517360d6b3335a3571caf1347d763328819e2482666e0377cadf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e41beb3aaec664a13a300757920cc2bb3fc95d3fe798fa4aef92a6a5a5e5a6b->leave($__internal_7e41beb3aaec664a13a300757920cc2bb3fc95d3fe798fa4aef92a6a5a5e5a6b_prof);

        
        $__internal_22ee20322d517360d6b3335a3571caf1347d763328819e2482666e0377cadf36->leave($__internal_22ee20322d517360d6b3335a3571caf1347d763328819e2482666e0377cadf36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7bf26e07ca67fececa668e6401634d2cb71424fc0bb055b4a97cbbdb12f89b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf26e07ca67fececa668e6401634d2cb71424fc0bb055b4a97cbbdb12f89b54->enter($__internal_7bf26e07ca67fececa668e6401634d2cb71424fc0bb055b4a97cbbdb12f89b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_034b362527d3e9130ee9c5715295539bafdbf920c39c7a82721b9891b440ab12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034b362527d3e9130ee9c5715295539bafdbf920c39c7a82721b9891b440ab12->enter($__internal_034b362527d3e9130ee9c5715295539bafdbf920c39c7a82721b9891b440ab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_034b362527d3e9130ee9c5715295539bafdbf920c39c7a82721b9891b440ab12->leave($__internal_034b362527d3e9130ee9c5715295539bafdbf920c39c7a82721b9891b440ab12_prof);

        
        $__internal_7bf26e07ca67fececa668e6401634d2cb71424fc0bb055b4a97cbbdb12f89b54->leave($__internal_7bf26e07ca67fececa668e6401634d2cb71424fc0bb055b4a97cbbdb12f89b54_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fe9fb5d01fe86fff6799cc8be92d7a3369ee3b08fd9963550d34c1837b5524f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe9fb5d01fe86fff6799cc8be92d7a3369ee3b08fd9963550d34c1837b5524f->enter($__internal_6fe9fb5d01fe86fff6799cc8be92d7a3369ee3b08fd9963550d34c1837b5524f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c25f410ab3f385e66704c9233c4a7d664837c48129ecd35c78378c088f2c1d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25f410ab3f385e66704c9233c4a7d664837c48129ecd35c78378c088f2c1d0b->enter($__internal_c25f410ab3f385e66704c9233c4a7d664837c48129ecd35c78378c088f2c1d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c25f410ab3f385e66704c9233c4a7d664837c48129ecd35c78378c088f2c1d0b->leave($__internal_c25f410ab3f385e66704c9233c4a7d664837c48129ecd35c78378c088f2c1d0b_prof);

        
        $__internal_6fe9fb5d01fe86fff6799cc8be92d7a3369ee3b08fd9963550d34c1837b5524f->leave($__internal_6fe9fb5d01fe86fff6799cc8be92d7a3369ee3b08fd9963550d34c1837b5524f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c868b7ba34bf0e22b698029620b0d57f1d8d67c614c2fd37c498110c77b9ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c868b7ba34bf0e22b698029620b0d57f1d8d67c614c2fd37c498110c77b9ea2->enter($__internal_7c868b7ba34bf0e22b698029620b0d57f1d8d67c614c2fd37c498110c77b9ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25c241ed645d6b69f8a2e25646a96ef9282c2d07f484cab6e1763f3df3f265a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c241ed645d6b69f8a2e25646a96ef9282c2d07f484cab6e1763f3df3f265a7->enter($__internal_25c241ed645d6b69f8a2e25646a96ef9282c2d07f484cab6e1763f3df3f265a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_25c241ed645d6b69f8a2e25646a96ef9282c2d07f484cab6e1763f3df3f265a7->leave($__internal_25c241ed645d6b69f8a2e25646a96ef9282c2d07f484cab6e1763f3df3f265a7_prof);

        
        $__internal_7c868b7ba34bf0e22b698029620b0d57f1d8d67c614c2fd37c498110c77b9ea2->leave($__internal_7c868b7ba34bf0e22b698029620b0d57f1d8d67c614c2fd37c498110c77b9ea2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
