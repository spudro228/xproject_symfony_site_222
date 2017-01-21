<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_058be39799325383ec81c25925c94d40c3c9000888800023e763d8fce855145c extends Twig_Template
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
        $__internal_1092021067e02c1f9b9163bc9239df73c5c9faae6e1eafcd76f2aa512c7b7c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1092021067e02c1f9b9163bc9239df73c5c9faae6e1eafcd76f2aa512c7b7c4b->enter($__internal_1092021067e02c1f9b9163bc9239df73c5c9faae6e1eafcd76f2aa512c7b7c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_929e62708fe75c239b0831c7aa43c5622f2a26121cfd29a4ab85e476dbd08d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929e62708fe75c239b0831c7aa43c5622f2a26121cfd29a4ab85e476dbd08d7c->enter($__internal_929e62708fe75c239b0831c7aa43c5622f2a26121cfd29a4ab85e476dbd08d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1092021067e02c1f9b9163bc9239df73c5c9faae6e1eafcd76f2aa512c7b7c4b->leave($__internal_1092021067e02c1f9b9163bc9239df73c5c9faae6e1eafcd76f2aa512c7b7c4b_prof);

        
        $__internal_929e62708fe75c239b0831c7aa43c5622f2a26121cfd29a4ab85e476dbd08d7c->leave($__internal_929e62708fe75c239b0831c7aa43c5622f2a26121cfd29a4ab85e476dbd08d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
