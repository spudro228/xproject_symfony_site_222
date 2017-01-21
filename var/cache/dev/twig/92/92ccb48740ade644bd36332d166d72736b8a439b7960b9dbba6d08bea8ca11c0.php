<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0e643fb42a5ba31a67a2163dc70b46edc2ae919cf641a1254a8e4a6a9a6a5f6f extends Twig_Template
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
        $__internal_61f89aaf79c18bb2e87206372f432a4aca2a88577c639ea10d516ce22f438fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f89aaf79c18bb2e87206372f432a4aca2a88577c639ea10d516ce22f438fe3->enter($__internal_61f89aaf79c18bb2e87206372f432a4aca2a88577c639ea10d516ce22f438fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_96c46b86c89e48b3465a98a9f5842681fef137fef8847313379d4e8e3aae9295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c46b86c89e48b3465a98a9f5842681fef137fef8847313379d4e8e3aae9295->enter($__internal_96c46b86c89e48b3465a98a9f5842681fef137fef8847313379d4e8e3aae9295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_61f89aaf79c18bb2e87206372f432a4aca2a88577c639ea10d516ce22f438fe3->leave($__internal_61f89aaf79c18bb2e87206372f432a4aca2a88577c639ea10d516ce22f438fe3_prof);

        
        $__internal_96c46b86c89e48b3465a98a9f5842681fef137fef8847313379d4e8e3aae9295->leave($__internal_96c46b86c89e48b3465a98a9f5842681fef137fef8847313379d4e8e3aae9295_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
