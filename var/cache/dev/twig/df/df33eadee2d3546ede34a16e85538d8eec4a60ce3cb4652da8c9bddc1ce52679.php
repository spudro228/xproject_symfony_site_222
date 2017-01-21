<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e6d7120167f604237b1a5bab75894fc7715e5cc817312f020c860701117d8fb7 extends Twig_Template
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
        $__internal_9fc8510397c617425df97c04c33d535305bdd5ca898f1ad946b78c80129a49e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc8510397c617425df97c04c33d535305bdd5ca898f1ad946b78c80129a49e4->enter($__internal_9fc8510397c617425df97c04c33d535305bdd5ca898f1ad946b78c80129a49e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_9aef2736452addcd81c892c377fa86faf6e7efdd7c5f5baec3f66d67590b5bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aef2736452addcd81c892c377fa86faf6e7efdd7c5f5baec3f66d67590b5bf2->enter($__internal_9aef2736452addcd81c892c377fa86faf6e7efdd7c5f5baec3f66d67590b5bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9fc8510397c617425df97c04c33d535305bdd5ca898f1ad946b78c80129a49e4->leave($__internal_9fc8510397c617425df97c04c33d535305bdd5ca898f1ad946b78c80129a49e4_prof);

        
        $__internal_9aef2736452addcd81c892c377fa86faf6e7efdd7c5f5baec3f66d67590b5bf2->leave($__internal_9aef2736452addcd81c892c377fa86faf6e7efdd7c5f5baec3f66d67590b5bf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
