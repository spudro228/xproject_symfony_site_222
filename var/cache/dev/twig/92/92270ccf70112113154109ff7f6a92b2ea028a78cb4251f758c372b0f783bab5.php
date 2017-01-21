<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_dc5766abfee2c4bde02ca2aef48072f97d3ca032590196fa5180cc115f16a0ce extends Twig_Template
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
        $__internal_abab1de98b895c5ea17d22ac8223dac28ceaaf4f36f253ddf79c6634d90a1ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abab1de98b895c5ea17d22ac8223dac28ceaaf4f36f253ddf79c6634d90a1ba4->enter($__internal_abab1de98b895c5ea17d22ac8223dac28ceaaf4f36f253ddf79c6634d90a1ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0f9f64c9746215a7f8f4809fb022764b94f083a28daacb5ed7578d936707026f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9f64c9746215a7f8f4809fb022764b94f083a28daacb5ed7578d936707026f->enter($__internal_0f9f64c9746215a7f8f4809fb022764b94f083a28daacb5ed7578d936707026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_abab1de98b895c5ea17d22ac8223dac28ceaaf4f36f253ddf79c6634d90a1ba4->leave($__internal_abab1de98b895c5ea17d22ac8223dac28ceaaf4f36f253ddf79c6634d90a1ba4_prof);

        
        $__internal_0f9f64c9746215a7f8f4809fb022764b94f083a28daacb5ed7578d936707026f->leave($__internal_0f9f64c9746215a7f8f4809fb022764b94f083a28daacb5ed7578d936707026f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
