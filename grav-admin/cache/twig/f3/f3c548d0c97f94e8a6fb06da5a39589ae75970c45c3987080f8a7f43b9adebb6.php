<?php

/* modular/video_lien.html.twig */
class __TwigTemplate_ca0fea7ff54f3ae6bd64447738e87fac2712c6bd8678ed0033ae88ce5de69d64 extends Twig_Template
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
        echo "<section>
  \t<div class=\"container\">
    \t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-sm-12 text-center\">
\t\t\t\t<h2 class=\"section-heading\" style=\"padding-top:60px;\">";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "titre", array());
        echo "</h2>
\t    \t\t<p>";
        // line 6
        echo $this->getAttribute(($context["header"] ?? null), "texte", array());
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-sm-12 text-center\">
\t\t\t\t<iframe width=\"420\" height=\"315\" src=\"";
        // line 9
        echo $this->getAttribute(($context["header"] ?? null), "url", array());
        echo " frameborder=\"0\" allowfullscreen></iframe>
\t    \t</div>
\t    </div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/video_lien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>
  \t<div class=\"container\">
    \t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-sm-12 text-center\">
\t\t\t\t<h2 class=\"section-heading\" style=\"padding-top:60px;\">{{ header.titre }}</h2>
\t    \t\t<p>{{ header.texte }}</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 col-sm-12 text-center\">
\t\t\t\t<iframe width=\"420\" height=\"315\" src=\"{{ header.url }} frameborder=\"0\" allowfullscreen></iframe>
\t    \t</div>
\t    </div>
\t</div>
</section>", "modular/video_lien.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/video_lien.html.twig");
    }
}
