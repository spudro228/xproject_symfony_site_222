<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3ea1a20949b736125273ed2f1cc5e381310819876bb0cc0b03a0a299308ea3de extends Twig_Template
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
        $__internal_5d7b81296491a66636ac1bdcf45307aecd0e16da286cae694628a43815dc8d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7b81296491a66636ac1bdcf45307aecd0e16da286cae694628a43815dc8d1f->enter($__internal_5d7b81296491a66636ac1bdcf45307aecd0e16da286cae694628a43815dc8d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7095c02f27925aace5479ea667c9afd1a896bee7638493deb77b64dad3aae71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7095c02f27925aace5479ea667c9afd1a896bee7638493deb77b64dad3aae71f->enter($__internal_7095c02f27925aace5479ea667c9afd1a896bee7638493deb77b64dad3aae71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5d7b81296491a66636ac1bdcf45307aecd0e16da286cae694628a43815dc8d1f->leave($__internal_5d7b81296491a66636ac1bdcf45307aecd0e16da286cae694628a43815dc8d1f_prof);

        
        $__internal_7095c02f27925aace5479ea667c9afd1a896bee7638493deb77b64dad3aae71f->leave($__internal_7095c02f27925aace5479ea667c9afd1a896bee7638493deb77b64dad3aae71f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
