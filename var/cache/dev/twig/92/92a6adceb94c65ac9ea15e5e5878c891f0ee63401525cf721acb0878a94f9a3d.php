<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9f9682964876ef79240bbd6c4fefb58d2606005997df4af180f96ecf3eef22bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28a99a432fad3ed43320ec0697a689d8d1d94f72d1701ecb69b1ee566018e93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a99a432fad3ed43320ec0697a689d8d1d94f72d1701ecb69b1ee566018e93a->enter($__internal_28a99a432fad3ed43320ec0697a689d8d1d94f72d1701ecb69b1ee566018e93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_38c52375a34109ffa95f9f4cbb8aa8f1b80bacd4908bc42e970b8ed605fe19fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c52375a34109ffa95f9f4cbb8aa8f1b80bacd4908bc42e970b8ed605fe19fa->enter($__internal_38c52375a34109ffa95f9f4cbb8aa8f1b80bacd4908bc42e970b8ed605fe19fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28a99a432fad3ed43320ec0697a689d8d1d94f72d1701ecb69b1ee566018e93a->leave($__internal_28a99a432fad3ed43320ec0697a689d8d1d94f72d1701ecb69b1ee566018e93a_prof);

        
        $__internal_38c52375a34109ffa95f9f4cbb8aa8f1b80bacd4908bc42e970b8ed605fe19fa->leave($__internal_38c52375a34109ffa95f9f4cbb8aa8f1b80bacd4908bc42e970b8ed605fe19fa_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_861b971d77f1c6e500f190beb6171e2e5bf849601927e4bd61e515402819c53f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861b971d77f1c6e500f190beb6171e2e5bf849601927e4bd61e515402819c53f->enter($__internal_861b971d77f1c6e500f190beb6171e2e5bf849601927e4bd61e515402819c53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5bd0e223c468e34dcdacf43c497eb4e64e3a2117c8471ec3885e0d64b9c550ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bd0e223c468e34dcdacf43c497eb4e64e3a2117c8471ec3885e0d64b9c550ac->enter($__internal_5bd0e223c468e34dcdacf43c497eb4e64e3a2117c8471ec3885e0d64b9c550ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_5bd0e223c468e34dcdacf43c497eb4e64e3a2117c8471ec3885e0d64b9c550ac->leave($__internal_5bd0e223c468e34dcdacf43c497eb4e64e3a2117c8471ec3885e0d64b9c550ac_prof);

        
        $__internal_861b971d77f1c6e500f190beb6171e2e5bf849601927e4bd61e515402819c53f->leave($__internal_861b971d77f1c6e500f190beb6171e2e5bf849601927e4bd61e515402819c53f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51f35dd264d60b36b6144b33abf1672c40eddac3cb9358382082aa1929b72245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f35dd264d60b36b6144b33abf1672c40eddac3cb9358382082aa1929b72245->enter($__internal_51f35dd264d60b36b6144b33abf1672c40eddac3cb9358382082aa1929b72245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a87788bf2df399708c918278a4f0cb429b2303f88156c81a273b5457c444fcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87788bf2df399708c918278a4f0cb429b2303f88156c81a273b5457c444fcb9->enter($__internal_a87788bf2df399708c918278a4f0cb429b2303f88156c81a273b5457c444fcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a87788bf2df399708c918278a4f0cb429b2303f88156c81a273b5457c444fcb9->leave($__internal_a87788bf2df399708c918278a4f0cb429b2303f88156c81a273b5457c444fcb9_prof);

        
        $__internal_51f35dd264d60b36b6144b33abf1672c40eddac3cb9358382082aa1929b72245->leave($__internal_51f35dd264d60b36b6144b33abf1672c40eddac3cb9358382082aa1929b72245_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
