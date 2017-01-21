<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7401db27dc7f59e352eb8a3c48e1545d25fecb7643726aa2b1376d4ef9374511 extends Twig_Template
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
        $__internal_f1b7a6505792d595fb59538372ea8436ec44ee06cd0406482170a8acc930128d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b7a6505792d595fb59538372ea8436ec44ee06cd0406482170a8acc930128d->enter($__internal_f1b7a6505792d595fb59538372ea8436ec44ee06cd0406482170a8acc930128d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_15d14f74dee73cd8708926ec88004eb0fd78e9581ae87281f184ad0a6cef8080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d14f74dee73cd8708926ec88004eb0fd78e9581ae87281f184ad0a6cef8080->enter($__internal_15d14f74dee73cd8708926ec88004eb0fd78e9581ae87281f184ad0a6cef8080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f1b7a6505792d595fb59538372ea8436ec44ee06cd0406482170a8acc930128d->leave($__internal_f1b7a6505792d595fb59538372ea8436ec44ee06cd0406482170a8acc930128d_prof);

        
        $__internal_15d14f74dee73cd8708926ec88004eb0fd78e9581ae87281f184ad0a6cef8080->leave($__internal_15d14f74dee73cd8708926ec88004eb0fd78e9581ae87281f184ad0a6cef8080_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
