<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_3836afca79ff206d0dfa404692c7f89f51cb52c37ed0c807f1f430fe2b2dc313 extends Twig_Template
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
        $__internal_375297e090353b805782049186f00ee36d9c387ff08b300339a0e8d81bbb2ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375297e090353b805782049186f00ee36d9c387ff08b300339a0e8d81bbb2ec5->enter($__internal_375297e090353b805782049186f00ee36d9c387ff08b300339a0e8d81bbb2ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8b9439b47129949fea80a60f605dc3b4d56a5c9b7996125aa4d52dcac965f1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9439b47129949fea80a60f605dc3b4d56a5c9b7996125aa4d52dcac965f1f4->enter($__internal_8b9439b47129949fea80a60f605dc3b4d56a5c9b7996125aa4d52dcac965f1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_375297e090353b805782049186f00ee36d9c387ff08b300339a0e8d81bbb2ec5->leave($__internal_375297e090353b805782049186f00ee36d9c387ff08b300339a0e8d81bbb2ec5_prof);

        
        $__internal_8b9439b47129949fea80a60f605dc3b4d56a5c9b7996125aa4d52dcac965f1f4->leave($__internal_8b9439b47129949fea80a60f605dc3b4d56a5c9b7996125aa4d52dcac965f1f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
