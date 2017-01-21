<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_4430e58cf7c6a71c9f66d51dcf91a8c018675152b8655f43f4a6cbc3fd1274c2 extends Twig_Template
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
        $__internal_1e497019faf379a40e4400dd0db12a7ba8f7919f81f617ffcfb862037d2b87e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e497019faf379a40e4400dd0db12a7ba8f7919f81f617ffcfb862037d2b87e4->enter($__internal_1e497019faf379a40e4400dd0db12a7ba8f7919f81f617ffcfb862037d2b87e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_334fdb0c272ea217395e82a7ec6e28f7f677a6bf71ec051d3236a3ebb5665132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334fdb0c272ea217395e82a7ec6e28f7f677a6bf71ec051d3236a3ebb5665132->enter($__internal_334fdb0c272ea217395e82a7ec6e28f7f677a6bf71ec051d3236a3ebb5665132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_1e497019faf379a40e4400dd0db12a7ba8f7919f81f617ffcfb862037d2b87e4->leave($__internal_1e497019faf379a40e4400dd0db12a7ba8f7919f81f617ffcfb862037d2b87e4_prof);

        
        $__internal_334fdb0c272ea217395e82a7ec6e28f7f677a6bf71ec051d3236a3ebb5665132->leave($__internal_334fdb0c272ea217395e82a7ec6e28f7f677a6bf71ec051d3236a3ebb5665132_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
