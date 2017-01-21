<?php

/* PostsBundle:post:new.html.twig */
class __TwigTemplate_2723eeb9f1fc5a51478e79ae5b9b70eb692717e430b8c3a7335701847434e662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:post:new.html.twig", 1);
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
        $__internal_3be76c8ef0c72dfa484ad7017dd6c12b75a0b8acd00d4486351585f6198ceca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be76c8ef0c72dfa484ad7017dd6c12b75a0b8acd00d4486351585f6198ceca6->enter($__internal_3be76c8ef0c72dfa484ad7017dd6c12b75a0b8acd00d4486351585f6198ceca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:new.html.twig"));

        $__internal_5cb0da9d6f0242f6b685d316a0b56537c1fde1e983a855c8e0ba56349699faff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb0da9d6f0242f6b685d316a0b56537c1fde1e983a855c8e0ba56349699faff->enter($__internal_5cb0da9d6f0242f6b685d316a0b56537c1fde1e983a855c8e0ba56349699faff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3be76c8ef0c72dfa484ad7017dd6c12b75a0b8acd00d4486351585f6198ceca6->leave($__internal_3be76c8ef0c72dfa484ad7017dd6c12b75a0b8acd00d4486351585f6198ceca6_prof);

        
        $__internal_5cb0da9d6f0242f6b685d316a0b56537c1fde1e983a855c8e0ba56349699faff->leave($__internal_5cb0da9d6f0242f6b685d316a0b56537c1fde1e983a855c8e0ba56349699faff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de3352230c5e3b126598490ecced0a25c3320f6cb6d5b397a00fb9ac9ac0cade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3352230c5e3b126598490ecced0a25c3320f6cb6d5b397a00fb9ac9ac0cade->enter($__internal_de3352230c5e3b126598490ecced0a25c3320f6cb6d5b397a00fb9ac9ac0cade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a0ac00cc2587e7d9fc2813e6b156570596287da69fbc852c61bf4ed213d2524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0ac00cc2587e7d9fc2813e6b156570596287da69fbc852c61bf4ed213d2524->enter($__internal_8a0ac00cc2587e7d9fc2813e6b156570596287da69fbc852c61bf4ed213d2524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8a0ac00cc2587e7d9fc2813e6b156570596287da69fbc852c61bf4ed213d2524->leave($__internal_8a0ac00cc2587e7d9fc2813e6b156570596287da69fbc852c61bf4ed213d2524_prof);

        
        $__internal_de3352230c5e3b126598490ecced0a25c3320f6cb6d5b397a00fb9ac9ac0cade->leave($__internal_de3352230c5e3b126598490ecced0a25c3320f6cb6d5b397a00fb9ac9ac0cade_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "PostsBundle:post:new.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\var\\cache\\dev/../../../src/PostsBundle/Resources/views/post/new.html.twig");
    }
}
