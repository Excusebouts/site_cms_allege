<?php

/* modular/services_3_modules.html.twig */
class __TwigTemplate_8b41b669b0a60411cc6e3b4ee0adad7b8dadd99272e21e029723f51dcd5c0d5d extends Twig_Template
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
        echo "<section id=\"services-1\" class=\"services-section section-space-padding\" style=\"background-image: url(";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), 0, array(), "array"), "url", array());
        echo ")\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "titre_services", array());
        echo "</h2>
      </div>
    </div>
    <div class=\"row hover-extend\">
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "encart_gauche_pictogramme", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 12
            echo "          <img src=\"";
            echo $this->getAttribute($context["test"], "path", array());
            echo "\" />   
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      
          <h3>";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "encart_gauche_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 16
        echo $this->getAttribute(($context["header"] ?? null), "encart_gauche_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 17
        echo $this->getAttribute(($context["header"] ?? null), "encart_gauche_texte_cache", array());
        echo "</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
        // line 23
        echo $this->getAttribute(($context["header"] ?? null), "encart_milieu_pictogramme", array());
        echo " color-2\"></i>
          <h3>";
        // line 24
        echo $this->getAttribute(($context["header"] ?? null), "encart_milieu_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 26
        echo $this->getAttribute(($context["header"] ?? null), "encart_milieu_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 27
        echo $this->getAttribute(($context["header"] ?? null), "encart_milieu_texte_cache", array());
        echo "</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
        // line 33
        echo $this->getAttribute(($context["header"] ?? null), "encart_droite_pictogramme", array());
        echo " color-3\"></i>
          <h3>";
        // line 34
        echo $this->getAttribute(($context["header"] ?? null), "encart_droite_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 36
        echo $this->getAttribute(($context["header"] ?? null), "encart_droite_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 37
        echo $this->getAttribute(($context["header"] ?? null), "encart_droite_texte_cache", array());
        echo "</p>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services_3_modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  101 => 36,  96 => 34,  92 => 33,  83 => 27,  79 => 26,  74 => 24,  70 => 23,  61 => 17,  57 => 16,  52 => 14,  49 => 13,  40 => 12,  36 => 11,  27 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"services-1\" class=\"services-section section-space-padding\" style=\"background-image: url({{ page.media.images[0].url }})\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_services }}</h2>
      </div>
    </div>
    <div class=\"row hover-extend\">
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          {% for test in header.encart_gauche_pictogramme %}
          <img src=\"{{ test.path }}\" />   
          {% endfor %}      
          <h3>{{ header.encart_gauche_titre }}</h3>
          <hr>
          <p>{{ header.encart_gauche_texte }}</p>
          <p class=\"reveal\">{{ header.encart_gauche_texte_cache }}</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_milieu_pictogramme }} color-2\"></i>
          <h3>{{ header.encart_milieu_titre }}</h3>
          <hr>
          <p>{{ header.encart_milieu_texte }}</p>
          <p class=\"reveal\">{{ header.encart_milieu_texte_cache }}</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_droite_pictogramme }} color-3\"></i>
          <h3>{{ header.encart_droite_titre }}</h3>
          <hr>
          <p>{{ header.encart_droite_texte }}</p>
          <p class=\"reveal\">{{ header.encart_droite_texte_cache }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
", "modular/services_3_modules.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/modular/services_3_modules.html.twig");
    }
}
