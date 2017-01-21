<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa30f01aa88db4f5a4494a70a713563b06d7dff144725ad3e156f80a111ab39e extends Twig_Template
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
        $__internal_8057f452568b5fe7fe779c9610f49e574b13e20d7f63821db1a7ac408148c50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8057f452568b5fe7fe779c9610f49e574b13e20d7f63821db1a7ac408148c50d->enter($__internal_8057f452568b5fe7fe779c9610f49e574b13e20d7f63821db1a7ac408148c50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c1a7e2703f8621049030ce98ace7e198436f2711a3a163e7c385ad0aa57bdcf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a7e2703f8621049030ce98ace7e198436f2711a3a163e7c385ad0aa57bdcf2->enter($__internal_c1a7e2703f8621049030ce98ace7e198436f2711a3a163e7c385ad0aa57bdcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8057f452568b5fe7fe779c9610f49e574b13e20d7f63821db1a7ac408148c50d->leave($__internal_8057f452568b5fe7fe779c9610f49e574b13e20d7f63821db1a7ac408148c50d_prof);

        
        $__internal_c1a7e2703f8621049030ce98ace7e198436f2711a3a163e7c385ad0aa57bdcf2->leave($__internal_c1a7e2703f8621049030ce98ace7e198436f2711a3a163e7c385ad0aa57bdcf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
