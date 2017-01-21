<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_964cc7df20b7bbeba777f1d6d46448674f3dba3b254523d3d33bf7f03989c601 extends Twig_Template
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
        $__internal_ec6f9afea3a1d5282821ed37d3be01afed40de35acc5bbb09bf7d7ecebb4f167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6f9afea3a1d5282821ed37d3be01afed40de35acc5bbb09bf7d7ecebb4f167->enter($__internal_ec6f9afea3a1d5282821ed37d3be01afed40de35acc5bbb09bf7d7ecebb4f167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_12446ae3c0945d02d34deccd250fd7c00f9f2ac878e149b2ce1df017eee23873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12446ae3c0945d02d34deccd250fd7c00f9f2ac878e149b2ce1df017eee23873->enter($__internal_12446ae3c0945d02d34deccd250fd7c00f9f2ac878e149b2ce1df017eee23873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ec6f9afea3a1d5282821ed37d3be01afed40de35acc5bbb09bf7d7ecebb4f167->leave($__internal_ec6f9afea3a1d5282821ed37d3be01afed40de35acc5bbb09bf7d7ecebb4f167_prof);

        
        $__internal_12446ae3c0945d02d34deccd250fd7c00f9f2ac878e149b2ce1df017eee23873->leave($__internal_12446ae3c0945d02d34deccd250fd7c00f9f2ac878e149b2ce1df017eee23873_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
