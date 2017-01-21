<?php

/* PostsBundle:post:new.html.twig */
class __TwigTemplate_b088781627cb46f85bb974e7ae4aedea6451e53509075b8acf554233ee79b5fc extends Twig_Template
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
        $__internal_4f890141f61f979f9ed86c80e8887765e96815317e53009abed884f52bfe8dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f890141f61f979f9ed86c80e8887765e96815317e53009abed884f52bfe8dcc->enter($__internal_4f890141f61f979f9ed86c80e8887765e96815317e53009abed884f52bfe8dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:new.html.twig"));

        $__internal_ec9845203c93cbd31206ef0a84af83749e6bfabb4028e7056a647be6e8c924fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9845203c93cbd31206ef0a84af83749e6bfabb4028e7056a647be6e8c924fb->enter($__internal_ec9845203c93cbd31206ef0a84af83749e6bfabb4028e7056a647be6e8c924fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f890141f61f979f9ed86c80e8887765e96815317e53009abed884f52bfe8dcc->leave($__internal_4f890141f61f979f9ed86c80e8887765e96815317e53009abed884f52bfe8dcc_prof);

        
        $__internal_ec9845203c93cbd31206ef0a84af83749e6bfabb4028e7056a647be6e8c924fb->leave($__internal_ec9845203c93cbd31206ef0a84af83749e6bfabb4028e7056a647be6e8c924fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66552ee691e8cfa144e55236b308e527348b84546bfd84f71582f684f924f672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66552ee691e8cfa144e55236b308e527348b84546bfd84f71582f684f924f672->enter($__internal_66552ee691e8cfa144e55236b308e527348b84546bfd84f71582f684f924f672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e367a68b7916474eb54cd0b72ec792cadcd793101f4c00e3e6643ebdb981f3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e367a68b7916474eb54cd0b72ec792cadcd793101f4c00e3e6643ebdb981f3fd->enter($__internal_e367a68b7916474eb54cd0b72ec792cadcd793101f4c00e3e6643ebdb981f3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e367a68b7916474eb54cd0b72ec792cadcd793101f4c00e3e6643ebdb981f3fd->leave($__internal_e367a68b7916474eb54cd0b72ec792cadcd793101f4c00e3e6643ebdb981f3fd_prof);

        
        $__internal_66552ee691e8cfa144e55236b308e527348b84546bfd84f71582f684f924f672->leave($__internal_66552ee691e8cfa144e55236b308e527348b84546bfd84f71582f684f924f672_prof);

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
", "PostsBundle:post:new.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/post/new.html.twig");
    }
}
