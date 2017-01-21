<?php

/* :default:macro.html.twig */
class __TwigTemplate_1a0df9971c5ba675a08a87e9a18e834032878d770592b1d11b9de9b4bc043532 extends Twig_Template
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
        $__internal_a1e7e1b1ab42683e574bf65ea7d150c2fe9592c2ae05c5d44e2ccf8c67c10355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e7e1b1ab42683e574bf65ea7d150c2fe9592c2ae05c5d44e2ccf8c67c10355->enter($__internal_a1e7e1b1ab42683e574bf65ea7d150c2fe9592c2ae05c5d44e2ccf8c67c10355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:macro.html.twig"));

        $__internal_f22a9c31468b3a603b54aecb233a6339ac321f4ee479eeae9c6dbb4f2b1f74da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22a9c31468b3a603b54aecb233a6339ac321f4ee479eeae9c6dbb4f2b1f74da->enter($__internal_f22a9c31468b3a603b54aecb233a6339ac321f4ee479eeae9c6dbb4f2b1f74da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:macro.html.twig"));

        
        $__internal_a1e7e1b1ab42683e574bf65ea7d150c2fe9592c2ae05c5d44e2ccf8c67c10355->leave($__internal_a1e7e1b1ab42683e574bf65ea7d150c2fe9592c2ae05c5d44e2ccf8c67c10355_prof);

        
        $__internal_f22a9c31468b3a603b54aecb233a6339ac321f4ee479eeae9c6dbb4f2b1f74da->leave($__internal_f22a9c31468b3a603b54aecb233a6339ac321f4ee479eeae9c6dbb4f2b1f74da_prof);

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
            $__internal_cde05c2da62c01c6bad9f2cf5873432ddc9d09ea5897eeeea37549fc69468760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cde05c2da62c01c6bad9f2cf5873432ddc9d09ea5897eeeea37549fc69468760->enter($__internal_cde05c2da62c01c6bad9f2cf5873432ddc9d09ea5897eeeea37549fc69468760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "goto_button"));

            $__internal_c839edc3939dac83c798d97c14017ac41820b51aad5a879ce8dec6ed445234d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c839edc3939dac83c798d97c14017ac41820b51aad5a879ce8dec6ed445234d1->enter($__internal_c839edc3939dac83c798d97c14017ac41820b51aad5a879ce8dec6ed445234d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "goto_button"));

            // line 2
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), "html", null, true);
            echo "\">
    </form>
";
            
            $__internal_c839edc3939dac83c798d97c14017ac41820b51aad5a879ce8dec6ed445234d1->leave($__internal_c839edc3939dac83c798d97c14017ac41820b51aad5a879ce8dec6ed445234d1_prof);

            
            $__internal_cde05c2da62c01c6bad9f2cf5873432ddc9d09ea5897eeeea37549fc69468760->leave($__internal_cde05c2da62c01c6bad9f2cf5873432ddc9d09ea5897eeeea37549fc69468760_prof);

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
{% endmacro goto_button %}", ":default:macro.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\app/Resources\\views/default/macro.html.twig");
    }
}
