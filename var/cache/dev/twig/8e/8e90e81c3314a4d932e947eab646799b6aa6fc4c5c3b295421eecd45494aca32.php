<?php

/* @Posts/Default/index.html.twig */
class __TwigTemplate_a4d4ff0023c39a4eddf802de91563f24d239a963ec18e13e9b58b18bc1df283d extends Twig_Template
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
        $__internal_28dd90dff2198e946af38a42af218bfc26c21c53dd607600ff7b735c7d10ebef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28dd90dff2198e946af38a42af218bfc26c21c53dd607600ff7b735c7d10ebef->enter($__internal_28dd90dff2198e946af38a42af218bfc26c21c53dd607600ff7b735c7d10ebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/Default/index.html.twig"));

        $__internal_a74514708b2ceca1f6c96b981602b5ea453465fe18fc1e14edf09567bfc6cad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74514708b2ceca1f6c96b981602b5ea453465fe18fc1e14edf09567bfc6cad2->enter($__internal_a74514708b2ceca1f6c96b981602b5ea453465fe18fc1e14edf09567bfc6cad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Posts/Default/index.html.twig"));

        // line 1
        echo "Hello Wrld!!!";
        
        $__internal_28dd90dff2198e946af38a42af218bfc26c21c53dd607600ff7b735c7d10ebef->leave($__internal_28dd90dff2198e946af38a42af218bfc26c21c53dd607600ff7b735c7d10ebef_prof);

        
        $__internal_a74514708b2ceca1f6c96b981602b5ea453465fe18fc1e14edf09567bfc6cad2->leave($__internal_a74514708b2ceca1f6c96b981602b5ea453465fe18fc1e14edf09567bfc6cad2_prof);

    }

    public function getTemplateName()
    {
        return "@Posts/Default/index.html.twig";
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
        return new Twig_Source("Hello Wrld!!!", "@Posts/Default/index.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
