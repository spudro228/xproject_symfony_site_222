<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_66565c79141fa5cb8eec38f9cd1368a7e57ef1cdac179602efeba1d72e40a69a extends Twig_Template
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
        $__internal_1f2573d1ccf6fd2d05a39b56a7ee46f2a410885850c04cfb76be9f5f5fa521fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2573d1ccf6fd2d05a39b56a7ee46f2a410885850c04cfb76be9f5f5fa521fe->enter($__internal_1f2573d1ccf6fd2d05a39b56a7ee46f2a410885850c04cfb76be9f5f5fa521fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_efff20c51d12a037673ac16607452547525f70d00ff58fef7f512b955f1535bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efff20c51d12a037673ac16607452547525f70d00ff58fef7f512b955f1535bc->enter($__internal_efff20c51d12a037673ac16607452547525f70d00ff58fef7f512b955f1535bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1f2573d1ccf6fd2d05a39b56a7ee46f2a410885850c04cfb76be9f5f5fa521fe->leave($__internal_1f2573d1ccf6fd2d05a39b56a7ee46f2a410885850c04cfb76be9f5f5fa521fe_prof);

        
        $__internal_efff20c51d12a037673ac16607452547525f70d00ff58fef7f512b955f1535bc->leave($__internal_efff20c51d12a037673ac16607452547525f70d00ff58fef7f512b955f1535bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
