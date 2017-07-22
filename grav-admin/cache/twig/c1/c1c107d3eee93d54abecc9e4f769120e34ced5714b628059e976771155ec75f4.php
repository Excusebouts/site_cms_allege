<?php

/* modular/photozone.html.twig */
class __TwigTemplate_1aced4a33043f49c7e3862318a3d8b88d1cc792e7f2bd54b2195df543c181ed0 extends Twig_Template
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
        echo "<section id=\"photos-zone\" class=\"photos-section\" style=\"padding-top: 60px;\">
    <div class=\"container\" style=\"max-width: 100%; padding: 0; margin: 0 auto; width: 100%;\">
      <div class=\"row\">
        <div class=\"col-md-6 text-center left-img\" style=\"overflow: hidden\">
          <img src=\"";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "image_gauche", array()), array(), "array"), "url", array());
        echo "\" />
          <p>
            ";
        // line 7
        echo $this->getAttribute(($context["header"] ?? null), "texte_gauche", array());
        echo "
          </p>
        </div>
        <div class=\"col-md-6 text-center right-img\" style=\"overflow: hidden\">
          <img src=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "image_droite", array()), array(), "array"), "url", array());
        echo "\" />
          <p>
            ";
        // line 13
        echo $this->getAttribute(($context["header"] ?? null), "texte_droite", array());
        echo "
          </p>
        </div>
      </div>
    </div>
  </section>";
    }

    public function getTemplateName()
    {
        return "modular/photozone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  37 => 11,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"photos-zone\" class=\"photos-section\" style=\"padding-top: 60px;\">
    <div class=\"container\" style=\"max-width: 100%; padding: 0; margin: 0 auto; width: 100%;\">
      <div class=\"row\">
        <div class=\"col-md-6 text-center left-img\" style=\"overflow: hidden\">
          <img src=\"{{ page.media[header.image_gauche].url }}\" />
          <p>
            {{ header.texte_gauche }}
          </p>
        </div>
        <div class=\"col-md-6 text-center right-img\" style=\"overflow: hidden\">
          <img src=\"{{ page.media[header.image_droite].url }}\" />
          <p>
            {{ header.texte_droite }}
          </p>
        </div>
      </div>
    </div>
  </section>", "modular/photozone.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/photozone.html.twig");
    }
}
