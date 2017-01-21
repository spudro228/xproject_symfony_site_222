<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5504ad544c8ed8f780158f34e47294f47f35165f81d93f6c77f9c43f50f1e8d0 extends Twig_Template
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
        $__internal_9a79d5a02529ba520673dc761eea9110cbcb440ae9f87641f1996edfd9a8ace1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a79d5a02529ba520673dc761eea9110cbcb440ae9f87641f1996edfd9a8ace1->enter($__internal_9a79d5a02529ba520673dc761eea9110cbcb440ae9f87641f1996edfd9a8ace1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_872361105d2970ed84bd70d3a01e882df145bfbfbd87966c95855771a84d4213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872361105d2970ed84bd70d3a01e882df145bfbfbd87966c95855771a84d4213->enter($__internal_872361105d2970ed84bd70d3a01e882df145bfbfbd87966c95855771a84d4213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9a79d5a02529ba520673dc761eea9110cbcb440ae9f87641f1996edfd9a8ace1->leave($__internal_9a79d5a02529ba520673dc761eea9110cbcb440ae9f87641f1996edfd9a8ace1_prof);

        
        $__internal_872361105d2970ed84bd70d3a01e882df145bfbfbd87966c95855771a84d4213->leave($__internal_872361105d2970ed84bd70d3a01e882df145bfbfbd87966c95855771a84d4213_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
