<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5fcd67baf3ef581f56e9cab7024b5740145f2df80f6a6615bc58b0e0b2ba1258 extends Twig_Template
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
        $__internal_6786cf9170a69d57f9b1434803e949455286e766820cc5750ecbd08b862572e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6786cf9170a69d57f9b1434803e949455286e766820cc5750ecbd08b862572e6->enter($__internal_6786cf9170a69d57f9b1434803e949455286e766820cc5750ecbd08b862572e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ded6838e30f6c7e068d131c2e92c6926e5bff913a3563b8d48f5b2058bbf8d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded6838e30f6c7e068d131c2e92c6926e5bff913a3563b8d48f5b2058bbf8d7c->enter($__internal_ded6838e30f6c7e068d131c2e92c6926e5bff913a3563b8d48f5b2058bbf8d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6786cf9170a69d57f9b1434803e949455286e766820cc5750ecbd08b862572e6->leave($__internal_6786cf9170a69d57f9b1434803e949455286e766820cc5750ecbd08b862572e6_prof);

        
        $__internal_ded6838e30f6c7e068d131c2e92c6926e5bff913a3563b8d48f5b2058bbf8d7c->leave($__internal_ded6838e30f6c7e068d131c2e92c6926e5bff913a3563b8d48f5b2058bbf8d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
