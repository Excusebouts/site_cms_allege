<?php

/* modular/servicesimage.html.twig */
class __TwigTemplate_695233b074f17b6be78380529b67a54a545adba54c919561cda4e8b5f8da113a extends Twig_Template
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
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 2
            echo " <section id=\"services-2\" class=\"services-section section-space-padding\" style=\"background-image: url(";
            echo $this->getAttribute($context["image"], "url", array());
            echo ")\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">";
            // line 6
            echo $this->getAttribute(($context["header"] ?? null), "titre_services", array());
            echo "</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
            // line 12
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_gauche_pictogramme", array());
            echo " color-1\"></i>
          <h3>";
            // line 13
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_gauche_titre", array());
            echo "</h3>
          <hr>
          <p>";
            // line 15
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_gauche_texte", array());
            echo "</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
            // line 20
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_milieu_pictogramme", array());
            echo " color-2\"></i>
          <h3>";
            // line 21
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_milieu_titre", array());
            echo "</h3>
          <hr>
          <p>";
            // line 23
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_milieu_texte", array());
            echo "</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
            // line 28
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_droite_pictogramme", array());
            echo " color-3\"></i>
          <h3>";
            // line 29
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_droite_titre", array());
            echo "</h3>
          <hr>
          <p>";
            // line 31
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_droite_texte", array());
            echo "</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
            // line 36
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_gauche_pictogramme", array());
            echo " color-4\"></i>
          <h3>";
            // line 37
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_gauche_titre", array());
            echo "</h3>
          <hr>
          <p>";
            // line 39
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_gauche_texte", array());
            echo "</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
            // line 44
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_milieu_pictogramme", array());
            echo " color-5\"></i>
          <h3>";
            // line 45
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_milieu_titre", array());
            echo "</h3>
          <hr>
          <p>";
            // line 47
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_milieu_texte", array());
            echo "</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-";
            // line 52
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_droite_pictogramme", array());
            echo " color-6\"></i>
          <h3>";
            // line 53
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_droite_titre", array());
            echo "</h3>
          <hr>
          <p>";
            // line 55
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_droite_texte", array());
            echo "</p>
        </div>
      </div>
    </div>
  </div>
</section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/servicesimage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 55,  130 => 53,  126 => 52,  118 => 47,  113 => 45,  109 => 44,  101 => 39,  96 => 37,  92 => 36,  84 => 31,  79 => 29,  75 => 28,  67 => 23,  62 => 21,  58 => 20,  50 => 15,  45 => 13,  41 => 12,  32 => 6,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% for image in page.media.images %}
 <section id=\"services-2\" class=\"services-section section-space-padding\" style=\"background-image: url({{ image.url }})\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_services }}</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_haut_gauche_pictogramme }} color-1\"></i>
          <h3>{{ header.encart_haut_gauche_titre }}</h3>
          <hr>
          <p>{{ header.encart_haut_gauche_texte }}</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_haut_milieu_pictogramme }} color-2\"></i>
          <h3>{{ header.encart_haut_milieu_titre }}</h3>
          <hr>
          <p>{{ header.encart_haut_milieu_texte }}</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_haut_droite_pictogramme }} color-3\"></i>
          <h3>{{ header.encart_haut_droite_titre }}</h3>
          <hr>
          <p>{{ header.encart_haut_droite_texte }}</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_bas_gauche_pictogramme }} color-4\"></i>
          <h3>{{ header.encart_bas_gauche_titre }}</h3>
          <hr>
          <p>{{ header.encart_bas_gauche_texte }}</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_bas_milieu_pictogramme }} color-5\"></i>
          <h3>{{ header.encart_bas_milieu_titre }}</h3>
          <hr>
          <p>{{ header.encart_bas_milieu_texte }}</p>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          <i class=\"fa fa-{{ header.encart_bas_droite_pictogramme }} color-6\"></i>
          <h3>{{ header.encart_bas_droite_titre }}</h3>
          <hr>
          <p>{{ header.encart_bas_droite_texte }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
{% endfor %}", "modular/servicesimage.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/servicesimage.html.twig");
    }
}
