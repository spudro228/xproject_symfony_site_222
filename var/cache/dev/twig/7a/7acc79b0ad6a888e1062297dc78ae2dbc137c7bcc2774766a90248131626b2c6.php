<?php

/* :default:macro.html.twig */
class __TwigTemplate_2d4e2e4ff858046b6889ce89264b5af70766f0e3517e85e66a7c8d117a562647 extends Twig_Template
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
        $__internal_df5074d7a909c34500e7ebeae1fb7995f4c0a1bc6923991e986e79632bddf186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5074d7a909c34500e7ebeae1fb7995f4c0a1bc6923991e986e79632bddf186->enter($__internal_df5074d7a909c34500e7ebeae1fb7995f4c0a1bc6923991e986e79632bddf186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:macro.html.twig"));

        $__internal_ad71b91d7dceafa81e007924a9d686475b82590281da819492cf3a720be8a84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad71b91d7dceafa81e007924a9d686475b82590281da819492cf3a720be8a84c->enter($__internal_ad71b91d7dceafa81e007924a9d686475b82590281da819492cf3a720be8a84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:macro.html.twig"));

        
        $__internal_df5074d7a909c34500e7ebeae1fb7995f4c0a1bc6923991e986e79632bddf186->leave($__internal_df5074d7a909c34500e7ebeae1fb7995f4c0a1bc6923991e986e79632bddf186_prof);

        
        $__internal_ad71b91d7dceafa81e007924a9d686475b82590281da819492cf3a720be8a84c->leave($__internal_ad71b91d7dceafa81e007924a9d686475b82590281da819492cf3a720be8a84c_prof);

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
            $__internal_d86a404086e9234e00825ee5bcee005fc720c8687e5a8dfdb93a4d8ab37c4357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d86a404086e9234e00825ee5bcee005fc720c8687e5a8dfdb93a4d8ab37c4357->enter($__internal_d86a404086e9234e00825ee5bcee005fc720c8687e5a8dfdb93a4d8ab37c4357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "goto_button"));

            $__internal_2ba538f2959ed48d4847afbdcfa078bd011e119cdc241d22ce1ab551b1ae4a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2ba538f2959ed48d4847afbdcfa078bd011e119cdc241d22ce1ab551b1ae4a84->enter($__internal_2ba538f2959ed48d4847afbdcfa078bd011e119cdc241d22ce1ab551b1ae4a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "goto_button"));

            // line 2
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), "html", null, true);
            echo "\">
    </form>
";
            
            $__internal_2ba538f2959ed48d4847afbdcfa078bd011e119cdc241d22ce1ab551b1ae4a84->leave($__internal_2ba538f2959ed48d4847afbdcfa078bd011e119cdc241d22ce1ab551b1ae4a84_prof);

            
            $__internal_d86a404086e9234e00825ee5bcee005fc720c8687e5a8dfdb93a4d8ab37c4357->leave($__internal_d86a404086e9234e00825ee5bcee005fc720c8687e5a8dfdb93a4d8ab37c4357_prof);

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
        return ":default:macro.html.twig";
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
{% endmacro goto_button %}", ":default:macro.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\var\\cache\\dev/../../../app/Resources/views/default/macro.html.twig");
    }
}
