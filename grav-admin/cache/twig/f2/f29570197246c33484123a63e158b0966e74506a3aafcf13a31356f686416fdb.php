<?php

/* modular/contact_bloc.html.twig */
class __TwigTemplate_da77fe17c23fc0a0d5e444292a21c40e392ed34e7a1dcb194f1b411600d5cf7a extends Twig_Template
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
        echo $this->getAttribute(($context["header"] ?? null), "titre_contact", array());
        echo "</h2>
        <hr class=\"primary\">
        <p>";
        // line 7
        echo $this->getAttribute(($context["header"] ?? null), "texte_contact", array());
        echo "</p>
        <div class=\"regularform\">
          <div class=\"done\">
            <div class=\"alert alert-success\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              Votre message a bien été envoyé. Merci.
            </div>
          </div>
          <form method=\"post\" action=\"contact.php\" id=\"contactform\" class=\"text-left\">
            <input name=\"first_name\" type=\"text\" class=\"col-sm-12 col-md-6 norightborder\" placeholder=\"Prénom *\">
            <input name=\"last_name\" type=\"text\" class=\"col-sm-12 col-md-6\" placeholder=\"Nom *\">

            <input name=\"tel\" type=\"email\" class=\"col-sm-12 col-md-6 norightborder\" placeholder=\"Téléphone *\">
            <input name=\"email\" type=\"email\" class=\"col-sm-12 col-md-6\" placeholder=\"Addresse email *\">

            <div class=\"col-sm-4 col-xs-12 gender\">
              Sexe
            </div>
            <div class=\"col-sm-4 col-xs-6 gender\">
              <label>
                <input type=\"radio\" name=\"sexe\" value=\"male\"> Homme
              </label>
            </div>
            <div class=\"col-sm-4 col-xs-6 gender\">
              <label>
                <input type=\"radio\" name=\"sexe\" value=\"female\"> Femme
              </label>
            </div>

            <textarea name=\"comment\" class=\"col-sm-12 col-md-12\" placeholder=\"Message *\"></textarea>
            <div class=\"col-md-12\" style=\"text-align:center;\">
              <input type=\"submit\" id=\"submit\" class=\"contact submit btn btn-primary btn-xl\" value=\"";
        // line 38
        echo $this->getAttribute(($context["header"] ?? null), "bouton_contact", array());
        echo "\">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/contact_bloc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 38,  30 => 7,  25 => 5,  19 => 1,);
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
          <div class=\"done\">
            <div class=\"alert alert-success\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              Votre message a bien été envoyé. Merci.
            </div>
          </div>
          <form method=\"post\" action=\"contact.php\" id=\"contactform\" class=\"text-left\">
            <input name=\"first_name\" type=\"text\" class=\"col-sm-12 col-md-6 norightborder\" placeholder=\"Prénom *\">
            <input name=\"last_name\" type=\"text\" class=\"col-sm-12 col-md-6\" placeholder=\"Nom *\">

            <input name=\"tel\" type=\"email\" class=\"col-sm-12 col-md-6 norightborder\" placeholder=\"Téléphone *\">
            <input name=\"email\" type=\"email\" class=\"col-sm-12 col-md-6\" placeholder=\"Addresse email *\">

            <div class=\"col-sm-4 col-xs-12 gender\">
              Sexe
            </div>
            <div class=\"col-sm-4 col-xs-6 gender\">
              <label>
                <input type=\"radio\" name=\"sexe\" value=\"male\"> Homme
              </label>
            </div>
            <div class=\"col-sm-4 col-xs-6 gender\">
              <label>
                <input type=\"radio\" name=\"sexe\" value=\"female\"> Femme
              </label>
            </div>

            <textarea name=\"comment\" class=\"col-sm-12 col-md-12\" placeholder=\"Message *\"></textarea>
            <div class=\"col-md-12\" style=\"text-align:center;\">
              <input type=\"submit\" id=\"submit\" class=\"contact submit btn btn-primary btn-xl\" value=\"{{ header.bouton_contact }}\">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>", "modular/contact_bloc.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/contact_bloc.html.twig");
    }
}
