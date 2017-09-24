<?php

/* modular/menu.html.twig */
class __TwigTemplate_eccb23ccfd8bd6df8708dfbc934a6ba0d8f3a9c68a55a457b41c19378d499150 extends Twig_Template
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
        echo "<div id=\"menu-0\" class=\"m-app\">
    <section>
      <nav class=\"navbar navbar-dropdown navbar-fixed-top\">
        <div class=\"container\">
          <div class=\"mbr-table\">
            <div class=\"mbr-table-cell\">
              <a class=\"navbar-caption\" href=\"/\">
                <img class=\"logo\" src=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "logo-dalalu.png", array(), "array"), "url", array());
        echo "\" alt=\"\" />
              </a>
            </div>
            <div class=\"mbr-table-cell\">
              <button class=\"navbar-toggler pull-xs-right hidden-md-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                <div class=\"hamburger-icon\"></div>
              </button>
              <ul class=\"nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm\" id=\"exCollapsingNavbar\" style=\"margin: 0;\">
                ";
        // line 16
        if (($this->getAttribute(($context["header"] ?? null), "surbrillance_page_1", array()) == 1)) {
            // line 17
            echo "                <li class=\"nav-item open\">
                ";
        } else {
            // line 19
            echo "                <li class=\"nav-item\">
                ";
        }
        // line 21
        echo "                  <a class=\"nav-link link mbr-editable-menu-item\" href=\"";
        echo $this->getAttribute(($context["header"] ?? null), "urlpage1", array());
        echo "\">";
        echo $this->getAttribute(($context["header"] ?? null), "nompage1", array());
        echo "</a></li>       
                ";
        // line 22
        if (($this->getAttribute(($context["header"] ?? null), "surbrillance_page_2", array()) == 1)) {
            // line 23
            echo "                <li class=\"nav-item open\">
                ";
        } else {
            // line 25
            echo "                <li class=\"nav-item\">
                ";
        }
        // line 27
        echo "                  <a class=\"nav-link link mbr-editable-menu-item\" href=\"";
        echo $this->getAttribute(($context["header"] ?? null), "urlpage2", array());
        echo "\">";
        echo $this->getAttribute(($context["header"] ?? null), "nompage2", array());
        echo "</a></li>
                ";
        // line 28
        if (($this->getAttribute(($context["header"] ?? null), "surbrillance_page_3", array()) == 1)) {
            // line 29
            echo "                <li class=\"nav-item dropdown open\">
                ";
        } else {
            // line 31
            echo "                <li class=\"nav-item dropdown\">
                ";
        }
        // line 33
        echo "                  <a class=\"nav-link link dropdown-toggle mbr-editable-menu-item\" href=\"";
        echo $this->getAttribute(($context["header"] ?? null), "urlpage3", array());
        echo "\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">";
        echo $this->getAttribute(($context["header"] ?? null), "nompage3", array());
        echo "</a>
                  <div class=\"dropdown-menu dropdown-menu-right\">
                  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "partpage3", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 36
            echo "                    <a class=\"dropdown-item mbr-editable-menu-item\" href=\"";
            echo $this->getAttribute($context["part"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["part"], "text", array());
            echo " </a>                  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                  </div>
                </li>
                ";
        // line 40
        if (($this->getAttribute(($context["header"] ?? null), "surbrillance_page_4", array()) == 1)) {
            // line 41
            echo "                <li class=\"nav-item open\">
                ";
        } else {
            // line 43
            echo "                <li class=\"nav-item\">
                ";
        }
        // line 45
        echo "                  <a class=\"nav-link link mbr-editable-menu-item\" href=\"";
        echo $this->getAttribute(($context["header"] ?? null), "urlpage4", array());
        echo "\">";
        echo $this->getAttribute(($context["header"] ?? null), "nompage4", array());
        echo "</a></li>
              </ul>
              <button hidden=\"\" class=\"navbar-toggler navbar-close\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                <div class=\"close-icon\"></div>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </section>
  </div>";
    }

    public function getTemplateName()
    {
        return "modular/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  116 => 43,  112 => 41,  110 => 40,  106 => 38,  95 => 36,  91 => 35,  83 => 33,  79 => 31,  75 => 29,  73 => 28,  66 => 27,  62 => 25,  58 => 23,  56 => 22,  49 => 21,  45 => 19,  41 => 17,  39 => 16,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"menu-0\" class=\"m-app\">
    <section>
      <nav class=\"navbar navbar-dropdown navbar-fixed-top\">
        <div class=\"container\">
          <div class=\"mbr-table\">
            <div class=\"mbr-table-cell\">
              <a class=\"navbar-caption\" href=\"/\">
                <img class=\"logo\" src=\"{{ page.media['logo-dalalu.png'].url }}\" alt=\"\" />
              </a>
            </div>
            <div class=\"mbr-table-cell\">
              <button class=\"navbar-toggler pull-xs-right hidden-md-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                <div class=\"hamburger-icon\"></div>
              </button>
              <ul class=\"nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm\" id=\"exCollapsingNavbar\" style=\"margin: 0;\">
                {% if header.surbrillance_page_1 == 1 %}
                <li class=\"nav-item open\">
                {% else %}
                <li class=\"nav-item\">
                {% endif %}
                  <a class=\"nav-link link mbr-editable-menu-item\" href=\"{{ header.urlpage1 }}\">{{ header.nompage1 }}</a></li>       
                {% if header.surbrillance_page_2 == 1 %}
                <li class=\"nav-item open\">
                {% else %}
                <li class=\"nav-item\">
                {% endif %}
                  <a class=\"nav-link link mbr-editable-menu-item\" href=\"{{ header.urlpage2 }}\">{{ header.nompage2 }}</a></li>
                {% if header.surbrillance_page_3 == 1 %}
                <li class=\"nav-item dropdown open\">
                {% else %}
                <li class=\"nav-item dropdown\">
                {% endif %}
                  <a class=\"nav-link link dropdown-toggle mbr-editable-menu-item\" href=\"{{ header.urlpage3 }}\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">{{ header.nompage3 }}</a>
                  <div class=\"dropdown-menu dropdown-menu-right\">
                  {% for part in header.partpage3 %}
                    <a class=\"dropdown-item mbr-editable-menu-item\" href=\"{{ part.url }}\">{{ part.text }} </a>                  
                  {% endfor %}
                  </div>
                </li>
                {% if header.surbrillance_page_4 == 1 %}
                <li class=\"nav-item open\">
                {% else %}
                <li class=\"nav-item\">
                {% endif %}
                  <a class=\"nav-link link mbr-editable-menu-item\" href=\"{{ header.urlpage4 }}\">{{ header.nompage4 }}</a></li>
              </ul>
              <button hidden=\"\" class=\"navbar-toggler navbar-close\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                <div class=\"close-icon\"></div>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </section>
  </div>", "modular/menu.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/modular/menu.html.twig");
    }
}
