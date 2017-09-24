<?php

/* partials/base.html.twig */
class __TwigTemplate_5a5f29c1dfbbc8e1b316747350ab9a566911cf751c2194623bb506dec0439eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "</head>
<body>

";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
<script>
    \$('.automatic-slider').unslider({
      autoplay: true,
      speed: 700,
      delay: 5000
    });
</script>
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " ";
        }
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "       
        <link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
        ";
        // line 19
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://fonts/css/font-awesome.min.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 100), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/unslider.css", 1 => 99), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/unslider-dots.css", 1 => 98), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/dropdown.css", 1 => 97), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bootstrap-m-app.min.css", 1 => 96), "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style-m-app.css", 1 => 95), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/animate-layana.min.css", 1 => 94), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style-layana.css", 1 => 93), "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 92), "method");
        // line 29
        echo "    ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        echo "    
    ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        echo "   
";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.js", 1 => 100), "method");
        // line 42
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.event.swipe.js", 1 => 100), "method");
        // line 43
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.touch-swipe.min.js", 1 => 100), "method");
        // line 44
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/velocity.min.js", 1 => 100), "method");
        // line 45
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/unslider.min.js", 1 => 100), "method");
        // line 46
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/tether.min.js", 1 => 100), "method");
        // line 47
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 48
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/parallax.js", 1 => 100), "method");
        // line 49
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/contact.js", 1 => 100), "method");
        // line 50
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/countto.js", 1 => 100), "method");
        // line 51
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.easing.min.js", 1 => 100), "method");
        // line 52
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/wow.min.js", 1 => 100), "method");
        // line 53
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/common.js", 1 => 100), "method");
        // line 54
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/dropdown.min.js", 1 => 100), "method");
        // line 55
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/script.js", 1 => 100), "method");
        // line 56
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "http://maps.google.com/maps/api/js?key=AIzaSyAv1tUCt3Gh5BIy_m0BLi6NHYPzuXmngRU", 1 => 100), "method");
        // line 57
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.gmap.js", 1 => 100), "method");
        // line 58
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/map.js", 1 => 100), "method");
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 58,  209 => 57,  206 => 56,  203 => 55,  200 => 54,  197 => 53,  194 => 52,  191 => 51,  188 => 50,  185 => 49,  182 => 48,  179 => 47,  176 => 46,  173 => 45,  170 => 44,  167 => 43,  164 => 42,  161 => 41,  158 => 40,  148 => 37,  143 => 36,  139 => 29,  136 => 28,  133 => 27,  130 => 26,  127 => 25,  124 => 24,  121 => 23,  118 => 22,  115 => 21,  112 => 20,  110 => 19,  104 => 17,  96 => 30,  94 => 17,  88 => 14,  84 => 13,  81 => 12,  79 => 11,  69 => 7,  66 => 6,  63 => 5,  48 => 60,  46 => 40,  43 => 39,  41 => 36,  36 => 33,  34 => 5,  29 => 3,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} {% endif %}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    
    {% block stylesheets %}       
        <link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
        {% do assets.addCss('theme://fonts/css/font-awesome.min.css', 100) %}
        {% do assets.addCss('theme://css/bootstrap.min.css', 100) %}
        {% do assets.addCss('theme://css/unslider.css', 99) %}
        {% do assets.addCss('theme://css/unslider-dots.css', 98) %}
        {% do assets.addCss('theme://css/dropdown.css', 97) %}
        {% do assets.addCss('theme://css/bootstrap-m-app.min.css', 96) %}
        {% do assets.addCss('theme://css/style-m-app.css', 95) %}
        {% do assets.addCss('theme://css/animate-layana.min.css', 94) %}
        {% do assets.addCss('theme://css/style-layana.css', 93) %}
        {% do assets.addCss('theme://css/custom.css', 92) %}
    {% endblock %}
    {{ assets.css() }}

{% endblock head%}
</head>
<body>

{% block body %}    
    {% block content %}{% endblock %}   
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('theme://js/jquery.js', 100) %}
    {% do assets.addJs('theme://js/jquery.event.swipe.js', 100) %}
    {% do assets.addJs('theme://js/jquery.touch-swipe.min.js', 100) %}
    {% do assets.addJs('theme://js/velocity.min.js', 100) %}
    {% do assets.addJs('theme://js/unslider.min.js', 100) %}
    {% do assets.addJs('theme://js/tether.min.js', 100) %}
    {% do assets.addJs('theme://js/bootstrap.min.js', 100) %}
    {% do assets.addJs('theme://js/parallax.js', 100) %}
    {% do assets.addJs('theme://js/contact.js', 100) %}
    {% do assets.addJs('theme://js/countto.js', 100) %}
    {% do assets.addJs('theme://js/jquery.easing.min.js', 100) %}
    {% do assets.addJs('theme://js/wow.min.js', 100) %}
    {% do assets.addJs('theme://js/common.js', 100) %}
    {% do assets.addJs('theme://js/dropdown.min.js', 100) %}
    {% do assets.addJs('theme://js/script.js', 100) %}
    {% do assets.addJs('http://maps.google.com/maps/api/js?key=AIzaSyAv1tUCt3Gh5BIy_m0BLi6NHYPzuXmngRU',100) %}
    {% do assets.addJs('theme://js/jquery.gmap.js', 100) %}
    {% do assets.addJs('theme://js/map.js', 100) %}
{% endblock %}
{{ assets.js() }}
<script>
    \$('.automatic-slider').unslider({
      autoplay: true,
      speed: 700,
      delay: 5000
    });
</script>
</body>
</html>
", "partials/base.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/partials/base.html.twig");
    }
}
