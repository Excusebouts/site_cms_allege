<?php

/* modular/photozone.html.twig */
class __TwigTemplate_465781660093cee1720e48a5f3c21d0d6f3b0e1ba1686184aff314371572f4c5 extends Twig_Template
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
        <div class=\"col-md-6 left-img\" style=\"overflow: hidden\">
          <img src=\"";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "image_gauche", array()), array(), "array"), "url", array());
        echo "\" />
          <p>
            ";
        // line 7
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "texte_gauche", array());
        echo "
          </p>
        </div>
        <div class=\"col-md-6 right-img\" style=\"overflow: hidden\">
          <img src=\"";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "image_droite", array()), array(), "array"), "url", array());
        echo "\" />
          <p>
            ";
        // line 13
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "texte_droite", array());
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
        <div class=\"col-md-6 left-img\" style=\"overflow: hidden\">
          <img src=\"{{ page.media[header.image_gauche].url }}\" />
          <p>
            {{ header.texte_gauche }}
          </p>
        </div>
        <div class=\"col-md-6 right-img\" style=\"overflow: hidden\">
          <img src=\"{{ page.media[header.image_droite].url }}\" />
          <p>
            {{ header.texte_droite }}
          </p>
        </div>
      </div>
    </div>
  </section>", "modular/photozone.html.twig", "/home/www/lafranchise.dalalu.fr/user/themes/dalalu/templates/modular/photozone.html.twig");
    }
}
