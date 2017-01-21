<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_752f25a521470e3c6529dc0de5a6e3ca82404ffec1a1273b34d8cf532e2a60c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_341c46568de2c7e10485c6d1c01e92aba0dc01675fe9759a950897dcc755857c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341c46568de2c7e10485c6d1c01e92aba0dc01675fe9759a950897dcc755857c->enter($__internal_341c46568de2c7e10485c6d1c01e92aba0dc01675fe9759a950897dcc755857c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_43f80c847e56796cc2aa87da128d895f0814da5a57bc75c520818e0d75527c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f80c847e56796cc2aa87da128d895f0814da5a57bc75c520818e0d75527c3d->enter($__internal_43f80c847e56796cc2aa87da128d895f0814da5a57bc75c520818e0d75527c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_341c46568de2c7e10485c6d1c01e92aba0dc01675fe9759a950897dcc755857c->leave($__internal_341c46568de2c7e10485c6d1c01e92aba0dc01675fe9759a950897dcc755857c_prof);

        
        $__internal_43f80c847e56796cc2aa87da128d895f0814da5a57bc75c520818e0d75527c3d->leave($__internal_43f80c847e56796cc2aa87da128d895f0814da5a57bc75c520818e0d75527c3d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2d142a20bd7173a128035458ace4a2756cf60a4cbf13e872625a79860970d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d142a20bd7173a128035458ace4a2756cf60a4cbf13e872625a79860970d29->enter($__internal_a2d142a20bd7173a128035458ace4a2756cf60a4cbf13e872625a79860970d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b17877952b65308597f00ce8f0ddb5ea1db667d08176633945a657b614b57dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17877952b65308597f00ce8f0ddb5ea1db667d08176633945a657b614b57dd0->enter($__internal_b17877952b65308597f00ce8f0ddb5ea1db667d08176633945a657b614b57dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b17877952b65308597f00ce8f0ddb5ea1db667d08176633945a657b614b57dd0->leave($__internal_b17877952b65308597f00ce8f0ddb5ea1db667d08176633945a657b614b57dd0_prof);

        
        $__internal_a2d142a20bd7173a128035458ace4a2756cf60a4cbf13e872625a79860970d29->leave($__internal_a2d142a20bd7173a128035458ace4a2756cf60a4cbf13e872625a79860970d29_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
