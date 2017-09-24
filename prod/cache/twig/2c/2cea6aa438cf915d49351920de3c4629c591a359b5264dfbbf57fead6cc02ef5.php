<?php

/* modular/menu.html.twig */
class __TwigTemplate_73c1b7f61b9468fed461879b5bb744d89b77787b76ad6913e7d5a4d529d994c6 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "logo-dalalu.png", array(), "array"), "url", array());
        echo "\" alt=\"\" />
              </a>
            </div>
            <div class=\"mbr-table-cell\">
              <button class=\"navbar-toggler pull-xs-right hidden-md-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                <div class=\"hamburger-icon\"></div>
              </button>
              <ul class=\"nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm\" id=\"exCollapsingNavbar\" style=\"margin: 0;\">
                <li class=\"nav-item\"><a class=\"nav-link link mbr-editable-menu-item\" href=\"";
        // line 16
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "urlpage1", array());
        echo "\">";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "nompage1", array());
        echo "</a></li>
                <li class=\"nav-item\"><a class=\"nav-link link mbr-editable-menu-item\" href=\"";
        // line 17
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "urlpage2", array());
        echo "\">";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "nompage2", array());
        echo "</a></li>
                <li class=\"nav-item dropdown\"><a class=\"nav-link link dropdown-toggle mbr-editable-menu-item\" href=\"";
        // line 18
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "urlpage3", array());
        echo "\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "nompage3", array());
        echo "</a>
                  <div class=\"dropdown-menu dropdown-menu-right\">
                  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "partpage3", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 21
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
        // line 23
        echo "                  </div>
                </li>
                <li class=\"nav-item\"><a class=\"nav-link link mbr-editable-menu-item\" href=\"";
        // line 25
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "urlpage4", array());
        echo "\">";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "nompage4", array());
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
        return array (  77 => 25,  73 => 23,  62 => 21,  58 => 20,  51 => 18,  45 => 17,  39 => 16,  28 => 8,  19 => 1,);
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
                <li class=\"nav-item\"><a class=\"nav-link link mbr-editable-menu-item\" href=\"{{ header.urlpage1 }}\">{{ header.nompage1 }}</a></li>
                <li class=\"nav-item\"><a class=\"nav-link link mbr-editable-menu-item\" href=\"{{ header.urlpage2 }}\">{{ header.nompage2 }}</a></li>
                <li class=\"nav-item dropdown\"><a class=\"nav-link link dropdown-toggle mbr-editable-menu-item\" href=\"{{ header.urlpage3 }}\" data-toggle=\"dropdown-submenu\" aria-expanded=\"false\">{{ header.nompage3 }}</a>
                  <div class=\"dropdown-menu dropdown-menu-right\">
                  {% for part in header.partpage3 %}
                    <a class=\"dropdown-item mbr-editable-menu-item\" href=\"{{ part.url }}\">{{ part.text }} </a>                  
                  {% endfor %}
                  </div>
                </li>
                <li class=\"nav-item\"><a class=\"nav-link link mbr-editable-menu-item\" href=\"{{ header.urlpage4 }}\">{{ header.nompage4 }}</a></li>
              </ul>
              <button hidden=\"\" class=\"navbar-toggler navbar-close\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar\">
                <div class=\"close-icon\"></div>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </section>
  </div>", "modular/menu.html.twig", "/home/www/lafranchise.dalalu.fr/user/themes/dalalu/templates/modular/menu.html.twig");
    }
}
