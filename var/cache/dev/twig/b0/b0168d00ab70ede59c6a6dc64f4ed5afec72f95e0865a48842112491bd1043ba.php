<?php

/* default/macro.html.twig */
class __TwigTemplate_d5b3590575a9979c4c1f1233ab762d5e001b070e71662cab5a7f32aceec77fe5 extends Twig_Template
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
        $__internal_423a657335626007a412aab4f32ab23668abde8256a058ad6ea7127da65c678a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423a657335626007a412aab4f32ab23668abde8256a058ad6ea7127da65c678a->enter($__internal_423a657335626007a412aab4f32ab23668abde8256a058ad6ea7127da65c678a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/macro.html.twig"));

        $__internal_f5ef9ea8a00ffc08cd51c03ee94430434e09448acd16e640835d8da96105b820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ef9ea8a00ffc08cd51c03ee94430434e09448acd16e640835d8da96105b820->enter($__internal_f5ef9ea8a00ffc08cd51c03ee94430434e09448acd16e640835d8da96105b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/macro.html.twig"));

        
        $__internal_423a657335626007a412aab4f32ab23668abde8256a058ad6ea7127da65c678a->leave($__internal_423a657335626007a412aab4f32ab23668abde8256a058ad6ea7127da65c678a_prof);

        
        $__internal_f5ef9ea8a00ffc08cd51c03ee94430434e09448acd16e640835d8da96105b820->leave($__internal_f5ef9ea8a00ffc08cd51c03ee94430434e09448acd16e640835d8da96105b820_prof);

    }

    // line 1
    public function getgoto_button($__path__ = null, $__formId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $__path__,
            "formId" => $__formId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ad987a0c3d15c19f7b17f3d8c1b25e3f3c9c4a1a31ed0fdf1ec445700e8a9b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ad987a0c3d15c19f7b17f3d8c1b25e3f3c9c4a1a31ed0fdf1ec445700e8a9b4c->enter($__internal_ad987a0c3d15c19f7b17f3d8c1b25e3f3c9c4a1a31ed0fdf1ec445700e8a9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "goto_button"));

            $__internal_75e3c2e381e8a42ff570b2924a7b5144cef1a01262141919cafe63af2a62d80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_75e3c2e381e8a42ff570b2924a7b5144cef1a01262141919cafe63af2a62d80b->enter($__internal_75e3c2e381e8a42ff570b2924a7b5144cef1a01262141919cafe63af2a62d80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "goto_button"));

            // line 2
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), "html", null, true);
            echo "\">
    </form>
";
            
            $__internal_75e3c2e381e8a42ff570b2924a7b5144cef1a01262141919cafe63af2a62d80b->leave($__internal_75e3c2e381e8a42ff570b2924a7b5144cef1a01262141919cafe63af2a62d80b_prof);

            
            $__internal_ad987a0c3d15c19f7b17f3d8c1b25e3f3c9c4a1a31ed0fdf1ec445700e8a9b4c->leave($__internal_ad987a0c3d15c19f7b17f3d8c1b25e3f3c9c4a1a31ed0fdf1ec445700e8a9b4c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "default/macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro goto_button(path, formId) %}
    <form action=\"{{ path }}\" id=\"{{ formId }}\">
    </form>
{% endmacro goto_button %}", "default/macro.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\app\\Resources\\views\\default\\macro.html.twig");
    }
}
