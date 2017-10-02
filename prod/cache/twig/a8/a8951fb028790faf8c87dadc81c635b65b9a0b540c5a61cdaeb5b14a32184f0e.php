<?php

/* default.json.twig */
class __TwigTemplate_7a6d2460bb044721e412eaa8a5a2847629c091603af69164cf4d2006270a9dc4 extends Twig_Template
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
        // line 1
        if ($this->getAttribute(($context["admin"] ?? null), "json_response", array())) {
            // line 2
            echo twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "json_response", array()));
            echo "
";
        } else {
            // line 4
            echo "{}
";
        }
    }

    public function getTemplateName()
    {
        return "default.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if admin.json_response %}
{{ admin.json_response|json_encode|raw }}
{% else %}
{}
{% endif %}
", "default.json.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/plugins/admin/themes/grav/templates/default.json.twig");
    }
}
