<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_73c13df1b6f2e49eb3e479dfc0776425ced7e3be380aa96f2b489dcb9861f4e5 extends Twig_Template
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
        $__internal_8b8d46849f6c43980afceb311d671b31aabe67a934ea5c7b016ea663c8f8fb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8d46849f6c43980afceb311d671b31aabe67a934ea5c7b016ea663c8f8fb6f->enter($__internal_8b8d46849f6c43980afceb311d671b31aabe67a934ea5c7b016ea663c8f8fb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3eb78e4e03b461a6264e486c361594057ccf2fa8891298e1dde4fc1b6296b83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb78e4e03b461a6264e486c361594057ccf2fa8891298e1dde4fc1b6296b83e->enter($__internal_3eb78e4e03b461a6264e486c361594057ccf2fa8891298e1dde4fc1b6296b83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8b8d46849f6c43980afceb311d671b31aabe67a934ea5c7b016ea663c8f8fb6f->leave($__internal_8b8d46849f6c43980afceb311d671b31aabe67a934ea5c7b016ea663c8f8fb6f_prof);

        
        $__internal_3eb78e4e03b461a6264e486c361594057ccf2fa8891298e1dde4fc1b6296b83e->leave($__internal_3eb78e4e03b461a6264e486c361594057ccf2fa8891298e1dde4fc1b6296b83e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
