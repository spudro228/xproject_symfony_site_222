<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_2391458dcb4a030d4bc35e7fc0b8c1b9753d142bdea7d2600b261bf940871c68 extends Twig_Template
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
        $__internal_24ee151134933f3c427dcad9faf7151a5b90da7a671bcb403e43390597286d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ee151134933f3c427dcad9faf7151a5b90da7a671bcb403e43390597286d0e->enter($__internal_24ee151134933f3c427dcad9faf7151a5b90da7a671bcb403e43390597286d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_61f58d9f9e9d0a02ca23310969ec76c4be65e5a273cb011974723ccea4747f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f58d9f9e9d0a02ca23310969ec76c4be65e5a273cb011974723ccea4747f15->enter($__internal_61f58d9f9e9d0a02ca23310969ec76c4be65e5a273cb011974723ccea4747f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_24ee151134933f3c427dcad9faf7151a5b90da7a671bcb403e43390597286d0e->leave($__internal_24ee151134933f3c427dcad9faf7151a5b90da7a671bcb403e43390597286d0e_prof);

        
        $__internal_61f58d9f9e9d0a02ca23310969ec76c4be65e5a273cb011974723ccea4747f15->leave($__internal_61f58d9f9e9d0a02ca23310969ec76c4be65e5a273cb011974723ccea4747f15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
