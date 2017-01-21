<?php

/* @Posts/comment/edit.html.twig */
class __TwigTemplate_8ee80f85dd02048c443024ced07f60e0055967802ee61ced20d755a1c3f172df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Posts/comment/edit.html.twig", 1);
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
        $__internal_7f0b0b80011dc9ffe6c02a7f6cb09656453fd92ab459045067cdc2b7b632d04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0b0b80011dc9ffe6c02a7f6cb09656453fd92ab459045067cdc2b7b632d04f->enter($__internal_7f0b0b80011dc9ffe6c02a7f6cb09656453fd92ab459045067cdc2b7b632d04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/comment/edit.html.twig"));

        $__internal_b738a44716d621b9d488dfd82f18adb82674cb3199774847d75b9542c774021c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b738a44716d621b9d488dfd82f18adb82674cb3199774847d75b9542c774021c->enter($__internal_b738a44716d621b9d488dfd82f18adb82674cb3199774847d75b9542c774021c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/comment/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f0b0b80011dc9ffe6c02a7f6cb09656453fd92ab459045067cdc2b7b632d04f->leave($__internal_7f0b0b80011dc9ffe6c02a7f6cb09656453fd92ab459045067cdc2b7b632d04f_prof);

        
        $__internal_b738a44716d621b9d488dfd82f18adb82674cb3199774847d75b9542c774021c->leave($__internal_b738a44716d621b9d488dfd82f18adb82674cb3199774847d75b9542c774021c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e295257310978ae608654315fb091cba0132b8fd2af0b6cb3dde5335ac5c1951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e295257310978ae608654315fb091cba0132b8fd2af0b6cb3dde5335ac5c1951->enter($__internal_e295257310978ae608654315fb091cba0132b8fd2af0b6cb3dde5335ac5c1951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_041296129d1c3253ac8245c8c142bd479640edb7d661b1a743d9bbbba04401fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041296129d1c3253ac8245c8c142bd479640edb7d661b1a743d9bbbba04401fb->enter($__internal_041296129d1c3253ac8245c8c142bd479640edb7d661b1a743d9bbbba04401fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_041296129d1c3253ac8245c8c142bd479640edb7d661b1a743d9bbbba04401fb->leave($__internal_041296129d1c3253ac8245c8c142bd479640edb7d661b1a743d9bbbba04401fb_prof);

        
        $__internal_e295257310978ae608654315fb091cba0132b8fd2af0b6cb3dde5335ac5c1951->leave($__internal_e295257310978ae608654315fb091cba0132b8fd2af0b6cb3dde5335ac5c1951_prof);

    }

    public function getTemplateName()
    {
        return "@Posts/comment/edit.html.twig";
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
", "@Posts/comment/edit.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle\\Resources\\views\\comment\\edit.html.twig");
    }
}
