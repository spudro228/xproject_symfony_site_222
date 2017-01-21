<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5f901669cb73d72bc00e0d7453196fd0ac79288e788c11e23866716b15b8f6f0 extends Twig_Template
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
        $__internal_61a6b04f540cca57822e410e435073c6094dabd3d0ef9c18d85c3f7826db2805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a6b04f540cca57822e410e435073c6094dabd3d0ef9c18d85c3f7826db2805->enter($__internal_61a6b04f540cca57822e410e435073c6094dabd3d0ef9c18d85c3f7826db2805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6306dd3f16e0ec3279e101514fb504ae70ce45ddbb1abb6205f77f2e1ad233af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6306dd3f16e0ec3279e101514fb504ae70ce45ddbb1abb6205f77f2e1ad233af->enter($__internal_6306dd3f16e0ec3279e101514fb504ae70ce45ddbb1abb6205f77f2e1ad233af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_61a6b04f540cca57822e410e435073c6094dabd3d0ef9c18d85c3f7826db2805->leave($__internal_61a6b04f540cca57822e410e435073c6094dabd3d0ef9c18d85c3f7826db2805_prof);

        
        $__internal_6306dd3f16e0ec3279e101514fb504ae70ce45ddbb1abb6205f77f2e1ad233af->leave($__internal_6306dd3f16e0ec3279e101514fb504ae70ce45ddbb1abb6205f77f2e1ad233af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
