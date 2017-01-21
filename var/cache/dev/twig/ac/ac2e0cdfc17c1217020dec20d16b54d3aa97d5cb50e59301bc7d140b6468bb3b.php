<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a68cbcde137760bf4fe4486547ba3e864b021a90bdb7a63342e8bae4e0bc5465 extends Twig_Template
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
        $__internal_d18c4ec1f1f35e72003d6fae13612726cb7d9f0d3836612d8ca1288158d3af24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18c4ec1f1f35e72003d6fae13612726cb7d9f0d3836612d8ca1288158d3af24->enter($__internal_d18c4ec1f1f35e72003d6fae13612726cb7d9f0d3836612d8ca1288158d3af24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_6f8b33784990803f050f95c7e09eb1381a40fb6d1bd8aff9978a5d5fcba07699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8b33784990803f050f95c7e09eb1381a40fb6d1bd8aff9978a5d5fcba07699->enter($__internal_6f8b33784990803f050f95c7e09eb1381a40fb6d1bd8aff9978a5d5fcba07699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d18c4ec1f1f35e72003d6fae13612726cb7d9f0d3836612d8ca1288158d3af24->leave($__internal_d18c4ec1f1f35e72003d6fae13612726cb7d9f0d3836612d8ca1288158d3af24_prof);

        
        $__internal_6f8b33784990803f050f95c7e09eb1381a40fb6d1bd8aff9978a5d5fcba07699->leave($__internal_6f8b33784990803f050f95c7e09eb1381a40fb6d1bd8aff9978a5d5fcba07699_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
