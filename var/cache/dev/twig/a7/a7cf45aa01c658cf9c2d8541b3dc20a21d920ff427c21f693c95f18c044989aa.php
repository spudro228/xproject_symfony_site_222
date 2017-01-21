<?php

/* ::base.html.twig */
class __TwigTemplate_0a362af03c7ef2d556b8cb27efa8a9b935549dde2e8bf07d7100fbc51676c867 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_615106b2302898caf02ebd5bc31553dde16ad5c6c783c0c05f5f9473a2672b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615106b2302898caf02ebd5bc31553dde16ad5c6c783c0c05f5f9473a2672b07->enter($__internal_615106b2302898caf02ebd5bc31553dde16ad5c6c783c0c05f5f9473a2672b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c69942c06642a721828a3ede75c539c97595b7d908cfc0f1e0b122a7b2d01f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69942c06642a721828a3ede75c539c97595b7d908cfc0f1e0b122a7b2d01f3d->enter($__internal_c69942c06642a721828a3ede75c539c97595b7d908cfc0f1e0b122a7b2d01f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "

 ";
        // line 73
        echo "</head>
<body>
";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "</body>
</html>
";
        
        $__internal_615106b2302898caf02ebd5bc31553dde16ad5c6c783c0c05f5f9473a2672b07->leave($__internal_615106b2302898caf02ebd5bc31553dde16ad5c6c783c0c05f5f9473a2672b07_prof);

        
        $__internal_c69942c06642a721828a3ede75c539c97595b7d908cfc0f1e0b122a7b2d01f3d->leave($__internal_c69942c06642a721828a3ede75c539c97595b7d908cfc0f1e0b122a7b2d01f3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_199c6f184c7c7745c6b1f2f3b89e1dcb261c1416d24b823203348e16b064b54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199c6f184c7c7745c6b1f2f3b89e1dcb261c1416d24b823203348e16b064b54c->enter($__internal_199c6f184c7c7745c6b1f2f3b89e1dcb261c1416d24b823203348e16b064b54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_890aae5237cbbd2ca380a0affbf5db009ca62f7926308586a00d06cf1699ab0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890aae5237cbbd2ca380a0affbf5db009ca62f7926308586a00d06cf1699ab0b->enter($__internal_890aae5237cbbd2ca380a0affbf5db009ca62f7926308586a00d06cf1699ab0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_890aae5237cbbd2ca380a0affbf5db009ca62f7926308586a00d06cf1699ab0b->leave($__internal_890aae5237cbbd2ca380a0affbf5db009ca62f7926308586a00d06cf1699ab0b_prof);

        
        $__internal_199c6f184c7c7745c6b1f2f3b89e1dcb261c1416d24b823203348e16b064b54c->leave($__internal_199c6f184c7c7745c6b1f2f3b89e1dcb261c1416d24b823203348e16b064b54c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fbe0f0a620a4f789beecb8303959d886b9add8648b8903932c531bddaef2ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbe0f0a620a4f789beecb8303959d886b9add8648b8903932c531bddaef2ff8->enter($__internal_9fbe0f0a620a4f789beecb8303959d886b9add8648b8903932c531bddaef2ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_728b0c51ba7747f7a2265e475bffc10423848a85ef96816ea8ec5184a950bfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728b0c51ba7747f7a2265e475bffc10423848a85ef96816ea8ec5184a950bfb0->enter($__internal_728b0c51ba7747f7a2265e475bffc10423848a85ef96816ea8ec5184a950bfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@0.6.2/build/pure-min.css\"
              integrity=\"sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css\">
        <link rel=\"stylesheet\" href='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("default/css/blog.css"), "html", null, true);
        echo "'>
        <link href=\"default/css/blog.css\" rel=\"stylesheet\">
    ";
        
        $__internal_728b0c51ba7747f7a2265e475bffc10423848a85ef96816ea8ec5184a950bfb0->leave($__internal_728b0c51ba7747f7a2265e475bffc10423848a85ef96816ea8ec5184a950bfb0_prof);

        
        $__internal_9fbe0f0a620a4f789beecb8303959d886b9add8648b8903932c531bddaef2ff8->leave($__internal_9fbe0f0a620a4f789beecb8303959d886b9add8648b8903932c531bddaef2ff8_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fbfa821f715d4d301c490069685b95bbaa9316ca4bb48d7cb839019a19dfbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fbfa821f715d4d301c490069685b95bbaa9316ca4bb48d7cb839019a19dfbb0->enter($__internal_2fbfa821f715d4d301c490069685b95bbaa9316ca4bb48d7cb839019a19dfbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78ef194133ad9b4f7520b2a33b8f947af7cf0d057d394ca18e9e3d889fd84ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ef194133ad9b4f7520b2a33b8f947af7cf0d057d394ca18e9e3d889fd84ba0->enter($__internal_78ef194133ad9b4f7520b2a33b8f947af7cf0d057d394ca18e9e3d889fd84ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78ef194133ad9b4f7520b2a33b8f947af7cf0d057d394ca18e9e3d889fd84ba0->leave($__internal_78ef194133ad9b4f7520b2a33b8f947af7cf0d057d394ca18e9e3d889fd84ba0_prof);

        
        $__internal_2fbfa821f715d4d301c490069685b95bbaa9316ca4bb48d7cb839019a19dfbb0->leave($__internal_2fbfa821f715d4d301c490069685b95bbaa9316ca4bb48d7cb839019a19dfbb0_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_371f6c25ac9c7d6630414dd3422f9569360c02b9f5245ce56335ac5e8797e2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371f6c25ac9c7d6630414dd3422f9569360c02b9f5245ce56335ac5e8797e2b3->enter($__internal_371f6c25ac9c7d6630414dd3422f9569360c02b9f5245ce56335ac5e8797e2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1ad4f9b9b4cb30695f3bb22108e4cea91d0b786294a3620bcabf499e52ddcf0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad4f9b9b4cb30695f3bb22108e4cea91d0b786294a3620bcabf499e52ddcf0a->enter($__internal_1ad4f9b9b4cb30695f3bb22108e4cea91d0b786294a3620bcabf499e52ddcf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1ad4f9b9b4cb30695f3bb22108e4cea91d0b786294a3620bcabf499e52ddcf0a->leave($__internal_1ad4f9b9b4cb30695f3bb22108e4cea91d0b786294a3620bcabf499e52ddcf0a_prof);

        
        $__internal_371f6c25ac9c7d6630414dd3422f9569360c02b9f5245ce56335ac5e8797e2b3->leave($__internal_371f6c25ac9c7d6630414dd3422f9569360c02b9f5245ce56335ac5e8797e2b3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 76,  113 => 75,  100 => 11,  92 => 7,  83 => 6,  65 => 5,  53 => 77,  51 => 76,  49 => 75,  45 => 73,  41 => 14,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
        <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@0.6.2/build/pure-min.css\"
              integrity=\"sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css\">
        <link rel=\"stylesheet\" href='{{ asset( 'default/css/blog.css') }}'>
        <link href=\"default/css/blog.css\" rel=\"stylesheet\">
    {% endblock %}


 {#   <style>
        table {
            border: 4px double black; /* Параметры границы */
            background: #CCCCCC; /* Цвет фона */
            padding: 10px; /* Поля вокруг текста */
        }

        .go {
            border: none;
        }

        ul.default li {
            list-style-type: none;
            border: 2px solid #42b983; /* Убираем маркеры */
            margin: 5px;
            border-radius: 3px;
            background-color: #fff;
        }

        ul.button_default li {
            display: inline; /* Отображать как строчный элемент */
        }

        .post {
            margin: 10px;
        }

        .post_title {

            background: rgba(66, 185, 131, 0.5);
        }

        button {
            background: #42b983;
            background-image: -webkit-linear-gradient(top, #42b983, #42b983);
            background-image: -moz-linear-gradient(top, #42b983, #42b983);
            background-image: -ms-linear-gradient(top, #42b983, #42b983);
            background-image: -o-linear-gradient(top, #42b983, #42b983);
            background-image: linear-gradient(to bottom, #42b983, #42b983);

            border-radius: 2px;
            font-family: Arial;
            color: #ffffff;
            font-size: 15px;
            background: #42b983;
            padding: 10px 20px 10px 20px;
            border: solid #71c9a0 0px;
            text-decoration: none;
        }

        button:hover {
            background: #3cb0fd;
            text-decoration: none;
        }


    </style>#}
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\app/Resources\\views/base.html.twig");
    }
}
