<?php

/* modular/footer.html.twig */
class __TwigTemplate_89331a22e2bde7c6168af6c72378f84c3faa513497ca8bea8a476e30d74bf8f3 extends Twig_Template
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
        echo "<section class=\"bg-dark footer-block\">
  <div class=\"container\">
    <footer>
      <div class=\"container-fluid\">
        <div class=\"footer\" id=\"footer\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-md-8\">
                <div class=\"row\">
                  <div class=\"col-xs-4\">                   
                    <ul class=\"list-unstyled\">   
                      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "list_gauche", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_gauche"]) {
            // line 13
            echo "                        <li class=\"\">
                           <a target=\"_blank\" href=\"";
            // line 14
            echo $this->getAttribute($context["list_gauche"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["list_gauche"], "text", array());
            echo "</a>
                        </li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_gauche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                  
                    </ul>
                  </div>
                  <div class=\"col-xs-4\">
                    <ul class=\"list-unstyled\">
                      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "list_droite", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["list_droite"]) {
            // line 22
            echo "                        <li class=\"\">
                           <a target=\"_blank\" href=\"";
            // line 23
            echo $this->getAttribute($context["list_droite"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["list_droite"], "text", array());
            echo "</a>
                        </li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_droite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
                    </ul>
                  </div>
                  <div class=\"col-xs-4\">
                    <div id=\"footer__contacts\">
                      <address>
                        <h5 class=\"footer-title\">
                          <strong>";
        // line 32
        echo $this->getAttribute(($context["header"] ?? null), "nomsociete", array());
        echo "</strong>
                        </h5>
                      </address>
                      <address id=\"footer__contacts__address\">";
        // line 35
        echo $this->getAttribute(($context["header"] ?? null), "adressesociete", array());
        echo "
                      </address> 
                      <address id=\"footer__contacts__phone\">";
        // line 37
        echo $this->getAttribute(($context["header"] ?? null), "telephonesociete", array());
        echo "
                      </address>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-12 col-md-4 carte_reseau\">
                <h1 class=\"out\">";
        // line 44
        echo $this->getAttribute(($context["header"] ?? null), "bouton_texte", array());
        echo "</h1>
                <a href=\"";
        // line 45
        echo $this->getAttribute(($context["header"] ?? null), "bouton_url", array());
        echo "\"><img src=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "map-pointer.png", array(), "array"), "url", array());
        echo "\" alt=\"localisation des franchises DAL'ALU\" width=\"50\" height=\"40\" style=\"margin-right: 10px;\"></a>
                <a class=\"btn btn-primary\" href=\"";
        // line 46
        echo $this->getAttribute(($context["header"] ?? null), "bouton_url", array());
        echo "\" role=\"button\">";
        echo $this->getAttribute(($context["header"] ?? null), "bouton_texte", array());
        echo "</a>
              </div>
              <div class=\"col-xs-12 col-md-4 social\">
                <a target=\"_blank\" href=";
        // line 49
        echo $this->getAttribute(($context["header"] ?? null), "facebook_url", array());
        echo " >
                  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "facebook_picto", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 51
            echo "                  <img src='";
            echo $this->getAttribute($context["img"], "path", array());
            echo "' />
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </a>
                 <a target=\"_blank\" href=";
        // line 54
        echo $this->getAttribute(($context["header"] ?? null), "twitter_url", array());
        echo " >
                  ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "twitter_picto", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 56
            echo "                  <img src='";
            echo $this->getAttribute($context["img"], "path", array());
            echo "' />
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </a>
                 <a target=\"_blank\" href=";
        // line 59
        echo $this->getAttribute(($context["header"] ?? null), "youtube_url", array());
        echo " >
                  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["header"] ?? null), "youtube_picto", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 61
            echo "                  <img src='";
            echo $this->getAttribute($context["img"], "path", array());
            echo "' />
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class=\"legal\">
        <div class=\"footer-bottom\">
          <div class=\"container-fluid pied\">
            <div class=\"row\">
              <div class=\"col-xs-12\">
                <address id=\"footer__contacts__raison\">
                  ";
        // line 75
        echo $this->getAttribute(($context["header"] ?? null), "raisonsocialsociete", array());
        echo "
                  <br>
                  <br>
                  ";
        // line 78
        echo $this->getAttribute(($context["header"] ?? null), "creditphoto", array());
        echo "
                </address>
              </div>
              <div class=\"col-xs-8\">
                <a href=\"http://www.dalalu.fr\">
                  <h1 class=\"out\">Site DAL'ALU</h1>
                  <img src=\"";
        // line 84
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "logo-dalalu.png", array(), "array"), "url", array());
        echo "\" alt=\"logo DAL'ALU\" style=\"max-width: 100%; max-height: 40px;\">
                </a> 
                <span class=\"text text-left\">";
        // line 86
        echo $this->getAttribute(($context["header"] ?? null), "copyright", array());
        echo "</span>
                <br>
              </div>
              <div class=\"col-xs-4\">
                <div class=\"pull-right\">
                  <span class=\"text text-right\">";
        // line 91
        echo $this->getAttribute(($context["header"] ?? null), "conception", array());
        echo "</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 91,  214 => 86,  209 => 84,  200 => 78,  194 => 75,  180 => 63,  171 => 61,  167 => 60,  163 => 59,  160 => 58,  151 => 56,  147 => 55,  143 => 54,  140 => 53,  131 => 51,  127 => 50,  123 => 49,  115 => 46,  109 => 45,  105 => 44,  95 => 37,  90 => 35,  84 => 32,  75 => 25,  64 => 23,  61 => 22,  57 => 21,  50 => 16,  39 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"bg-dark footer-block\">
  <div class=\"container\">
    <footer>
      <div class=\"container-fluid\">
        <div class=\"footer\" id=\"footer\">
          <div class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-xs-12 col-md-8\">
                <div class=\"row\">
                  <div class=\"col-xs-4\">                   
                    <ul class=\"list-unstyled\">   
                      {% for list_gauche in header.list_gauche %}
                        <li class=\"\">
                           <a target=\"_blank\" href=\"{{list_gauche.url}}\">{{ list_gauche.text }}</a>
                        </li>
                      {% endfor %}                  
                    </ul>
                  </div>
                  <div class=\"col-xs-4\">
                    <ul class=\"list-unstyled\">
                      {% for list_droite in header.list_droite %}
                        <li class=\"\">
                           <a target=\"_blank\" href=\"{{list_droite.url}}\">{{ list_droite.text }}</a>
                        </li>
                      {% endfor %}    
                    </ul>
                  </div>
                  <div class=\"col-xs-4\">
                    <div id=\"footer__contacts\">
                      <address>
                        <h5 class=\"footer-title\">
                          <strong>{{ header.nomsociete }}</strong>
                        </h5>
                      </address>
                      <address id=\"footer__contacts__address\">{{ header.adressesociete }}
                      </address> 
                      <address id=\"footer__contacts__phone\">{{ header.telephonesociete }}
                      </address>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-12 col-md-4 carte_reseau\">
                <h1 class=\"out\">{{ header.bouton_texte }}</h1>
                <a href=\"{{ header.bouton_url }}\"><img src=\"{{ page.media['map-pointer.png'].url }}\" alt=\"localisation des franchises DAL'ALU\" width=\"50\" height=\"40\" style=\"margin-right: 10px;\"></a>
                <a class=\"btn btn-primary\" href=\"{{ header.bouton_url }}\" role=\"button\">{{ header.bouton_texte }}</a>
              </div>
              <div class=\"col-xs-12 col-md-4 social\">
                <a target=\"_blank\" href={{ header.facebook_url }} >
                  {% for img in header.facebook_picto %}
                  <img src='{{ img.path }}' />
                  {% endfor %}
                </a>
                 <a target=\"_blank\" href={{ header.twitter_url }} >
                  {% for img in header.twitter_picto %}
                  <img src='{{ img.path }}' />
                  {% endfor %}
                </a>
                 <a target=\"_blank\" href={{ header.youtube_url }} >
                  {% for img in header.youtube_picto %}
                  <img src='{{ img.path }}' />
                  {% endfor %}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class=\"legal\">
        <div class=\"footer-bottom\">
          <div class=\"container-fluid pied\">
            <div class=\"row\">
              <div class=\"col-xs-12\">
                <address id=\"footer__contacts__raison\">
                  {{ header.raisonsocialsociete }}
                  <br>
                  <br>
                  {{ header.creditphoto }}
                </address>
              </div>
              <div class=\"col-xs-8\">
                <a href=\"http://www.dalalu.fr\">
                  <h1 class=\"out\">Site DAL'ALU</h1>
                  <img src=\"{{ page.media['logo-dalalu.png'].url }}\" alt=\"logo DAL'ALU\" style=\"max-width: 100%; max-height: 40px;\">
                </a> 
                <span class=\"text text-left\">{{ header.copyright }}</span>
                <br>
              </div>
              <div class=\"col-xs-4\">
                <div class=\"pull-right\">
                  <span class=\"text text-right\">{{ header.conception }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </div>
</section>", "modular/footer.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/modular/footer.html.twig");
    }
}
