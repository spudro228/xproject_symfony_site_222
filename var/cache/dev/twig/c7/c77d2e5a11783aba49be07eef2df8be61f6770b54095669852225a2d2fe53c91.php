<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c6e6340b7f02a8b8384529ee2ef17da390635b3de15c32bb2b353ed62f1aff4f extends Twig_Template
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
        $__internal_3f9465538b0d3248ad163ad2a201c5b3572974243554a369e8a1ddceff04189a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9465538b0d3248ad163ad2a201c5b3572974243554a369e8a1ddceff04189a->enter($__internal_3f9465538b0d3248ad163ad2a201c5b3572974243554a369e8a1ddceff04189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c27131ac3b785d562fc2d702dbc615b75c10ae7e43564ddc6d2448d78d214d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27131ac3b785d562fc2d702dbc615b75c10ae7e43564ddc6d2448d78d214d90->enter($__internal_c27131ac3b785d562fc2d702dbc615b75c10ae7e43564ddc6d2448d78d214d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3f9465538b0d3248ad163ad2a201c5b3572974243554a369e8a1ddceff04189a->leave($__internal_3f9465538b0d3248ad163ad2a201c5b3572974243554a369e8a1ddceff04189a_prof);

        
        $__internal_c27131ac3b785d562fc2d702dbc615b75c10ae7e43564ddc6d2448d78d214d90->leave($__internal_c27131ac3b785d562fc2d702dbc615b75c10ae7e43564ddc6d2448d78d214d90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
