<?php

/* modular/map.html.twig */
class __TwigTemplate_50229596c6ac91749df3283c64f4a187605505371fc572b84538e6e88e051201 extends Twig_Template
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
        if (($this->getAttribute(($context["header"] ?? null), "grande_carte", array()) == 1)) {
            // line 2
            echo "<section style=\"padding: 0;\">
  <div class=\"container\" style=\"max-width: 100%; padding: 0; margin: 0 auto; width: 100%;\">
";
        } else {
            // line 5
            echo "<section>
  <div class=\"container\">
";
        }
        // line 7
        echo "  
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">";
        // line 10
        echo $this->getAttribute(($context["header"] ?? null), "titre_map", array());
        echo "</h2>
        <hr class=\"primary\">
      </div>
    </div>
    <div class=\"row\">
      ";
        // line 15
        if (($this->getAttribute(($context["header"] ?? null), "grande_carte", array()) == 1)) {
            // line 16
            echo "      <div class=\"col-md-12\">
        <div id=\"carte-page2\" class=\"map space-set\">
      ";
        } else {
            // line 19
            echo "      <div class=\"col-md-6\">
        <div id=\"carte-page1\" class=\"map space-set\">
      ";
        }
        // line 22
        echo "          <p>La map ne peut s'afficher sans connexion internet</p>
        </div>
      </div>
      ";
        // line 25
        if (($this->getAttribute(($context["header"] ?? null), "grande_carte", array()) != 1)) {
            // line 26
            echo "      <div class=\"col-md-6\">";
            echo $this->getAttribute(($context["header"] ?? null), "texte_map", array());
            echo "</div>
      ";
        }
        // line 28
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  63 => 26,  61 => 25,  56 => 22,  51 => 19,  46 => 16,  44 => 15,  36 => 10,  31 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if header.grande_carte == 1 %}
<section style=\"padding: 0;\">
  <div class=\"container\" style=\"max-width: 100%; padding: 0; margin: 0 auto; width: 100%;\">
{% else %}
<section>
  <div class=\"container\">
{% endif %}  
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_map }}</h2>
        <hr class=\"primary\">
      </div>
    </div>
    <div class=\"row\">
      {% if header.grande_carte == 1 %}
      <div class=\"col-md-12\">
        <div id=\"carte-page2\" class=\"map space-set\">
      {% else %}
      <div class=\"col-md-6\">
        <div id=\"carte-page1\" class=\"map space-set\">
      {% endif %}
          <p>La map ne peut s'afficher sans connexion internet</p>
        </div>
      </div>
      {% if header.grande_carte != 1 %}
      <div class=\"col-md-6\">{{ header.texte_map }}</div>
      {% endif %}
    </div>
  </div>
</section>", "modular/map.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/modular/map.html.twig");
    }
}
