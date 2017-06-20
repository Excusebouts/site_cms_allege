<?php

/* modular/image.html.twig */
class __TwigTemplate_c690a0bce12fac66976cd2e7cd6896cb7b89675588cb309d1444f9f17f929f9b extends Twig_Template
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
        echo "<div class=\"slider-image\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 3
            echo "\t\t<img src=\"";
            echo $this->getAttribute($context["image"], "url", array());
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modular/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"slider-image\">
\t{% for image in page.media.images %}
\t\t<img src=\"{{ image.url }}\" />
\t{% endfor %}
</div>", "modular/image.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/image.html.twig");
    }
}
