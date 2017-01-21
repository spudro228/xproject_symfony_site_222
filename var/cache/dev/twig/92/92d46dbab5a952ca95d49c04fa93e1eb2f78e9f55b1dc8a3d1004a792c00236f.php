<?php

/* base.html.twig */
class __TwigTemplate_d66d3406007f9d08ae7bb8f262bcb0443895f92c0fdb78e762393cd5932fb456 extends Twig_Template
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
        $__internal_7b0f7e21f860fec38f368cc6796e96eff19a4fe6ee27b3e5e7e8322d3defbe46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0f7e21f860fec38f368cc6796e96eff19a4fe6ee27b3e5e7e8322d3defbe46->enter($__internal_7b0f7e21f860fec38f368cc6796e96eff19a4fe6ee27b3e5e7e8322d3defbe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6befdfe07095f9b5541fd552fa2af662871276cf29c5fc2d73baa3c09f072981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6befdfe07095f9b5541fd552fa2af662871276cf29c5fc2d73baa3c09f072981->enter($__internal_6befdfe07095f9b5541fd552fa2af662871276cf29c5fc2d73baa3c09f072981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7b0f7e21f860fec38f368cc6796e96eff19a4fe6ee27b3e5e7e8322d3defbe46->leave($__internal_7b0f7e21f860fec38f368cc6796e96eff19a4fe6ee27b3e5e7e8322d3defbe46_prof);

        
        $__internal_6befdfe07095f9b5541fd552fa2af662871276cf29c5fc2d73baa3c09f072981->leave($__internal_6befdfe07095f9b5541fd552fa2af662871276cf29c5fc2d73baa3c09f072981_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f75f11aa1fe92061bbb1a958609907146ad258463791cb8d228c46a007856c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75f11aa1fe92061bbb1a958609907146ad258463791cb8d228c46a007856c40->enter($__internal_f75f11aa1fe92061bbb1a958609907146ad258463791cb8d228c46a007856c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d36f28bf38d6735e91fc708e871839443f5c2fdf77d469a5d99c87d7bb80cea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36f28bf38d6735e91fc708e871839443f5c2fdf77d469a5d99c87d7bb80cea0->enter($__internal_d36f28bf38d6735e91fc708e871839443f5c2fdf77d469a5d99c87d7bb80cea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d36f28bf38d6735e91fc708e871839443f5c2fdf77d469a5d99c87d7bb80cea0->leave($__internal_d36f28bf38d6735e91fc708e871839443f5c2fdf77d469a5d99c87d7bb80cea0_prof);

        
        $__internal_f75f11aa1fe92061bbb1a958609907146ad258463791cb8d228c46a007856c40->leave($__internal_f75f11aa1fe92061bbb1a958609907146ad258463791cb8d228c46a007856c40_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d15b6eccbb8ff2f176c3c2f0d1b7ed931c7d660094e571286402a011b9ff421a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15b6eccbb8ff2f176c3c2f0d1b7ed931c7d660094e571286402a011b9ff421a->enter($__internal_d15b6eccbb8ff2f176c3c2f0d1b7ed931c7d660094e571286402a011b9ff421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f39d5a6d8babbb182bd5cbe7eeedbd524e0d292a1a41753f71bafdf61b7c1939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39d5a6d8babbb182bd5cbe7eeedbd524e0d292a1a41753f71bafdf61b7c1939->enter($__internal_f39d5a6d8babbb182bd5cbe7eeedbd524e0d292a1a41753f71bafdf61b7c1939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f39d5a6d8babbb182bd5cbe7eeedbd524e0d292a1a41753f71bafdf61b7c1939->leave($__internal_f39d5a6d8babbb182bd5cbe7eeedbd524e0d292a1a41753f71bafdf61b7c1939_prof);

        
        $__internal_d15b6eccbb8ff2f176c3c2f0d1b7ed931c7d660094e571286402a011b9ff421a->leave($__internal_d15b6eccbb8ff2f176c3c2f0d1b7ed931c7d660094e571286402a011b9ff421a_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0d6d5b4c6e0ab2e6d4432d753a1febcf2e46a41bfeae650cc001649f9bb3b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d6d5b4c6e0ab2e6d4432d753a1febcf2e46a41bfeae650cc001649f9bb3b5e->enter($__internal_f0d6d5b4c6e0ab2e6d4432d753a1febcf2e46a41bfeae650cc001649f9bb3b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08ad35b0a97bd834bf44b257f9f7d4a3a4353a8889ae6a737a3494557e4718f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ad35b0a97bd834bf44b257f9f7d4a3a4353a8889ae6a737a3494557e4718f4->enter($__internal_08ad35b0a97bd834bf44b257f9f7d4a3a4353a8889ae6a737a3494557e4718f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08ad35b0a97bd834bf44b257f9f7d4a3a4353a8889ae6a737a3494557e4718f4->leave($__internal_08ad35b0a97bd834bf44b257f9f7d4a3a4353a8889ae6a737a3494557e4718f4_prof);

        
        $__internal_f0d6d5b4c6e0ab2e6d4432d753a1febcf2e46a41bfeae650cc001649f9bb3b5e->leave($__internal_f0d6d5b4c6e0ab2e6d4432d753a1febcf2e46a41bfeae650cc001649f9bb3b5e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9315237ae533788e07fbd0db5fe8d17557daedd7a6856b0277365636116b901e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9315237ae533788e07fbd0db5fe8d17557daedd7a6856b0277365636116b901e->enter($__internal_9315237ae533788e07fbd0db5fe8d17557daedd7a6856b0277365636116b901e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cf86b7564afc11987cc218e25f10996a8ded598a4846591ad0fcc487d1805463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf86b7564afc11987cc218e25f10996a8ded598a4846591ad0fcc487d1805463->enter($__internal_cf86b7564afc11987cc218e25f10996a8ded598a4846591ad0fcc487d1805463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf86b7564afc11987cc218e25f10996a8ded598a4846591ad0fcc487d1805463->leave($__internal_cf86b7564afc11987cc218e25f10996a8ded598a4846591ad0fcc487d1805463_prof);

        
        $__internal_9315237ae533788e07fbd0db5fe8d17557daedd7a6856b0277365636116b901e->leave($__internal_9315237ae533788e07fbd0db5fe8d17557daedd7a6856b0277365636116b901e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "D:\\xampp\\htdocs\\my_site_on_simfony\\app\\Resources\\views\\base.html.twig");
    }
}
