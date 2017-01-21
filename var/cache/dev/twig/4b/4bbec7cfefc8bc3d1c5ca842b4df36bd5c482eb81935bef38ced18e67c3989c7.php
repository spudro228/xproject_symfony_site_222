<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_803c50dc078e948a3e4dca660c239cec56043307b1c732581341968accf3d784 extends Twig_Template
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
        $__internal_6a31d474b27f9bbc03171932cd48a0307de0f5dc8bbed180bf05ca0f5dbb2bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a31d474b27f9bbc03171932cd48a0307de0f5dc8bbed180bf05ca0f5dbb2bb2->enter($__internal_6a31d474b27f9bbc03171932cd48a0307de0f5dc8bbed180bf05ca0f5dbb2bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_43ee5ec70b341a01ffbafcb8a7c16e8b3454e5b37dd153c26064c0279ee7dded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ee5ec70b341a01ffbafcb8a7c16e8b3454e5b37dd153c26064c0279ee7dded->enter($__internal_43ee5ec70b341a01ffbafcb8a7c16e8b3454e5b37dd153c26064c0279ee7dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6a31d474b27f9bbc03171932cd48a0307de0f5dc8bbed180bf05ca0f5dbb2bb2->leave($__internal_6a31d474b27f9bbc03171932cd48a0307de0f5dc8bbed180bf05ca0f5dbb2bb2_prof);

        
        $__internal_43ee5ec70b341a01ffbafcb8a7c16e8b3454e5b37dd153c26064c0279ee7dded->leave($__internal_43ee5ec70b341a01ffbafcb8a7c16e8b3454e5b37dd153c26064c0279ee7dded_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
