<?php

/* modular/contact_blocpage1.html.twig */
class __TwigTemplate_529f18cc392fe717f930f40a4fb4d7ea44fc9a7328c2cf3063bd4691276e75e1 extends Twig_Template
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
        echo " <section id=\"contact\" class=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">";
        // line 5
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "titre_contact", array());
        echo "</h2>
        <hr class=\"primary\">
        <p>";
        // line 7
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "texte_contact", array());
        echo "</p>
        <div class=\"regularform\">
          ";
        // line 9
        $this->loadTemplate("forms/form.html.twig", "modular/contact_blocpage1.html.twig", 9)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("contact-formpage1")))));
        // line 10
        echo "        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/contact_blocpage1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  35 => 9,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <section id=\"contact\" class=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 text-center\">
        <h2 class=\"section-heading\">{{ header.titre_contact }}</h2>
        <hr class=\"primary\">
        <p>{{ header.texte_contact }}</p>
        <div class=\"regularform\">
          {% include \"forms/form.html.twig\" with {form: forms('contact-formpage1')} %}
        </div>
      </div>
    </div>
  </div>
</section>", "modular/contact_blocpage1.html.twig", "/home/www/lafranchise.dalalu.fr/user/themes/dalalu/templates/modular/contact_blocpage1.html.twig");
    }
}
