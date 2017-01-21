<?php

/* @Posts/post/edit.html.twig */
class __TwigTemplate_93a606bd3cacce94e16bc4ac47e2957d8f759c6b4ed1b6ddaa5da9cdddf30fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Posts/post/edit.html.twig", 1);
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
        $__internal_a647fbe16649bd7d5ce3286241931d05de0b1aceaccd2b934f5989f4465a0bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a647fbe16649bd7d5ce3286241931d05de0b1aceaccd2b934f5989f4465a0bc2->enter($__internal_a647fbe16649bd7d5ce3286241931d05de0b1aceaccd2b934f5989f4465a0bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/post/edit.html.twig"));

        $__internal_70a8b53dee68e148a8aa8f01fb94e7a5ece8f8e47d518274a5e1d9b4921f1deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a8b53dee68e148a8aa8f01fb94e7a5ece8f8e47d518274a5e1d9b4921f1deb->enter($__internal_70a8b53dee68e148a8aa8f01fb94e7a5ece8f8e47d518274a5e1d9b4921f1deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a647fbe16649bd7d5ce3286241931d05de0b1aceaccd2b934f5989f4465a0bc2->leave($__internal_a647fbe16649bd7d5ce3286241931d05de0b1aceaccd2b934f5989f4465a0bc2_prof);

        
        $__internal_70a8b53dee68e148a8aa8f01fb94e7a5ece8f8e47d518274a5e1d9b4921f1deb->leave($__internal_70a8b53dee68e148a8aa8f01fb94e7a5ece8f8e47d518274a5e1d9b4921f1deb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_394ce5e5497a64af7c7c4b6ba23714aac63e4bb873026ac7ceb7480c3eab618d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394ce5e5497a64af7c7c4b6ba23714aac63e4bb873026ac7ceb7480c3eab618d->enter($__internal_394ce5e5497a64af7c7c4b6ba23714aac63e4bb873026ac7ceb7480c3eab618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_358918e4932f9aa87aa59e7a4acd3b8517fe2b2bb86cc33be541f372db219ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358918e4932f9aa87aa59e7a4acd3b8517fe2b2bb86cc33be541f372db219ff5->enter($__internal_358918e4932f9aa87aa59e7a4acd3b8517fe2b2bb86cc33be541f372db219ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_358918e4932f9aa87aa59e7a4acd3b8517fe2b2bb86cc33be541f372db219ff5->leave($__internal_358918e4932f9aa87aa59e7a4acd3b8517fe2b2bb86cc33be541f372db219ff5_prof);

        
        $__internal_394ce5e5497a64af7c7c4b6ba23714aac63e4bb873026ac7ceb7480c3eab618d->leave($__internal_394ce5e5497a64af7c7c4b6ba23714aac63e4bb873026ac7ceb7480c3eab618d_prof);

    }

    public function getTemplateName()
    {
        return "@Posts/post/edit.html.twig";
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
", "@Posts/post/edit.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle\\Resources\\views\\post\\edit.html.twig");
    }
}
