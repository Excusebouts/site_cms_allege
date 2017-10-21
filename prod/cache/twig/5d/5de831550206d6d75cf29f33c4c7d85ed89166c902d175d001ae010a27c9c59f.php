<?php

/* modular/telechargement.html.twig */
class __TwigTemplate_36c89d4536abd2ab8649735209f1d4f7b1a47f095847fad1d6b347529ccc176e extends Twig_Template
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
        echo "<section id=\"contact\" class=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">";
        // line 5
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "titre_telechargement", array());
        echo "</h2>
        <hr class=\"primary\">
        <p>
          ";
        // line 8
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "soustitre_telechargement", array());
        echo "
        </p>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "list", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "        <a target=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" href=\"\">";
            echo $this->getAttribute($context["item"], "titre", array());
            echo "</a>
        <br>       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/telechargement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  40 => 11,  36 => 10,  31 => 8,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\" class=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_telechargement }}</h2>
        <hr class=\"primary\">
        <p>
          {{ header.soustitre_telechargement }}
        </p>
        {% for item in header.list %}
        <a target=\"{{ item.url }}\" href=\"\">{{ item.titre }}</a>
        <br>       
        {% endfor %}
      </div>
    </div>
  </div>
</section>", "modular/telechargement.html.twig", "/home/www/lafranchise.dalalu.fr/user/themes/dalalu/templates/modular/telechargement.html.twig");
    }
}
