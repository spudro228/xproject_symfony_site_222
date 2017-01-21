<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_641856b8a6f8ec832d47a0e95ee7264e6ef266ed4db6b51c3178cc86228016f4 extends Twig_Template
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
        $__internal_2f3542019587ba690fe5e3c27be2a357d8ee8775c0b72b0a86b771814d6fe8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f3542019587ba690fe5e3c27be2a357d8ee8775c0b72b0a86b771814d6fe8d9->enter($__internal_2f3542019587ba690fe5e3c27be2a357d8ee8775c0b72b0a86b771814d6fe8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a4fce81ed85c34034a4795c9e83d3991c5fa3829dc5694a686f67ddef8624744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fce81ed85c34034a4795c9e83d3991c5fa3829dc5694a686f67ddef8624744->enter($__internal_a4fce81ed85c34034a4795c9e83d3991c5fa3829dc5694a686f67ddef8624744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2f3542019587ba690fe5e3c27be2a357d8ee8775c0b72b0a86b771814d6fe8d9->leave($__internal_2f3542019587ba690fe5e3c27be2a357d8ee8775c0b72b0a86b771814d6fe8d9_prof);

        
        $__internal_a4fce81ed85c34034a4795c9e83d3991c5fa3829dc5694a686f67ddef8624744->leave($__internal_a4fce81ed85c34034a4795c9e83d3991c5fa3829dc5694a686f67ddef8624744_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
