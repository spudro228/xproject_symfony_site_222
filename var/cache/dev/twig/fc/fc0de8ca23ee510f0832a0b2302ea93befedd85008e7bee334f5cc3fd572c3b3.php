<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bd1d15e9501099d8e704c1bd36dcb2390ca768e320a89c9a97fa516e76d73ace extends Twig_Template
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
        $__internal_68de451af313dd2963395038a8f9e8af5456adc4bee5c528d8a8e571e4806eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68de451af313dd2963395038a8f9e8af5456adc4bee5c528d8a8e571e4806eef->enter($__internal_68de451af313dd2963395038a8f9e8af5456adc4bee5c528d8a8e571e4806eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fafa00766a47b6b34ec46b667de0bd1157149d0ac0fa8fa7f46272319d714b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafa00766a47b6b34ec46b667de0bd1157149d0ac0fa8fa7f46272319d714b58->enter($__internal_fafa00766a47b6b34ec46b667de0bd1157149d0ac0fa8fa7f46272319d714b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_68de451af313dd2963395038a8f9e8af5456adc4bee5c528d8a8e571e4806eef->leave($__internal_68de451af313dd2963395038a8f9e8af5456adc4bee5c528d8a8e571e4806eef_prof);

        
        $__internal_fafa00766a47b6b34ec46b667de0bd1157149d0ac0fa8fa7f46272319d714b58->leave($__internal_fafa00766a47b6b34ec46b667de0bd1157149d0ac0fa8fa7f46272319d714b58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
