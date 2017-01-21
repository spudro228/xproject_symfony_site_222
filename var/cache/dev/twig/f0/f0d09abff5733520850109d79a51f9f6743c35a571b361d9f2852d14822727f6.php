<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7c95a350600f78faca5e688faf628f6872a3a1d26712a75c746af1c64aae1492 extends Twig_Template
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
        $__internal_e40614b22afe482a862839039a41fe430783a1acdcf58e8f6b840176d26c84f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40614b22afe482a862839039a41fe430783a1acdcf58e8f6b840176d26c84f7->enter($__internal_e40614b22afe482a862839039a41fe430783a1acdcf58e8f6b840176d26c84f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6f5be4c119b1df6b28f7383e3ea507022302cd13ae0438e893daef42e5f4be67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5be4c119b1df6b28f7383e3ea507022302cd13ae0438e893daef42e5f4be67->enter($__internal_6f5be4c119b1df6b28f7383e3ea507022302cd13ae0438e893daef42e5f4be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e40614b22afe482a862839039a41fe430783a1acdcf58e8f6b840176d26c84f7->leave($__internal_e40614b22afe482a862839039a41fe430783a1acdcf58e8f6b840176d26c84f7_prof);

        
        $__internal_6f5be4c119b1df6b28f7383e3ea507022302cd13ae0438e893daef42e5f4be67->leave($__internal_6f5be4c119b1df6b28f7383e3ea507022302cd13ae0438e893daef42e5f4be67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
