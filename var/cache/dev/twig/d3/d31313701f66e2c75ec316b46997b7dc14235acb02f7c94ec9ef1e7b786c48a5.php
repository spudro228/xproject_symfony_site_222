<?php

/* @Posts/comment/new.html.twig */
class __TwigTemplate_5974c06651f8d9138f2f369227fad7e498ec8fc3fa8b9abd549241502fdecd5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Posts/comment/new.html.twig", 1);
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
        $__internal_9cb9ce8875cbbe0c03351a76b35fd5d7d6e61f691e429c281cf4c696a2e6f5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb9ce8875cbbe0c03351a76b35fd5d7d6e61f691e429c281cf4c696a2e6f5bd->enter($__internal_9cb9ce8875cbbe0c03351a76b35fd5d7d6e61f691e429c281cf4c696a2e6f5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/comment/new.html.twig"));

        $__internal_22cb6a55baefb77985c5252dea56cb21475498fa61bfe3dd1fc394fa44a16dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cb6a55baefb77985c5252dea56cb21475498fa61bfe3dd1fc394fa44a16dcc->enter($__internal_22cb6a55baefb77985c5252dea56cb21475498fa61bfe3dd1fc394fa44a16dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/comment/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb9ce8875cbbe0c03351a76b35fd5d7d6e61f691e429c281cf4c696a2e6f5bd->leave($__internal_9cb9ce8875cbbe0c03351a76b35fd5d7d6e61f691e429c281cf4c696a2e6f5bd_prof);

        
        $__internal_22cb6a55baefb77985c5252dea56cb21475498fa61bfe3dd1fc394fa44a16dcc->leave($__internal_22cb6a55baefb77985c5252dea56cb21475498fa61bfe3dd1fc394fa44a16dcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d23c58e258449e02ec06a8049932efe6ea6eb60178fabd38ba19665499b060df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23c58e258449e02ec06a8049932efe6ea6eb60178fabd38ba19665499b060df->enter($__internal_d23c58e258449e02ec06a8049932efe6ea6eb60178fabd38ba19665499b060df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_caadc1dd1a5b0fb126cfbba620803cd2eb4f66234c82c2896e5f144d79fcf58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caadc1dd1a5b0fb126cfbba620803cd2eb4f66234c82c2896e5f144d79fcf58a->enter($__internal_caadc1dd1a5b0fb126cfbba620803cd2eb4f66234c82c2896e5f144d79fcf58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_caadc1dd1a5b0fb126cfbba620803cd2eb4f66234c82c2896e5f144d79fcf58a->leave($__internal_caadc1dd1a5b0fb126cfbba620803cd2eb4f66234c82c2896e5f144d79fcf58a_prof);

        
        $__internal_d23c58e258449e02ec06a8049932efe6ea6eb60178fabd38ba19665499b060df->leave($__internal_d23c58e258449e02ec06a8049932efe6ea6eb60178fabd38ba19665499b060df_prof);

    }

    public function getTemplateName()
    {
        return "@Posts/comment/new.html.twig";
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
    <h1>Comment creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('comment_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Posts/comment/new.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle\\Resources\\views\\comment\\new.html.twig");
    }
}
