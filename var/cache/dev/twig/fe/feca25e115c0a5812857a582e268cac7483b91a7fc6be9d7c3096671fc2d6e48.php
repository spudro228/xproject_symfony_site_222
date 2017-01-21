<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_41071c6b8278accf0da341aa4a21fd44c2f937209fa7c2ed454bebf5b47c1691 extends Twig_Template
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
        $__internal_50f41bd3f755d019b82e00702f940e147794b87bd663a832a9febe052db9b724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f41bd3f755d019b82e00702f940e147794b87bd663a832a9febe052db9b724->enter($__internal_50f41bd3f755d019b82e00702f940e147794b87bd663a832a9febe052db9b724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_47e16eaa60f049455894a5f2728fb7ada840a525d431d3f49f0c57981dfdba14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e16eaa60f049455894a5f2728fb7ada840a525d431d3f49f0c57981dfdba14->enter($__internal_47e16eaa60f049455894a5f2728fb7ada840a525d431d3f49f0c57981dfdba14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_50f41bd3f755d019b82e00702f940e147794b87bd663a832a9febe052db9b724->leave($__internal_50f41bd3f755d019b82e00702f940e147794b87bd663a832a9febe052db9b724_prof);

        
        $__internal_47e16eaa60f049455894a5f2728fb7ada840a525d431d3f49f0c57981dfdba14->leave($__internal_47e16eaa60f049455894a5f2728fb7ada840a525d431d3f49f0c57981dfdba14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
