<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_351a2e0efa3ceaf37c1584f844428b52ed0a5cdf9109041fec38f99399e6b9e8 extends Twig_Template
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
        $__internal_bfa756cbc604c64970c2ed54416a37f89c281586e9db035aaae88a3705dd8d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa756cbc604c64970c2ed54416a37f89c281586e9db035aaae88a3705dd8d42->enter($__internal_bfa756cbc604c64970c2ed54416a37f89c281586e9db035aaae88a3705dd8d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_941c338ce9b97ab525f04ec11ebb5cca6824ff9cfd5369091b29b191d2431fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941c338ce9b97ab525f04ec11ebb5cca6824ff9cfd5369091b29b191d2431fdc->enter($__internal_941c338ce9b97ab525f04ec11ebb5cca6824ff9cfd5369091b29b191d2431fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bfa756cbc604c64970c2ed54416a37f89c281586e9db035aaae88a3705dd8d42->leave($__internal_bfa756cbc604c64970c2ed54416a37f89c281586e9db035aaae88a3705dd8d42_prof);

        
        $__internal_941c338ce9b97ab525f04ec11ebb5cca6824ff9cfd5369091b29b191d2431fdc->leave($__internal_941c338ce9b97ab525f04ec11ebb5cca6824ff9cfd5369091b29b191d2431fdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
