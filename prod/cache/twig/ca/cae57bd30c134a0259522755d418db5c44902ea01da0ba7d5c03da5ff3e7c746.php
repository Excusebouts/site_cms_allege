<?php

/* modular/services.html.twig */
class __TwigTemplate_94bb595a60aeb15763badf338aceef580648beeb5cf5039261b922a46a9159fb extends Twig_Template
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
        echo "<section id=\"services-1\" class=\"services-section section-space-padding\">
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
          <i class=\"fa fa-";
        // line 11
        echo $this->getAttribute(($context["header"] ?? null), "encart_gauche_pictogramme", array());
        echo " color-1\"></i>
          <h3>";
        // line 12
        echo $this->getAttribute(($context["header"] ?? null), "encart_gauche_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "encart_gauche_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 15
        echo $this->getAttribute(($context["header"] ?? null), "encart_gauche_texte_cache", array());
        echo "</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
        // line 21
        echo $this->getAttribute(($context["header"] ?? null), "encart_milieu_pictogramme", array());
        echo " color-2\"></i>
          <h3>";
        // line 22
        echo $this->getAttribute(($context["header"] ?? null), "encart_milieu_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 24
        echo $this->getAttribute(($context["header"] ?? null), "encart_milieu_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 25
        echo $this->getAttribute(($context["header"] ?? null), "encart_milieu_texte_cache", array());
        echo "</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
        // line 31
        echo $this->getAttribute(($context["header"] ?? null), "encart_droite_pictogramme", array());
        echo " color-3\"></i>
          <h3>";
        // line 32
        echo $this->getAttribute(($context["header"] ?? null), "encart_droite_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 34
        echo $this->getAttribute(($context["header"] ?? null), "encart_droite_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 35
        echo $this->getAttribute(($context["header"] ?? null), "encart_droite_texte_cache", array());
        echo "</p>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  87 => 34,  82 => 32,  78 => 31,  69 => 25,  65 => 24,  60 => 22,  56 => 21,  47 => 15,  43 => 14,  38 => 12,  34 => 11,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"services-1\" class=\"services-section section-space-padding\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_services }}</h2>
      </div>
    </div>
    <div class=\"row hover-extend\">
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_gauche_pictogramme }} color-1\"></i>
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
</section>", "modular/services.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/modular/services.html.twig");
    }
}
