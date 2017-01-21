<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4b307d624f6382ef6c0410d4cb2a58724b385ecda72f1e5044ba5dac11bc4d53 extends Twig_Template
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
        $__internal_2848d453995c3159c0059b2ef60f47dcfaa531782783d0a7964fb0317610b358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2848d453995c3159c0059b2ef60f47dcfaa531782783d0a7964fb0317610b358->enter($__internal_2848d453995c3159c0059b2ef60f47dcfaa531782783d0a7964fb0317610b358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_dc92179b54904b0794d6ca2cc2abfe7c11f9c1919d0bd3ce462751c54a5604ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc92179b54904b0794d6ca2cc2abfe7c11f9c1919d0bd3ce462751c54a5604ee->enter($__internal_dc92179b54904b0794d6ca2cc2abfe7c11f9c1919d0bd3ce462751c54a5604ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2848d453995c3159c0059b2ef60f47dcfaa531782783d0a7964fb0317610b358->leave($__internal_2848d453995c3159c0059b2ef60f47dcfaa531782783d0a7964fb0317610b358_prof);

        
        $__internal_dc92179b54904b0794d6ca2cc2abfe7c11f9c1919d0bd3ce462751c54a5604ee->leave($__internal_dc92179b54904b0794d6ca2cc2abfe7c11f9c1919d0bd3ce462751c54a5604ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
