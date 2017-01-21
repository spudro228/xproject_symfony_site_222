<?php

/* PostsBundle:comment:form.html.twig */
class __TwigTemplate_55e99f15ad682e569c7572ecba240d849d8f803e870548439a6a8ac6fe1d6ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7f94e52d2bf38f193a6f6c32d93706185508cf5e38f3a72228f6cf11e26d7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f94e52d2bf38f193a6f6c32d93706185508cf5e38f3a72228f6cf11e26d7de->enter($__internal_b7f94e52d2bf38f193a6f6c32d93706185508cf5e38f3a72228f6cf11e26d7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:form.html.twig"));

        $__internal_10208efd6bec44426f560b6eeacf66fe5a30601bc80e5a04deb74d25ae2b612e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10208efd6bec44426f560b6eeacf66fe5a30601bc80e5a04deb74d25ae2b612e->enter($__internal_10208efd6bec44426f560b6eeacf66fe5a30601bc80e5a04deb74d25ae2b612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:comment:form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comment_new", array("post_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "post", array()), "id", array()))), "method" => "POST"));
        echo "

    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<p>
    <input type=\"submit\" value=\"Submit\">
</p>";
        
        $__internal_b7f94e52d2bf38f193a6f6c32d93706185508cf5e38f3a72228f6cf11e26d7de->leave($__internal_b7f94e52d2bf38f193a6f6c32d93706185508cf5e38f3a72228f6cf11e26d7de_prof);

        
        $__internal_10208efd6bec44426f560b6eeacf66fe5a30601bc80e5a04deb74d25ae2b612e->leave($__internal_10208efd6bec44426f560b6eeacf66fe5a30601bc80e5a04deb74d25ae2b612e_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, { 'action': path('comment_new' , { 'post_id' : comment.post.id }), 'method': 'POST'}) }}

    {{ form_widget(form) }}
<p>
    <input type=\"submit\" value=\"Submit\">
</p>", "PostsBundle:comment:form.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/comment/form.html.twig");
    }
}
