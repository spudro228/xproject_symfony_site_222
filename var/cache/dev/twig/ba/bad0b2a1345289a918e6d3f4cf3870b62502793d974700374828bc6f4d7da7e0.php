<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_dec925dee6b8d2195b59fffa17ff7ab32cb92eeeeb56be5e4878e52c49d45429 extends Twig_Template
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
        $__internal_525338d231568e052f2a3a12fda8de8016a9f2576463fe88a7f3bb320c790400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525338d231568e052f2a3a12fda8de8016a9f2576463fe88a7f3bb320c790400->enter($__internal_525338d231568e052f2a3a12fda8de8016a9f2576463fe88a7f3bb320c790400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_176cdacfeaff6c754c861c78e4f07523a452982f9bde72693093770b66e69adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176cdacfeaff6c754c861c78e4f07523a452982f9bde72693093770b66e69adb->enter($__internal_176cdacfeaff6c754c861c78e4f07523a452982f9bde72693093770b66e69adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_525338d231568e052f2a3a12fda8de8016a9f2576463fe88a7f3bb320c790400->leave($__internal_525338d231568e052f2a3a12fda8de8016a9f2576463fe88a7f3bb320c790400_prof);

        
        $__internal_176cdacfeaff6c754c861c78e4f07523a452982f9bde72693093770b66e69adb->leave($__internal_176cdacfeaff6c754c861c78e4f07523a452982f9bde72693093770b66e69adb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
