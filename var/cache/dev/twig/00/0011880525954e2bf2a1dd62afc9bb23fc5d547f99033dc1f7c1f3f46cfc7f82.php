<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0a4c488e017b2c75571869156a61df60d0f95a97b4ac928ab85f3f82e34210bb extends Twig_Template
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
        $__internal_9920c74f69c9a8c2560f463c0e16e167d7dcce640b309c658b73bf0fe9bbf3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9920c74f69c9a8c2560f463c0e16e167d7dcce640b309c658b73bf0fe9bbf3a7->enter($__internal_9920c74f69c9a8c2560f463c0e16e167d7dcce640b309c658b73bf0fe9bbf3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_95b2248f1278faf7facdeb506cdb7932327c3dbecc46ebd5fc6b6da3dad188a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b2248f1278faf7facdeb506cdb7932327c3dbecc46ebd5fc6b6da3dad188a1->enter($__internal_95b2248f1278faf7facdeb506cdb7932327c3dbecc46ebd5fc6b6da3dad188a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9920c74f69c9a8c2560f463c0e16e167d7dcce640b309c658b73bf0fe9bbf3a7->leave($__internal_9920c74f69c9a8c2560f463c0e16e167d7dcce640b309c658b73bf0fe9bbf3a7_prof);

        
        $__internal_95b2248f1278faf7facdeb506cdb7932327c3dbecc46ebd5fc6b6da3dad188a1->leave($__internal_95b2248f1278faf7facdeb506cdb7932327c3dbecc46ebd5fc6b6da3dad188a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
