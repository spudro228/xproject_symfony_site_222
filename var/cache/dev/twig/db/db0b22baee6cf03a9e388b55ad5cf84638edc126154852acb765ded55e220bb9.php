<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_29765618769411ea4509c69acc680365b96a0e0b4d69cfa80f051378967b94ab extends Twig_Template
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
        $__internal_60accc395cad7f859eda7294a2880068163e66959c3012463f4fa5a47f5dbc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60accc395cad7f859eda7294a2880068163e66959c3012463f4fa5a47f5dbc05->enter($__internal_60accc395cad7f859eda7294a2880068163e66959c3012463f4fa5a47f5dbc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ca772c386c0373551fd2382a81c99a04b1a8e3564f7e85eb83c17a4f216342da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca772c386c0373551fd2382a81c99a04b1a8e3564f7e85eb83c17a4f216342da->enter($__internal_ca772c386c0373551fd2382a81c99a04b1a8e3564f7e85eb83c17a4f216342da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_60accc395cad7f859eda7294a2880068163e66959c3012463f4fa5a47f5dbc05->leave($__internal_60accc395cad7f859eda7294a2880068163e66959c3012463f4fa5a47f5dbc05_prof);

        
        $__internal_ca772c386c0373551fd2382a81c99a04b1a8e3564f7e85eb83c17a4f216342da->leave($__internal_ca772c386c0373551fd2382a81c99a04b1a8e3564f7e85eb83c17a4f216342da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
