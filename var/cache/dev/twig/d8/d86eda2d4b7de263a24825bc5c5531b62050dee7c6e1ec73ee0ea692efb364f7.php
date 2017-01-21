<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_33085c6e4f16e17e8500caa78b37afcadbb8b489dde0a534f9b1a8618e4609a5 extends Twig_Template
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
        $__internal_dbf3e8b426c3a5809bc82f5e396fa62d35e2220b10129a3dbff3f5d58852ec53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf3e8b426c3a5809bc82f5e396fa62d35e2220b10129a3dbff3f5d58852ec53->enter($__internal_dbf3e8b426c3a5809bc82f5e396fa62d35e2220b10129a3dbff3f5d58852ec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d576eeed5fa6fb7e8327034f15ab6b53c135c6b569851a4ea00ad772f272b9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d576eeed5fa6fb7e8327034f15ab6b53c135c6b569851a4ea00ad772f272b9ef->enter($__internal_d576eeed5fa6fb7e8327034f15ab6b53c135c6b569851a4ea00ad772f272b9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_dbf3e8b426c3a5809bc82f5e396fa62d35e2220b10129a3dbff3f5d58852ec53->leave($__internal_dbf3e8b426c3a5809bc82f5e396fa62d35e2220b10129a3dbff3f5d58852ec53_prof);

        
        $__internal_d576eeed5fa6fb7e8327034f15ab6b53c135c6b569851a4ea00ad772f272b9ef->leave($__internal_d576eeed5fa6fb7e8327034f15ab6b53c135c6b569851a4ea00ad772f272b9ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
