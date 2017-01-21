<?php

/* PostsBundle:Default:index.html.twig */
class __TwigTemplate_0b44e91012e33bfc1d9084fc26d5766d727da4e7e792db2786ad481a8bdae469 extends Twig_Template
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
        $__internal_7a900a3379a480e618c1b89e653cc69c3ab0690f09169c5091d0471e96d780da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a900a3379a480e618c1b89e653cc69c3ab0690f09169c5091d0471e96d780da->enter($__internal_7a900a3379a480e618c1b89e653cc69c3ab0690f09169c5091d0471e96d780da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:Default:index.html.twig"));

        $__internal_245092838fa9bdd306918a7a943b5b6dca1b0ff54909ae29f1383010c2e0edcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245092838fa9bdd306918a7a943b5b6dca1b0ff54909ae29f1383010c2e0edcb->enter($__internal_245092838fa9bdd306918a7a943b5b6dca1b0ff54909ae29f1383010c2e0edcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PostsBundle:Default:index.html.twig"));

        // line 1
        echo "Hello Wrld!!!";
        
        $__internal_7a900a3379a480e618c1b89e653cc69c3ab0690f09169c5091d0471e96d780da->leave($__internal_7a900a3379a480e618c1b89e653cc69c3ab0690f09169c5091d0471e96d780da_prof);

        
        $__internal_245092838fa9bdd306918a7a943b5b6dca1b0ff54909ae29f1383010c2e0edcb->leave($__internal_245092838fa9bdd306918a7a943b5b6dca1b0ff54909ae29f1383010c2e0edcb_prof);

    }

    public function getTemplateName()
    {
        return "PostsBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello Wrld!!!", "PostsBundle:Default:index.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\src\\PostsBundle/Resources/views/Default/index.html.twig");
    }
}
