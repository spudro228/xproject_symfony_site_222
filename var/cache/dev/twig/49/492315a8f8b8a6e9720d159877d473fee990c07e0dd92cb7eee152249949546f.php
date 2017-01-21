<?php

/* PostsBundle:comment:new.html.twig */
class __TwigTemplate_849107d62cf276aae0712343d95205cf16b66de925befb92abff41ef2d9e38cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PostsBundle:comment:new.html.twig", 1);
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
        $__internal_c7a3455332b0219f8e426a2f72d3e433dd40025e8c2edb44b15a329f7f691d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7a3455332b0219f8e426a2f72d3e433dd40025e8c2edb44b15a329f7f691d76->enter($__internal_c7a3455332b0219f8e426a2f72d3e433dd40025e8c2edb44b15a329f7f691d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:new.html.twig"));

        $__internal_4c5789d0b5fed8e7015e4046687de9aa3213ef3d774263818afb2ed3f617be29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5789d0b5fed8e7015e4046687de9aa3213ef3d774263818afb2ed3f617be29->enter($__internal_4c5789d0b5fed8e7015e4046687de9aa3213ef3d774263818afb2ed3f617be29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a3455332b0219f8e426a2f72d3e433dd40025e8c2edb44b15a329f7f691d76->leave($__internal_c7a3455332b0219f8e426a2f72d3e433dd40025e8c2edb44b15a329f7f691d76_prof);

        
        $__internal_4c5789d0b5fed8e7015e4046687de9aa3213ef3d774263818afb2ed3f617be29->leave($__internal_4c5789d0b5fed8e7015e4046687de9aa3213ef3d774263818afb2ed3f617be29_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f224963745c212d064cf0398f2dec77750c25bf1f0e0f4c82367255c08c13c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f224963745c212d064cf0398f2dec77750c25bf1f0e0f4c82367255c08c13c5e->enter($__internal_f224963745c212d064cf0398f2dec77750c25bf1f0e0f4c82367255c08c13c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e66026f590b11dc3b49a658a00832bf26c477d210209d7a9c0cfe2e2176fe1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66026f590b11dc3b49a658a00832bf26c477d210209d7a9c0cfe2e2176fe1b7->enter($__internal_e66026f590b11dc3b49a658a00832bf26c477d210209d7a9c0cfe2e2176fe1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e66026f590b11dc3b49a658a00832bf26c477d210209d7a9c0cfe2e2176fe1b7->leave($__internal_e66026f590b11dc3b49a658a00832bf26c477d210209d7a9c0cfe2e2176fe1b7_prof);

        
        $__internal_f224963745c212d064cf0398f2dec77750c25bf1f0e0f4c82367255c08c13c5e->leave($__internal_f224963745c212d064cf0398f2dec77750c25bf1f0e0f4c82367255c08c13c5e_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:comment:new.html.twig";
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
", "PostsBundle:comment:new.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/comment/new.html.twig");
    }
}
