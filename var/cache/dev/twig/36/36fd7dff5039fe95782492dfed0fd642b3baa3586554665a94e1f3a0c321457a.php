<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_619d0fc14d822d4d8fd64713a4201c08c8ebc370109129feed2861b31056027b extends Twig_Template
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
        $__internal_69d2de21375e107382ac0992fc027189ddf8ba220416b3dfc113e00cb6d10b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d2de21375e107382ac0992fc027189ddf8ba220416b3dfc113e00cb6d10b89->enter($__internal_69d2de21375e107382ac0992fc027189ddf8ba220416b3dfc113e00cb6d10b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4e51c7c06f4562dbc85becb383e2ea8caf8f9f8bd4e3be996958c1cc3c0fea1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e51c7c06f4562dbc85becb383e2ea8caf8f9f8bd4e3be996958c1cc3c0fea1e->enter($__internal_4e51c7c06f4562dbc85becb383e2ea8caf8f9f8bd4e3be996958c1cc3c0fea1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_69d2de21375e107382ac0992fc027189ddf8ba220416b3dfc113e00cb6d10b89->leave($__internal_69d2de21375e107382ac0992fc027189ddf8ba220416b3dfc113e00cb6d10b89_prof);

        
        $__internal_4e51c7c06f4562dbc85becb383e2ea8caf8f9f8bd4e3be996958c1cc3c0fea1e->leave($__internal_4e51c7c06f4562dbc85becb383e2ea8caf8f9f8bd4e3be996958c1cc3c0fea1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
