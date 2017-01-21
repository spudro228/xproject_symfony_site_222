<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_375223a721493111d79152555e39c9c54eb3071905dd194a752f39d9b1432e98 extends Twig_Template
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
        $__internal_71e51877581cf4ab5ab2168a2c51f60e96eadb20e2f251b14bbe9299ee9b79ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e51877581cf4ab5ab2168a2c51f60e96eadb20e2f251b14bbe9299ee9b79ee->enter($__internal_71e51877581cf4ab5ab2168a2c51f60e96eadb20e2f251b14bbe9299ee9b79ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2d19d7dff485d8b3227a560f92164c16919573259c257c6339d891e982372be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d19d7dff485d8b3227a560f92164c16919573259c257c6339d891e982372be2->enter($__internal_2d19d7dff485d8b3227a560f92164c16919573259c257c6339d891e982372be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_71e51877581cf4ab5ab2168a2c51f60e96eadb20e2f251b14bbe9299ee9b79ee->leave($__internal_71e51877581cf4ab5ab2168a2c51f60e96eadb20e2f251b14bbe9299ee9b79ee_prof);

        
        $__internal_2d19d7dff485d8b3227a560f92164c16919573259c257c6339d891e982372be2->leave($__internal_2d19d7dff485d8b3227a560f92164c16919573259c257c6339d891e982372be2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
