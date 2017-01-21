<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_285e20b8574369e861e888842945e4231376d1f734edaead2cd35e04a039af8d extends Twig_Template
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
        $__internal_9325219befbac96cd32c219e8759b4714fdc7d2cf292753164401122634d8077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9325219befbac96cd32c219e8759b4714fdc7d2cf292753164401122634d8077->enter($__internal_9325219befbac96cd32c219e8759b4714fdc7d2cf292753164401122634d8077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_680bdcebb848bbcc5e3fd288f46222c27e7de09892dac983fb889824f29fca19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680bdcebb848bbcc5e3fd288f46222c27e7de09892dac983fb889824f29fca19->enter($__internal_680bdcebb848bbcc5e3fd288f46222c27e7de09892dac983fb889824f29fca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9325219befbac96cd32c219e8759b4714fdc7d2cf292753164401122634d8077->leave($__internal_9325219befbac96cd32c219e8759b4714fdc7d2cf292753164401122634d8077_prof);

        
        $__internal_680bdcebb848bbcc5e3fd288f46222c27e7de09892dac983fb889824f29fca19->leave($__internal_680bdcebb848bbcc5e3fd288f46222c27e7de09892dac983fb889824f29fca19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
