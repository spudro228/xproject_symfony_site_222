<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_98fcc3d7fe881906384917f9a68f51b3d13ec1c86cb26f07a6e8b65acc3b184c extends Twig_Template
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
        $__internal_c5f4ae515451972add3a0ff69fe8f5de459ef8948101458cc343ec1c1dc32c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f4ae515451972add3a0ff69fe8f5de459ef8948101458cc343ec1c1dc32c29->enter($__internal_c5f4ae515451972add3a0ff69fe8f5de459ef8948101458cc343ec1c1dc32c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0b41193bf4de788f04d03e3ebc6983bafc5650286f259b72f253d502a27509a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b41193bf4de788f04d03e3ebc6983bafc5650286f259b72f253d502a27509a3->enter($__internal_0b41193bf4de788f04d03e3ebc6983bafc5650286f259b72f253d502a27509a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c5f4ae515451972add3a0ff69fe8f5de459ef8948101458cc343ec1c1dc32c29->leave($__internal_c5f4ae515451972add3a0ff69fe8f5de459ef8948101458cc343ec1c1dc32c29_prof);

        
        $__internal_0b41193bf4de788f04d03e3ebc6983bafc5650286f259b72f253d502a27509a3->leave($__internal_0b41193bf4de788f04d03e3ebc6983bafc5650286f259b72f253d502a27509a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
