<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7d1be95c27426fd0519b6739dc4dc65c050bc595403269808dbba9442658f11a extends Twig_Template
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
        $__internal_40d90feccd5556b1ecca617934c3d5df8d833b075e87850fdde80e63a6f46841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d90feccd5556b1ecca617934c3d5df8d833b075e87850fdde80e63a6f46841->enter($__internal_40d90feccd5556b1ecca617934c3d5df8d833b075e87850fdde80e63a6f46841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_093cb42a9b9c4263504d8832ee8004d7cb32ef18c53a8e04666b5ae291e38161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093cb42a9b9c4263504d8832ee8004d7cb32ef18c53a8e04666b5ae291e38161->enter($__internal_093cb42a9b9c4263504d8832ee8004d7cb32ef18c53a8e04666b5ae291e38161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_40d90feccd5556b1ecca617934c3d5df8d833b075e87850fdde80e63a6f46841->leave($__internal_40d90feccd5556b1ecca617934c3d5df8d833b075e87850fdde80e63a6f46841_prof);

        
        $__internal_093cb42a9b9c4263504d8832ee8004d7cb32ef18c53a8e04666b5ae291e38161->leave($__internal_093cb42a9b9c4263504d8832ee8004d7cb32ef18c53a8e04666b5ae291e38161_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
