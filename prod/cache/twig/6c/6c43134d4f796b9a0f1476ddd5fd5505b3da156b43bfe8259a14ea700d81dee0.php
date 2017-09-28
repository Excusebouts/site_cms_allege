<?php

/* modular/services_6_modules.html.twig */
class __TwigTemplate_e3ffa8a85cb7afd65b945a3d026eeced84a75ab06183ceb1a1825ae42937ff38 extends Twig_Template
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
      <div class = \"col-md-12 col-sm-12\">
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "encart_haut_gauche_pictogramme", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "            <img class=\"picto\" src=\"";
                echo $this->getAttribute($context["image"], "path", array());
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "              
            <h3>";
            // line 16
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_gauche_titre", array());
            echo "</h3>
            <hr>
            <p>";
            // line 18
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_gauche_texte", array());
            echo "</p>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "encart_haut_milieu_pictogramme", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 24
                echo "            <img class=\"picto\" src=\"";
                echo $this->getAttribute($context["image"], "path", array());
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "              
            <h3>";
            // line 26
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_milieu_titre", array());
            echo "</h3>
            <hr>
            <p>";
            // line 28
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_milieu_texte", array());
            echo "</p>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "encart_haut_droite_pictogramme", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 34
                echo "            <img class=\"picto\" src=\"";
                echo $this->getAttribute($context["image"], "path", array());
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            
            <h3>";
            // line 36
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_droite_titre", array());
            echo "</h3>
            <hr>
            <p>";
            // line 38
            echo $this->getAttribute(($context["header"] ?? null), "encart_haut_droite_texte", array());
            echo "</p>
          </div>
        </div>
      </div>
      <div class = \"col-md-12 col-sm-12\">
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "encart_bas_droite_pictogramme", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 46
                echo "            <img class=\"picto\" src=\"";
                echo $this->getAttribute($context["image"], "path", array());
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            <h3>";
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_droite_titre", array());
            echo "</h3>
            <hr>
            <p>";
            // line 50
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_droite_texte", array());
            echo "</p>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "encart_bas_milieu_pictogramme", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 56
                echo "            <img class=\"picto\" src=\"";
                echo $this->getAttribute($context["image"], "path", array());
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            <h3>";
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_milieu_titre", array());
            echo "</h3>
            <hr>
            <p>";
            // line 60
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_milieu_texte", array());
            echo "</p>
          </div>
        </div>
        
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "encart_bas_gauche_pictogramme", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 67
                echo "            <img class=\"picto\" src=\"";
                echo $this->getAttribute($context["image"], "path", array());
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            <h3>";
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_gauche_titre", array());
            echo "</h3>
            <hr>
            <p>";
            // line 71
            echo $this->getAttribute(($context["header"] ?? null), "encart_bas_gauche_texte", array());
            echo "</p>
          </div>
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
        return "modular/services_6_modules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 71,  199 => 69,  190 => 67,  186 => 66,  177 => 60,  171 => 58,  162 => 56,  158 => 55,  150 => 50,  144 => 48,  135 => 46,  131 => 45,  121 => 38,  116 => 36,  113 => 35,  104 => 34,  100 => 33,  92 => 28,  87 => 26,  84 => 25,  75 => 24,  71 => 23,  63 => 18,  58 => 16,  55 => 15,  46 => 14,  42 => 13,  32 => 6,  24 => 2,  19 => 1,);
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
      <div class = \"col-md-12 col-sm-12\">
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            {% for image in header.encart_haut_gauche_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
            {% endfor %}              
            <h3>{{ header.encart_haut_gauche_titre }}</h3>
            <hr>
            <p>{{ header.encart_haut_gauche_texte }}</p>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            {% for image in header.encart_haut_milieu_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
            {% endfor %}              
            <h3>{{ header.encart_haut_milieu_titre }}</h3>
            <hr>
            <p>{{ header.encart_haut_milieu_texte }}</p>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            {% for image in header.encart_haut_droite_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
            {% endfor %}            
            <h3>{{ header.encart_haut_droite_titre }}</h3>
            <hr>
            <p>{{ header.encart_haut_droite_texte }}</p>
          </div>
        </div>
      </div>
      <div class = \"col-md-12 col-sm-12\">
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            {% for image in header.encart_bas_droite_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
            {% endfor %}
            <h3>{{ header.encart_bas_droite_titre }}</h3>
            <hr>
            <p>{{ header.encart_bas_droite_texte }}</p>
          </div>
        </div>
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            {% for image in header.encart_bas_milieu_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
            {% endfor %}
            <h3>{{ header.encart_bas_milieu_titre }}</h3>
            <hr>
            <p>{{ header.encart_bas_milieu_texte }}</p>
          </div>
        </div>
        
        <div class=\"col-md-4 col-sm-6\">
          <div class=\"services-detail\">
            {% for image in header.encart_bas_gauche_pictogramme %}
            <img class=\"picto\" src=\"{{ image.path }}\" />
            {% endfor %}
            <h3>{{ header.encart_bas_gauche_titre }}</h3>
            <hr>
            <p>{{ header.encart_bas_gauche_texte }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endfor %}", "modular/services_6_modules.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/modular/services_6_modules.html.twig");
    }
}
