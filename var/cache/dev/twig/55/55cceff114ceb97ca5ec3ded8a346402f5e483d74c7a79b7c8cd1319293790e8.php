<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4d0dbe2080d5a55c350fb09683ea56be34f01093ba70e19f9e09f82961f7cbed extends Twig_Template
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
        $__internal_fad7d35c6233a6d04f212ec8830eb5a445c5a4beee620fb27524b49d887fb971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad7d35c6233a6d04f212ec8830eb5a445c5a4beee620fb27524b49d887fb971->enter($__internal_fad7d35c6233a6d04f212ec8830eb5a445c5a4beee620fb27524b49d887fb971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_28d4b719eaaffa30c2f63f87a28723a91dc9fd7245eda29d5203f38ab06f3377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d4b719eaaffa30c2f63f87a28723a91dc9fd7245eda29d5203f38ab06f3377->enter($__internal_28d4b719eaaffa30c2f63f87a28723a91dc9fd7245eda29d5203f38ab06f3377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fad7d35c6233a6d04f212ec8830eb5a445c5a4beee620fb27524b49d887fb971->leave($__internal_fad7d35c6233a6d04f212ec8830eb5a445c5a4beee620fb27524b49d887fb971_prof);

        
        $__internal_28d4b719eaaffa30c2f63f87a28723a91dc9fd7245eda29d5203f38ab06f3377->leave($__internal_28d4b719eaaffa30c2f63f87a28723a91dc9fd7245eda29d5203f38ab06f3377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
