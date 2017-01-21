<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_602efb91520babc8bfa34801ac537aa9de62298588ad50fbf71dfdb7a40fb092 extends Twig_Template
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
        $__internal_b43efb393997602127a299d2da2589fd818ac747e39ba9db67ec266353f4ef9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43efb393997602127a299d2da2589fd818ac747e39ba9db67ec266353f4ef9d->enter($__internal_b43efb393997602127a299d2da2589fd818ac747e39ba9db67ec266353f4ef9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7c06323491e8301abebd8d2b1a122c4a5440293eac5cc527bf47d149b92cc050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c06323491e8301abebd8d2b1a122c4a5440293eac5cc527bf47d149b92cc050->enter($__internal_7c06323491e8301abebd8d2b1a122c4a5440293eac5cc527bf47d149b92cc050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b43efb393997602127a299d2da2589fd818ac747e39ba9db67ec266353f4ef9d->leave($__internal_b43efb393997602127a299d2da2589fd818ac747e39ba9db67ec266353f4ef9d_prof);

        
        $__internal_7c06323491e8301abebd8d2b1a122c4a5440293eac5cc527bf47d149b92cc050->leave($__internal_7c06323491e8301abebd8d2b1a122c4a5440293eac5cc527bf47d149b92cc050_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
