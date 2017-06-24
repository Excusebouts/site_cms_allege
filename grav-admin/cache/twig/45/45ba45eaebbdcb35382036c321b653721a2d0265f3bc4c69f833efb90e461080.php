<?php

/* modular/map.html.twig */
class __TwigTemplate_fc757763c1d1fb6b1729afa356ffd256794fb17a0539231790cc0f25d9a7d32c extends Twig_Template
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
        echo "<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "titre_map", array());
        echo "</h2>
        <hr class=\"primary\">
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div id=\"carte-page1\" class=\"map space-set\">
          <p>Map will not be display without Internet Connection.</p>
        </div>
      </div>
      <div class=\"col-md-6\">";
        // line 15
        echo $this->getAttribute(($context["header"] ?? null), "texte_map", array());
        echo "</div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_map }}</h2>
        <hr class=\"primary\">
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div id=\"carte-page1\" class=\"map space-set\">
          <p>Map will not be display without Internet Connection.</p>
        </div>
      </div>
      <div class=\"col-md-6\">{{ header.texte_map }}</div>
    </div>
  </div>
</section>", "modular/map.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/map.html.twig");
    }
}
