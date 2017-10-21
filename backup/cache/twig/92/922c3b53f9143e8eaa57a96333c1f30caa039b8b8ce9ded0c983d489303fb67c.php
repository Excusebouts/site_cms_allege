<?php

/* modular/timeline.html.twig */
class __TwigTemplate_2c0282f0020d86a986c2c9ee2f8de1f985679631e45a6b3cd122b2eca3009a93 extends Twig_Template
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
        echo "<section id=\"tline\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">";
        // line 5
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "titretimeline", array());
        echo "</h2>
      </div>
    </div>
  </div>
  <br/>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <ul class=\"tline-holder\" id=\"tline-ul\">
          <!-- /tline-->
          <li class=\"tline-start\">
            <div class=\"tline-start-content\">
              <div class=\"btn btn-primary bgn-xl zoomIn disabled\" id=\"timeline-button-less\" style=\"margin-top: 0; margin-bottom: 30px;\">";
        // line 17
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "boutonhaut", array());
        echo "</div>
              <div class=\"tline-start-icon\">
              </div>
            </div>
          </li>

          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "list", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "       
            ";
            // line 24
            if (($this->getAttribute($context["item"], "direction", array()) == 1)) {
                // line 25
                echo "              ";
                if (($this->getAttribute($context["item"], "cache", array()) == 1)) {
                    // line 26
                    echo "                <li class=\"tline-item tline-item-left fadeInLeft item-hidden\">
              ";
                } else {
                    // line 28
                    echo "                <li class=\"tline-item tline-item-left fadeInLeft\">
              ";
                }
                // line 30
                echo "            ";
            } else {
                // line 31
                echo "              ";
                if (($this->getAttribute($context["item"], "cache", array()) == 1)) {
                    // line 32
                    echo "                <li class=\"tline-item tline-item-right fadeInRight item-hidden\">
              ";
                } else {
                    // line 34
                    echo "                <li class=\"tline-item tline-item-right fadeInRight\">
              ";
                }
                // line 36
                echo "            ";
            }
            // line 37
            echo "              <div class=\"tline-item-content\">
                <div class=\"date-icon fa fa-";
            // line 38
            echo $this->getAttribute($context["item"], "pictogramme", array());
            echo "\">
                </div>
                <div class=\"tline-item-txt text-right\">
                  <div class=\"meta\">
                    ";
            // line 42
            echo $this->getAttribute($context["item"], "date", array());
            echo "
                  </div>
                  <h3>";
            // line 44
            echo $this->getAttribute($context["item"], "titre", array());
            echo "</h3>
                  <p>
                    ";
            // line 46
            echo $this->getAttribute($context["item"], "texte", array());
            echo "
                  </p>
                </div>
              </div>
            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "             
          <li class=\"tline-start\">
            <div class=\"tline-start-content\">
              <div class=\"tline-start-icon\">
              </div>
              <div class=\"btn btn-primary bgn-xl zoomIn\" id=\"timeline-button-more\">";
        // line 56
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "boutonbas", array());
        echo "</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 56,  117 => 51,  105 => 46,  100 => 44,  95 => 42,  88 => 38,  85 => 37,  82 => 36,  78 => 34,  74 => 32,  71 => 31,  68 => 30,  64 => 28,  60 => 26,  57 => 25,  55 => 24,  49 => 23,  40 => 17,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"tline\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">{{ header.titretimeline }}</h2>
      </div>
    </div>
  </div>
  <br/>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <ul class=\"tline-holder\" id=\"tline-ul\">
          <!-- /tline-->
          <li class=\"tline-start\">
            <div class=\"tline-start-content\">
              <div class=\"btn btn-primary bgn-xl zoomIn disabled\" id=\"timeline-button-less\" style=\"margin-top: 0; margin-bottom: 30px;\">{{ header.boutonhaut }}</div>
              <div class=\"tline-start-icon\">
              </div>
            </div>
          </li>

          {% for item in header.list %}       
            {% if item.direction == 1 %}
              {% if item.cache == 1 %}
                <li class=\"tline-item tline-item-left fadeInLeft item-hidden\">
              {% else %}
                <li class=\"tline-item tline-item-left fadeInLeft\">
              {% endif %}
            {% else %}
              {% if item.cache == 1 %}
                <li class=\"tline-item tline-item-right fadeInRight item-hidden\">
              {% else %}
                <li class=\"tline-item tline-item-right fadeInRight\">
              {% endif %}
            {% endif %}
              <div class=\"tline-item-content\">
                <div class=\"date-icon fa fa-{{ item.pictogramme }}\">
                </div>
                <div class=\"tline-item-txt text-right\">
                  <div class=\"meta\">
                    {{ item.date }}
                  </div>
                  <h3>{{ item.titre }}</h3>
                  <p>
                    {{ item.texte }}
                  </p>
                </div>
              </div>
            </li>
          {% endfor %}             
          <li class=\"tline-start\">
            <div class=\"tline-start-content\">
              <div class=\"tline-start-icon\">
              </div>
              <div class=\"btn btn-primary bgn-xl zoomIn\" id=\"timeline-button-more\">{{ header.boutonbas }}</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
", "modular/timeline.html.twig", "/home/www/lafranchise.dalalu.fr/user/themes/dalalu/templates/modular/timeline.html.twig");
    }
}
