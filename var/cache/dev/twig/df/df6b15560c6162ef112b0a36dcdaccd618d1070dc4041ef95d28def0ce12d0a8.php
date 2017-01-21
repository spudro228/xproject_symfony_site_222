<?php

/* default/css/blog.css */
class __TwigTemplate_ac086605fc3c680024e1d2bdef27c1da51eaab18d56f6cd8f466b793d9c818e6 extends Twig_Template
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
        $__internal_aa5f08df28944e6ecdf1528c46fdd2772374d086d9ba0a2c9261f0b2e618de12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5f08df28944e6ecdf1528c46fdd2772374d086d9ba0a2c9261f0b2e618de12->enter($__internal_aa5f08df28944e6ecdf1528c46fdd2772374d086d9ba0a2c9261f0b2e618de12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/css/blog.css"));

        $__internal_5ecced8ad0dacd0837c65c6f90655703892d8eaf8232640d2ba30d723316bccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecced8ad0dacd0837c65c6f90655703892d8eaf8232640d2ba30d723316bccb->enter($__internal_5ecced8ad0dacd0837c65c6f90655703892d8eaf8232640d2ba30d723316bccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/css/blog.css"));

        // line 1
        echo "* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

a {
    text-decoration: none;
    color: rgb(61, 146, 201);
}
a:hover,
a:focus {
    text-decoration: underline;
}

h3 {
    font-weight: 100;
}

/* LAYOUT CSS */
.pure-img-responsive {
    max-width: 100%;
    height: auto;
}

#layout {
    padding: 0;
}

.header {
    text-align: center;
    top: auto;
    margin: 3em auto;
}

.sidebar {
    background: rgb(61, 79, 93);
    color: #fff;
}

.brand-title,
.brand-tagline {
    margin: 0;
}
.brand-title {
    text-transform: uppercase;
}
.brand-tagline {
    font-weight: 300;
    color: rgb(176, 202, 219);
}

.nav-list {
    margin: 0;
    padding: 0;
    list-style: none;
}
.nav-item {
    display: inline-block;
    *display: inline;
    zoom: 1;
}
.nav-item a {
    background: transparent;
    border: 2px solid rgb(176, 202, 219);
    color: #fff;
    margin-top: 1em;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    font-size: 85%;
}
.nav-item a:hover,
.nav-item a:focus {
    border: 2px solid rgb(61, 146, 201);
    text-decoration: none;
}

.content-subhead {
    text-transform: uppercase;
    color: #aaa;
    border-bottom: 1px solid #eee;
    padding: 0.4em 0;
    font-size: 80%;
    font-weight: 500;
    letter-spacing: 0.1em;
}

.content {
    padding: 2em 1em 0;
    margin-left: 10%;
}

.post {
    padding-bottom: 2em;
}
.post-title {
    font-size: 2em;
    color: #222;
    background-color: #0000F0;
    margin-bottom: 0.2em;
}
.post-avatar {
    border-radius: 50px;
    float: right;
    margin-left: 1em;
}
.post-description {
    font-family: Georgia, \"Cambria\", serif;
    color: #444;
    line-height: 1.8em;
}
.post-meta {
    color: #999;
    font-size: 90%;
    margin: 0;
}

.post-category {
    margin: 0 0.1em;
    padding: 0.3em 1em;
    color: #fff;
    background: #999;
    font-size: 80%;
}
    .post-category-design {
        background: #5aba59;
    }
    .post-category-pure {
        background: #4d85d1;
    }
    .post-category-yui {
        background: #8156a7;
    }
    .post-category-js {
        background: #df2d4f;
    }

.post-images {
    margin: 1em 0;
}
.post-image-meta {
    margin-top: -3.5em;
    margin-left: 1em;
    color: #fff;
    text-shadow: 0 1px 1px #333;
}

.footer {
    text-align: center;
    padding: 1em 0;
}
.footer a {
    color: #ccc;
    font-size: 80%;
}
.footer .pure-menu a:hover,
.footer .pure-menu a:focus {
    background: none;
}
ul.posts li{
    margin: 10px;
}


@media (min-width: 48em) {
    .content {
        padding: 2em 3em 0;
        margin-left: 25%;
    }

    .header {
        margin: 80% 2em 0;
        text-align: right;
    }

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
    }
}

";
        
        $__internal_aa5f08df28944e6ecdf1528c46fdd2772374d086d9ba0a2c9261f0b2e618de12->leave($__internal_aa5f08df28944e6ecdf1528c46fdd2772374d086d9ba0a2c9261f0b2e618de12_prof);

        
        $__internal_5ecced8ad0dacd0837c65c6f90655703892d8eaf8232640d2ba30d723316bccb->leave($__internal_5ecced8ad0dacd0837c65c6f90655703892d8eaf8232640d2ba30d723316bccb_prof);

    }

    public function getTemplateName()
    {
        return "default/css/blog.css";
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
        return new Twig_Source("* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

a {
    text-decoration: none;
    color: rgb(61, 146, 201);
}
a:hover,
a:focus {
    text-decoration: underline;
}

h3 {
    font-weight: 100;
}

/* LAYOUT CSS */
.pure-img-responsive {
    max-width: 100%;
    height: auto;
}

#layout {
    padding: 0;
}

.header {
    text-align: center;
    top: auto;
    margin: 3em auto;
}

.sidebar {
    background: rgb(61, 79, 93);
    color: #fff;
}

.brand-title,
.brand-tagline {
    margin: 0;
}
.brand-title {
    text-transform: uppercase;
}
.brand-tagline {
    font-weight: 300;
    color: rgb(176, 202, 219);
}

.nav-list {
    margin: 0;
    padding: 0;
    list-style: none;
}
.nav-item {
    display: inline-block;
    *display: inline;
    zoom: 1;
}
.nav-item a {
    background: transparent;
    border: 2px solid rgb(176, 202, 219);
    color: #fff;
    margin-top: 1em;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    font-size: 85%;
}
.nav-item a:hover,
.nav-item a:focus {
    border: 2px solid rgb(61, 146, 201);
    text-decoration: none;
}

.content-subhead {
    text-transform: uppercase;
    color: #aaa;
    border-bottom: 1px solid #eee;
    padding: 0.4em 0;
    font-size: 80%;
    font-weight: 500;
    letter-spacing: 0.1em;
}

.content {
    padding: 2em 1em 0;
    margin-left: 10%;
}

.post {
    padding-bottom: 2em;
}
.post-title {
    font-size: 2em;
    color: #222;
    background-color: #0000F0;
    margin-bottom: 0.2em;
}
.post-avatar {
    border-radius: 50px;
    float: right;
    margin-left: 1em;
}
.post-description {
    font-family: Georgia, \"Cambria\", serif;
    color: #444;
    line-height: 1.8em;
}
.post-meta {
    color: #999;
    font-size: 90%;
    margin: 0;
}

.post-category {
    margin: 0 0.1em;
    padding: 0.3em 1em;
    color: #fff;
    background: #999;
    font-size: 80%;
}
    .post-category-design {
        background: #5aba59;
    }
    .post-category-pure {
        background: #4d85d1;
    }
    .post-category-yui {
        background: #8156a7;
    }
    .post-category-js {
        background: #df2d4f;
    }

.post-images {
    margin: 1em 0;
}
.post-image-meta {
    margin-top: -3.5em;
    margin-left: 1em;
    color: #fff;
    text-shadow: 0 1px 1px #333;
}

.footer {
    text-align: center;
    padding: 1em 0;
}
.footer a {
    color: #ccc;
    font-size: 80%;
}
.footer .pure-menu a:hover,
.footer .pure-menu a:focus {
    background: none;
}
ul.posts li{
    margin: 10px;
}


@media (min-width: 48em) {
    .content {
        padding: 2em 3em 0;
        margin-left: 25%;
    }

    .header {
        margin: 80% 2em 0;
        text-align: right;
    }

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
    }
}

", "default/css/blog.css", "D:\\xampp\\htdocs\\my_site_on_simfony\\app\\Resources\\views\\default\\css\\blog.css");
    }
}
