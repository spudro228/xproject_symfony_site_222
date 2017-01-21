<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dd15ffb3a4dc353bdfa26f3b04e164ee0dfd1b800c2633a9f3c2b9b0cc7b0dc4 extends Twig_Template
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
        $__internal_b2c3424a1d28c25b3fc6334257ce1910bf62ecb789ac3706c6013cd6c39f8779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c3424a1d28c25b3fc6334257ce1910bf62ecb789ac3706c6013cd6c39f8779->enter($__internal_b2c3424a1d28c25b3fc6334257ce1910bf62ecb789ac3706c6013cd6c39f8779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8c0d74cc72a97ab1cb0ae51f963e4de37a6c41ea4de7012b5179d8d20fb0c8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0d74cc72a97ab1cb0ae51f963e4de37a6c41ea4de7012b5179d8d20fb0c8b0->enter($__internal_8c0d74cc72a97ab1cb0ae51f963e4de37a6c41ea4de7012b5179d8d20fb0c8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b2c3424a1d28c25b3fc6334257ce1910bf62ecb789ac3706c6013cd6c39f8779->leave($__internal_b2c3424a1d28c25b3fc6334257ce1910bf62ecb789ac3706c6013cd6c39f8779_prof);

        
        $__internal_8c0d74cc72a97ab1cb0ae51f963e4de37a6c41ea4de7012b5179d8d20fb0c8b0->leave($__internal_8c0d74cc72a97ab1cb0ae51f963e4de37a6c41ea4de7012b5179d8d20fb0c8b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
