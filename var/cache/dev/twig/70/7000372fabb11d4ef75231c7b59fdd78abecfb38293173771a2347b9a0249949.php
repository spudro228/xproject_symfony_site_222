<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_747d9ae704ef2effe77b61ce04775a2fef8ea38b9c3253fc5abf895be41b9138 extends Twig_Template
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
        $__internal_770a3ab010012eccaef14c9e8b48529fad5a1310b0462f29c18e0762502fdb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770a3ab010012eccaef14c9e8b48529fad5a1310b0462f29c18e0762502fdb7b->enter($__internal_770a3ab010012eccaef14c9e8b48529fad5a1310b0462f29c18e0762502fdb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d4c78b1d64de105a0173a64a2ca2a8989aca41fc25798301b73ba87815cbce56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c78b1d64de105a0173a64a2ca2a8989aca41fc25798301b73ba87815cbce56->enter($__internal_d4c78b1d64de105a0173a64a2ca2a8989aca41fc25798301b73ba87815cbce56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_770a3ab010012eccaef14c9e8b48529fad5a1310b0462f29c18e0762502fdb7b->leave($__internal_770a3ab010012eccaef14c9e8b48529fad5a1310b0462f29c18e0762502fdb7b_prof);

        
        $__internal_d4c78b1d64de105a0173a64a2ca2a8989aca41fc25798301b73ba87815cbce56->leave($__internal_d4c78b1d64de105a0173a64a2ca2a8989aca41fc25798301b73ba87815cbce56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
