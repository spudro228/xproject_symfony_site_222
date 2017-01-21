<?php

/* PostsBundle:post:edit.html.twig */
class __TwigTemplate_7f86b0afcf010ebd85a681c84ea98dabc7f667467c8761abe4e485de78162602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:post:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3186d45be8a15ba75dfbc3b95f2894dbfe1b2c28f602ccaa1ed40cfc135fa69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3186d45be8a15ba75dfbc3b95f2894dbfe1b2c28f602ccaa1ed40cfc135fa69a->enter($__internal_3186d45be8a15ba75dfbc3b95f2894dbfe1b2c28f602ccaa1ed40cfc135fa69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:edit.html.twig"));

        $__internal_e6170fd3153f1dcd87cdb634cc193e21039846a321a621354dce9cd89f2ddcd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6170fd3153f1dcd87cdb634cc193e21039846a321a621354dce9cd89f2ddcd7->enter($__internal_e6170fd3153f1dcd87cdb634cc193e21039846a321a621354dce9cd89f2ddcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3186d45be8a15ba75dfbc3b95f2894dbfe1b2c28f602ccaa1ed40cfc135fa69a->leave($__internal_3186d45be8a15ba75dfbc3b95f2894dbfe1b2c28f602ccaa1ed40cfc135fa69a_prof);

        
        $__internal_e6170fd3153f1dcd87cdb634cc193e21039846a321a621354dce9cd89f2ddcd7->leave($__internal_e6170fd3153f1dcd87cdb634cc193e21039846a321a621354dce9cd89f2ddcd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9f40b6f95ff0cecf354914458206b1fefb72ea3b1a88b5bc9556ce70c665e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f40b6f95ff0cecf354914458206b1fefb72ea3b1a88b5bc9556ce70c665e35->enter($__internal_d9f40b6f95ff0cecf354914458206b1fefb72ea3b1a88b5bc9556ce70c665e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5fa5b0cc8ff69465d92f312cb363d8ee545bf2afc11734c9d6a387743b74bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fa5b0cc8ff69465d92f312cb363d8ee545bf2afc11734c9d6a387743b74bdc->enter($__internal_f5fa5b0cc8ff69465d92f312cb363d8ee545bf2afc11734c9d6a387743b74bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f5fa5b0cc8ff69465d92f312cb363d8ee545bf2afc11734c9d6a387743b74bdc->leave($__internal_f5fa5b0cc8ff69465d92f312cb363d8ee545bf2afc11734c9d6a387743b74bdc_prof);

        
        $__internal_d9f40b6f95ff0cecf354914458206b1fefb72ea3b1a88b5bc9556ce70c665e35->leave($__internal_d9f40b6f95ff0cecf354914458206b1fefb72ea3b1a88b5bc9556ce70c665e35_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "PostsBundle:post:edit.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/post/edit.html.twig");
    }
}
