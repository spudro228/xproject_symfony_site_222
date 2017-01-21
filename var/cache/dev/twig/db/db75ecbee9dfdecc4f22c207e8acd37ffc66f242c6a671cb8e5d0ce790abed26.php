<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_aca410a350d17100a21d327a80ec19bd34aa2cf6bf19438e6b1d9ca22d1138cf extends Twig_Template
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
        $__internal_215858b41c3727df5ddfe03001e8b9cd9f88ab60c1444e894d4a036ef74e5575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215858b41c3727df5ddfe03001e8b9cd9f88ab60c1444e894d4a036ef74e5575->enter($__internal_215858b41c3727df5ddfe03001e8b9cd9f88ab60c1444e894d4a036ef74e5575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c81584ae4233c7d279acfc21fb52dd483f5e5595ef8f0a7effb25d2efd09b8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81584ae4233c7d279acfc21fb52dd483f5e5595ef8f0a7effb25d2efd09b8a9->enter($__internal_c81584ae4233c7d279acfc21fb52dd483f5e5595ef8f0a7effb25d2efd09b8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_215858b41c3727df5ddfe03001e8b9cd9f88ab60c1444e894d4a036ef74e5575->leave($__internal_215858b41c3727df5ddfe03001e8b9cd9f88ab60c1444e894d4a036ef74e5575_prof);

        
        $__internal_c81584ae4233c7d279acfc21fb52dd483f5e5595ef8f0a7effb25d2efd09b8a9->leave($__internal_c81584ae4233c7d279acfc21fb52dd483f5e5595ef8f0a7effb25d2efd09b8a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
