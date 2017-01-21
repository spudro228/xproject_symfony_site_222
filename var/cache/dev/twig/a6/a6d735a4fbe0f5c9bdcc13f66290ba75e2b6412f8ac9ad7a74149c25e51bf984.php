<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dde2a12c8317dc9df7e2dd7ee80985bb0b2ea83c02cd51f786a8fec75f04962b extends Twig_Template
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
        $__internal_ff533c2912eddf118937758fb45571a800f7b1e492d881ea8bb7ff2087c66dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff533c2912eddf118937758fb45571a800f7b1e492d881ea8bb7ff2087c66dda->enter($__internal_ff533c2912eddf118937758fb45571a800f7b1e492d881ea8bb7ff2087c66dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_26f7adfe6fb62bd77dc298a4e7a2a3bc703525bed307507c8386141b71a6cdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f7adfe6fb62bd77dc298a4e7a2a3bc703525bed307507c8386141b71a6cdac->enter($__internal_26f7adfe6fb62bd77dc298a4e7a2a3bc703525bed307507c8386141b71a6cdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ff533c2912eddf118937758fb45571a800f7b1e492d881ea8bb7ff2087c66dda->leave($__internal_ff533c2912eddf118937758fb45571a800f7b1e492d881ea8bb7ff2087c66dda_prof);

        
        $__internal_26f7adfe6fb62bd77dc298a4e7a2a3bc703525bed307507c8386141b71a6cdac->leave($__internal_26f7adfe6fb62bd77dc298a4e7a2a3bc703525bed307507c8386141b71a6cdac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
