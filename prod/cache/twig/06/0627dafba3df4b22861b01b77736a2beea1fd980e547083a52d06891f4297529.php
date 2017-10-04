<?php

/* modular/map.html.twig */
class __TwigTemplate_71528ee3c9e24c329f479e045558f521527ec3a5f56891b3c5be4c05681fe883 extends Twig_Template
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
            echo $this->getAttribute(($context["header"] ?? null), "texte", array());
            echo "</div>
      <div class=\"col-md-6\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "image", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 29
                echo "        <img class='map-image' src='";
                echo $this->getAttribute($context["img"], "path", array());
                echo "'/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </div>
      ";
        }
        // line 33
        echo "    </div>
  </div>
</section>
<script type=\"application/javascript\">
var markerMaps = [];
var image = \"\";
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "liste_adresses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["point"], "image", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 41
                echo "image = \"<img border='0' style='margin: 0px 10px 0 0' width='50px' align='left' src='";
                echo $this->getAttribute($context["image"], "path", array());
                echo "'/>\"
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "markerMaps.push({
  address: \"";
            // line 44
            echo $this->getAttribute($context["point"], "adresse", array());
            echo "\",
  html: image + \"<div width='80px' >";
            // line 45
            echo $this->getAttribute($context["point"], "texte", array());
            echo "</div>\"
});
image = \"\";
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</script>
";
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
        return array (  128 => 49,  118 => 45,  114 => 44,  111 => 43,  102 => 41,  98 => 40,  94 => 39,  86 => 33,  82 => 31,  73 => 29,  69 => 28,  63 => 26,  61 => 25,  56 => 22,  51 => 19,  46 => 16,  44 => 15,  36 => 10,  31 => 7,  26 => 5,  21 => 2,  19 => 1,);
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
      <div class=\"col-md-6\">{{ header.texte }}</div>
      <div class=\"col-md-6\">
        {% for img in header.image %}
        <img class='map-image' src='{{ img.path }}'/>
        {% endfor %}
      </div>
      {% endif %}
    </div>
  </div>
</section>
<script type=\"application/javascript\">
var markerMaps = [];
var image = \"\";
{% for point in header.liste_adresses %}
{% for image in point.image %}
image = \"<img border='0' style='margin: 0px 10px 0 0' width='50px' align='left' src='{{ image.path }}'/>\"
{% endfor %}
markerMaps.push({
  address: \"{{ point.adresse }}\",
  html: image + \"<div width='80px' >{{ point.texte }}</div>\"
});
image = \"\";
{% endfor %}
</script>
", "modular/map.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/modular/map.html.twig");
    }
}
