<?php

/* PostsBundle:comment:edit.html.twig */
class __TwigTemplate_f4cd3f5b414c725325343a238debd68a562342efccf59fb61aa92e22417a237c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:comment:edit.html.twig", 1);
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
        $__internal_3303f32292841b18540b0928d34344f7824ca88f9c3105a4b7f1b64c56eb1f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3303f32292841b18540b0928d34344f7824ca88f9c3105a4b7f1b64c56eb1f46->enter($__internal_3303f32292841b18540b0928d34344f7824ca88f9c3105a4b7f1b64c56eb1f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:edit.html.twig"));

        $__internal_9c4c538b8651b4abd090253abf1136fd6dd9298727eaae7fd80da52520052c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4c538b8651b4abd090253abf1136fd6dd9298727eaae7fd80da52520052c17->enter($__internal_9c4c538b8651b4abd090253abf1136fd6dd9298727eaae7fd80da52520052c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3303f32292841b18540b0928d34344f7824ca88f9c3105a4b7f1b64c56eb1f46->leave($__internal_3303f32292841b18540b0928d34344f7824ca88f9c3105a4b7f1b64c56eb1f46_prof);

        
        $__internal_9c4c538b8651b4abd090253abf1136fd6dd9298727eaae7fd80da52520052c17->leave($__internal_9c4c538b8651b4abd090253abf1136fd6dd9298727eaae7fd80da52520052c17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fceb3630089b3be7ba7ab2712e09d8570b3df71c7f8ddbce51c706e8275f0932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fceb3630089b3be7ba7ab2712e09d8570b3df71c7f8ddbce51c706e8275f0932->enter($__internal_fceb3630089b3be7ba7ab2712e09d8570b3df71c7f8ddbce51c706e8275f0932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4cf9c177a6dff15db50b69a501ea63038bffc64170a993f53afb839f4e10229c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf9c177a6dff15db50b69a501ea63038bffc64170a993f53afb839f4e10229c->enter($__internal_4cf9c177a6dff15db50b69a501ea63038bffc64170a993f53afb839f4e10229c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
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
        
        $__internal_4cf9c177a6dff15db50b69a501ea63038bffc64170a993f53afb839f4e10229c->leave($__internal_4cf9c177a6dff15db50b69a501ea63038bffc64170a993f53afb839f4e10229c_prof);

        
        $__internal_fceb3630089b3be7ba7ab2712e09d8570b3df71c7f8ddbce51c706e8275f0932->leave($__internal_fceb3630089b3be7ba7ab2712e09d8570b3df71c7f8ddbce51c706e8275f0932_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:comment:edit.html.twig";
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
    <h1>Comment edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "PostsBundle:comment:edit.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\var\\cache\\dev/../../../src/PostsBundle/Resources/views/comment/edit.html.twig");
    }
}