<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_6c2b3488e68f59d293b7c1571d2c557a74e83ddf261cb1a836713f368476f2b9 extends Twig_Template
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
        $__internal_9bad4fbcd806c59fb5ed734f8938c7734a2da6a09ad92666a6980e2d39d82ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bad4fbcd806c59fb5ed734f8938c7734a2da6a09ad92666a6980e2d39d82ec0->enter($__internal_9bad4fbcd806c59fb5ed734f8938c7734a2da6a09ad92666a6980e2d39d82ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_655a98534decef70240d47bd0e71b7762064f46aae86b47fca0e58c2659deb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655a98534decef70240d47bd0e71b7762064f46aae86b47fca0e58c2659deb2b->enter($__internal_655a98534decef70240d47bd0e71b7762064f46aae86b47fca0e58c2659deb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9bad4fbcd806c59fb5ed734f8938c7734a2da6a09ad92666a6980e2d39d82ec0->leave($__internal_9bad4fbcd806c59fb5ed734f8938c7734a2da6a09ad92666a6980e2d39d82ec0_prof);

        
        $__internal_655a98534decef70240d47bd0e71b7762064f46aae86b47fca0e58c2659deb2b->leave($__internal_655a98534decef70240d47bd0e71b7762064f46aae86b47fca0e58c2659deb2b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
