<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1625c32df743af88e9bccef8a60533f1d557696327e2103d097060c682ff41bb extends Twig_Template
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
        $__internal_cfa08637843c9fac61ca5d8854bd2aedc648a3f462d19b1d6e640c1102f5dafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa08637843c9fac61ca5d8854bd2aedc648a3f462d19b1d6e640c1102f5dafd->enter($__internal_cfa08637843c9fac61ca5d8854bd2aedc648a3f462d19b1d6e640c1102f5dafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_21c38fe39230ace84b10c697bc67cb5cc8421863ddbe44ffcc4bf2d1813d5eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c38fe39230ace84b10c697bc67cb5cc8421863ddbe44ffcc4bf2d1813d5eb5->enter($__internal_21c38fe39230ace84b10c697bc67cb5cc8421863ddbe44ffcc4bf2d1813d5eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_cfa08637843c9fac61ca5d8854bd2aedc648a3f462d19b1d6e640c1102f5dafd->leave($__internal_cfa08637843c9fac61ca5d8854bd2aedc648a3f462d19b1d6e640c1102f5dafd_prof);

        
        $__internal_21c38fe39230ace84b10c697bc67cb5cc8421863ddbe44ffcc4bf2d1813d5eb5->leave($__internal_21c38fe39230ace84b10c697bc67cb5cc8421863ddbe44ffcc4bf2d1813d5eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
