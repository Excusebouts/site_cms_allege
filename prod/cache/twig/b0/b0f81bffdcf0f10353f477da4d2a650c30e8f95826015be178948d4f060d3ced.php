<?php

/* modular/temoignages.html.twig */
class __TwigTemplate_e8bb96d23bca73080f4457e448951980250e3061211f00a45a6e6efbe1b49544 extends Twig_Template
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
        echo "<section id=\"testimonials\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">";
        // line 5
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "titre_temoignages", array());
        echo "</h2>
        <hr class=\"primary\">
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12\" data-wow-delay=\"0.2s\">
        <div class=\"carousel slide\" data-ride=\"carousel\" id=\"quote-carousel\">         
          <ol class=\"carousel-indicators\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "list_temoignages", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
            // line 14
            echo "            ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 15
                echo "            <li data-target=\"#quote-carousel\" data-slide-to=\"";
                echo ($this->getAttribute($context["loop"], "index", array()) - 1);
                echo "\" class=\"active\"><img class=\"img-responsive \" src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["temoignage"], "nom_image", array()), array(), "array"), "url", array());
                echo "\" alt=\"\">
            </li>
            ";
            } else {
                // line 18
                echo "            <li data-target=\"#quote-carousel\" data-slide-to=\"";
                echo ($this->getAttribute($context["loop"], "index", array()) - 1);
                echo "\"><img class=\"img-responsive\" src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["temoignage"], "nom_image", array()), array(), "array"), "url", array());
                echo "\" alt=\"\">
            </li>
            ";
            }
            // line 21
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temoignage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "          </ol>           
          <div class=\"carousel-inner text-center\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "list_temoignages", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
            echo "  
            ";
            // line 25
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 26
                echo "            <div class=\"item active\">
            ";
            } else {
                // line 28
                echo "            <div class=\"item\">
            ";
            }
            // line 30
            echo "              <blockquote>
                <div class=\"row\">
                  <div class=\"col-sm-8 col-sm-offset-2\">
                    <p>";
            // line 33
            echo $this->getAttribute($context["temoignage"], "texte", array());
            echo "</p>
                    <small>";
            // line 34
            echo $this->getAttribute($context["temoignage"], "auteur", array());
            echo "</small>
                  </div>
                </div>
              </blockquote>
            </div>   
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temoignage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "         
          </div>       
          <a data-slide=\"prev\" href=\"#quote-carousel\" class=\"left carousel-control\"><i class=\"fa fa-chevron-left\"></i></a>
          <a data-slide=\"next\" href=\"#quote-carousel\" class=\"right carousel-control\"><i class=\"fa fa-chevron-right\"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/temoignages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  130 => 34,  126 => 33,  121 => 30,  117 => 28,  113 => 26,  111 => 25,  92 => 24,  88 => 22,  74 => 21,  65 => 18,  56 => 15,  53 => 14,  36 => 13,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"testimonials\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_temoignages }}</h2>
        <hr class=\"primary\">
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12\" data-wow-delay=\"0.2s\">
        <div class=\"carousel slide\" data-ride=\"carousel\" id=\"quote-carousel\">         
          <ol class=\"carousel-indicators\">
            {% for temoignage in header.list_temoignages %}
            {% if loop.index == 1 %}
            <li data-target=\"#quote-carousel\" data-slide-to=\"{{ loop.index-1 }}\" class=\"active\"><img class=\"img-responsive \" src=\"{{ page.media[temoignage.nom_image].url }}\" alt=\"\">
            </li>
            {% else %}
            <li data-target=\"#quote-carousel\" data-slide-to=\"{{ loop.index-1 }}\"><img class=\"img-responsive\" src=\"{{ page.media[temoignage.nom_image].url }}\" alt=\"\">
            </li>
            {% endif %}
            {% endfor %}
          </ol>           
          <div class=\"carousel-inner text-center\">
            {% for temoignage in header.list_temoignages %}  
            {% if loop.index == 1 %}
            <div class=\"item active\">
            {% else %}
            <div class=\"item\">
            {% endif %}
              <blockquote>
                <div class=\"row\">
                  <div class=\"col-sm-8 col-sm-offset-2\">
                    <p>{{ temoignage.texte }}</p>
                    <small>{{ temoignage.auteur }}</small>
                  </div>
                </div>
              </blockquote>
            </div>   
            {% endfor %}         
          </div>       
          <a data-slide=\"prev\" href=\"#quote-carousel\" class=\"left carousel-control\"><i class=\"fa fa-chevron-left\"></i></a>
          <a data-slide=\"next\" href=\"#quote-carousel\" class=\"right carousel-control\"><i class=\"fa fa-chevron-right\"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>", "modular/temoignages.html.twig", "/home/www/lafranchise.dalalu.fr/user/themes/dalalu/templates/modular/temoignages.html.twig");
    }
}
