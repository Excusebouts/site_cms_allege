<?php

/* modular/carousel_avec_textes.html.twig */
class __TwigTemplate_d116fe109aaa68534463c86439f6dd558853fdf300d90d883c51a90bc86570b5 extends Twig_Template
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
        if (($this->getAttribute(($context["header"] ?? null), "direction", array()) == 1)) {
            // line 2
            echo "<div id=\"about\" class=\"about text-photos\">
";
        } else {
            // line 4
            echo "<div id=\"works\" class=\"works text-photos\">
";
        }
        // line 6
        echo "  <div class=\"row\">
    ";
        // line 7
        if (($this->getAttribute(($context["header"] ?? null), "direction", array()) == 1)) {
            // line 8
            echo "    <div class=\"col-sm-7 wowload fadeInLeft\">
      <div id=\"carousel-about\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\" role=\"listbox\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 12
                echo "            ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 13
                    echo "              <div class=\"item active\"><img src=\"";
                    echo $this->getAttribute($context["image"], "url", array());
                    echo "\" class=\"img-responsive\"></div>    
            ";
                } else {
                    // line 14
                    echo "        
              <div class=\"item\"><img src=\"";
                    // line 15
                    echo $this->getAttribute($context["image"], "url", array());
                    echo "\" class=\"img-responsive\"></div> 
            ";
                }
                // line 17
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </div>
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-about\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-3x fa-angle-left\"></i></a>      
        <a class=\"right carousel-control\" href=\"#carousel-about\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-3x fa-angle-right\"></i></a>
      </div>
    </div>
    ";
        } else {
            // line 25
            echo "    <div class=\"col-sm-5 wowload fadeInLeft\">
      <div class=\"spacer\">
        <h2>";
            // line 27
            echo $this->getAttribute(($context["header"] ?? null), "titre", array());
            echo "</h2>
        <p>";
            // line 28
            echo $this->getAttribute(($context["header"] ?? null), "texte", array());
            echo "<p>
      </div>
    </div>
    ";
        }
        // line 32
        echo "    ";
        if (($this->getAttribute(($context["header"] ?? null), "direction", array()) == 1)) {
            // line 33
            echo "    <div class=\"col-sm-5 wowload fadeInRight\">
      <div class=\"spacer\">
        <h2>";
            // line 35
            echo $this->getAttribute(($context["header"] ?? null), "titre", array());
            echo "</h2>
        <p>";
            // line 36
            echo $this->getAttribute(($context["header"] ?? null), "texte", array());
            echo "</p>        
      </div>
    </div>
    ";
        } else {
            // line 40
            echo "    <div class=\"col-sm-7 wowload fadeInRight\">
      <div id=\"carousel-works\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\" role=\"listbox\">
          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 44
                echo "            ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 45
                    echo "              <div class=\"item active\"><img src=\"";
                    echo $this->getAttribute($context["image"], "url", array());
                    echo "\" class=\"img-responsive\"></div>   
            ";
                } else {
                    // line 47
                    echo "              <div class=\"item\"><img src=\"";
                    echo $this->getAttribute($context["image"], "url", array());
                    echo "\" class=\"img-responsive\"></div> 
            ";
                }
                // line 48
                echo "         
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </div>
        <a class=\"left carousel-control\" href=\"#carousel-works\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-3x fa-angle-left\"></i></a>
        <a class=\"right carousel-control\" href=\"#carousel-works\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-3x fa-angle-right\"></i>
        </a> 
      </div>   
    </div> 
    ";
        }
        // line 57
        echo "  </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "modular/carousel_avec_textes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 57,  181 => 50,  166 => 48,  160 => 47,  154 => 45,  151 => 44,  134 => 43,  129 => 40,  122 => 36,  118 => 35,  114 => 33,  111 => 32,  104 => 28,  100 => 27,  96 => 25,  87 => 18,  73 => 17,  68 => 15,  65 => 14,  59 => 13,  56 => 12,  39 => 11,  34 => 8,  32 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if header.direction == 1 %}
<div id=\"about\" class=\"about text-photos\">
{% else %}
<div id=\"works\" class=\"works text-photos\">
{% endif %}
  <div class=\"row\">
    {% if header.direction == 1 %}
    <div class=\"col-sm-7 wowload fadeInLeft\">
      <div id=\"carousel-about\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\" role=\"listbox\">
          {% for image in page.media.images %}
            {% if loop.index == 1 %}
              <div class=\"item active\"><img src=\"{{ image.url }}\" class=\"img-responsive\"></div>    
            {% else %}        
              <div class=\"item\"><img src=\"{{ image.url }}\" class=\"img-responsive\"></div> 
            {% endif %}
          {% endfor %}
        </div>
        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-about\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-3x fa-angle-left\"></i></a>      
        <a class=\"right carousel-control\" href=\"#carousel-about\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-3x fa-angle-right\"></i></a>
      </div>
    </div>
    {% else %}
    <div class=\"col-sm-5 wowload fadeInLeft\">
      <div class=\"spacer\">
        <h2>{{ header.titre }}</h2>
        <p>{{ header.texte }}<p>
      </div>
    </div>
    {% endif %}
    {% if header.direction == 1 %}
    <div class=\"col-sm-5 wowload fadeInRight\">
      <div class=\"spacer\">
        <h2>{{ header.titre }}</h2>
        <p>{{ header.texte }}</p>        
      </div>
    </div>
    {% else %}
    <div class=\"col-sm-7 wowload fadeInRight\">
      <div id=\"carousel-works\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\" role=\"listbox\">
          {% for image in page.media.images %}
            {% if loop.index == 1 %}
              <div class=\"item active\"><img src=\"{{ image.url }}\" class=\"img-responsive\"></div>   
            {% else %}
              <div class=\"item\"><img src=\"{{ image.url }}\" class=\"img-responsive\"></div> 
            {% endif %}         
          {% endfor %}
        </div>
        <a class=\"left carousel-control\" href=\"#carousel-works\" role=\"button\" data-slide=\"prev\"><i class=\"fa fa-3x fa-angle-left\"></i></a>
        <a class=\"right carousel-control\" href=\"#carousel-works\" role=\"button\" data-slide=\"next\"><i class=\"fa fa-3x fa-angle-right\"></i>
        </a> 
      </div>   
    </div> 
    {% endif %}
  </div>
</div>
    
", "modular/carousel_avec_textes.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/carousel_avec_textes.html.twig");
    }
}
