<?php

/* modular/services_3_modules.html.twig */
class __TwigTemplate_e4afc8794ff062767da133c311bb9e5ef3ba4f1e89f965f9e415785413b8a86c extends Twig_Template
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
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 2
        echo "<section id=\"services-1\" class=\"services-section section-space-padding\" style=\"background-image: url(";
        echo $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "url", array());
        echo ")\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">";
        // line 6
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "titre_services", array());
        echo "</h2>
      </div>
    </div>
    <div class=\"row hover-extend\">
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_gauche_pictogramme", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "            <img class=\"picto\" src=\"";
            echo $this->getAttribute($context["image"], "path", array());
            echo "\" />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      
          <h3>";
        // line 15
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_gauche_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 17
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_gauche_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 18
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_gauche_texte_cache", array());
        echo "</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_milieu_pictogramme", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 25
            echo "            <img class=\"picto\" src=\"";
            echo $this->getAttribute($context["image"], "path", array());
            echo "\" />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      
          <h3>";
        // line 27
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_milieu_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 29
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_milieu_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 30
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_milieu_texte_cache", array());
        echo "</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_droite_pictogramme", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 37
            echo "            <img class=\"picto\" src=\"";
            echo $this->getAttribute($context["image"], "path", array());
            echo "\" />
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      
          <h3>";
        // line 39
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_droite_titre", array());
        echo "</h3>
          <hr>
          <p>";
        // line 41
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_droite_texte", array());
        echo "</p>
          <p class=\"reveal\">";
        // line 42
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "encart_droite_texte_cache", array());
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
        return array (  131 => 42,  127 => 41,  122 => 39,  119 => 38,  110 => 37,  106 => 36,  97 => 30,  93 => 29,  88 => 27,  85 => 26,  76 => 25,  72 => 24,  63 => 18,  59 => 17,  54 => 15,  51 => 14,  42 => 13,  38 => 12,  29 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set image = page.media.images|first %}
<section id=\"services-1\" class=\"services-section section-space-padding\" style=\"background-image: url({{ image.url }})\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_services }}</h2>
      </div>
    </div>
    <div class=\"row hover-extend\">
      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          {% for image in header.encart_gauche_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
          {% endfor %}      
          <h3>{{ header.encart_gauche_titre }}</h3>
          <hr>
          <p>{{ header.encart_gauche_texte }}</p>
          <p class=\"reveal\">{{ header.encart_gauche_texte_cache }}</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          {% for image in header.encart_milieu_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
          {% endfor %}      
          <h3>{{ header.encart_milieu_titre }}</h3>
          <hr>
          <p>{{ header.encart_milieu_texte }}</p>
          <p class=\"reveal\">{{ header.encart_milieu_texte_cache }}</p>
        </div>
      </div>

      <div class=\"col-md-4 col-sm-6\">
        <div class=\"services-detail\">
          {% for image in header.encart_droite_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
          {% endfor %}      
          <h3>{{ header.encart_droite_titre }}</h3>
          <hr>
          <p>{{ header.encart_droite_texte }}</p>
          <p class=\"reveal\">{{ header.encart_droite_texte_cache }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
", "modular/services_3_modules.html.twig", "/home/www/lafranchise.dalalu.fr/user/themes/dalalu/templates/modular/services_3_modules.html.twig");
    }
}
