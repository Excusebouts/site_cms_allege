<?php

/* modular/footer.html.twig */
class __TwigTemplate_3ffae6cbec95597e09980a4e138fd33dd237a10a0ace1d64061b6ca5e1350d41 extends Twig_Template
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
        echo "<section class=\"bg-dark footer-block\" style=\"margin-top: -500px;\">
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
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "                     
                    </ul>
                  </div>
                  <div class=\"col-xs-4\">
                    <ul class=\"list-unstyled\">
                      <li class=\" first\">
                        <a href=\"/fr/plan-du-site.html\">Plan du site</a>
                      </li>
                      <li class=\" last\">
                        <a href=\"/fr/mentions-legales.html\">Mentions légales</a>
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-xs-4\">
                    <div id=\"footer__contacts\">
                      <address><h5 class=\"footer-title\"><strong>Société DAL'ALU</strong></h5></address>
                      <address id=\"footer__contacts__address\">Rue des girolles - Z.A. La Prade - 33650 Saint-Médard-d'Eyrans</address> <address id=\"footer__contacts__phone\">Téléphone : +33 (0)5 56 67 40 40 / Fax : +33 (0)5 56 67 40 50</address>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-12 col-md-4 carte_reseau\">
                <h1 class=\"out\">DALALU près de chez vous</h1>
                <a href=\"http://www.dalalu.fr/fr/contact.html\"><img src=\"img/map-pointer.png\" alt=\"localisation des franchises DAL'ALU\" width=\"50\" height=\"40\" style=\"margin-right: 10px;\"></a>
                <a class=\"btn btn-primary\" href=\"http://www.dalalu.fr/fr/contact.html\" role=\"button\">DAL'ALU près de chez vous</a>
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
                  Société DAL'ALU, SAS au capital de 4 200 000 Euros - B 438 705 238 R.C.S BORDEAUX - N° TVA intracommunautaire : FR35 438 705 238<br>
                  <br>
                  Crédit photos : ©Jean-Marie Colin Photographies / 2016
                </address>
              </div>
              <div class=\"col-xs-8\">
                <a href=\"http://www.dalalu.fr\"><h1 class=\"out\">Site DAL'ALU</h1> <img src=\"img/logo-dalalu.png\" alt=\"logo DAL'ALU\" style=\"max-width: 100%; max-height: 40px;\"></a>
                <span class=\"text text-left\">Copyright © 1982 - 2015 DAL'ALU. Tous droits réservés.</span>
                <br>
              </div>
              <div class=\"col-xs-4\">
                <div class=\"pull-right\">
                  <span class=\"text text-right\">Conception et réalisation société DAL'ALU.</span>
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
        return array (  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"bg-dark footer-block\" style=\"margin-top: -500px;\">
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
                      {{ page.content }}                     
                    </ul>
                  </div>
                  <div class=\"col-xs-4\">
                    <ul class=\"list-unstyled\">
                      <li class=\" first\">
                        <a href=\"/fr/plan-du-site.html\">Plan du site</a>
                      </li>
                      <li class=\" last\">
                        <a href=\"/fr/mentions-legales.html\">Mentions légales</a>
                      </li>
                    </ul>
                  </div>
                  <div class=\"col-xs-4\">
                    <div id=\"footer__contacts\">
                      <address><h5 class=\"footer-title\"><strong>Société DAL'ALU</strong></h5></address>
                      <address id=\"footer__contacts__address\">Rue des girolles - Z.A. La Prade - 33650 Saint-Médard-d'Eyrans</address> <address id=\"footer__contacts__phone\">Téléphone : +33 (0)5 56 67 40 40 / Fax : +33 (0)5 56 67 40 50</address>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-xs-12 col-md-4 carte_reseau\">
                <h1 class=\"out\">DALALU près de chez vous</h1>
                <a href=\"http://www.dalalu.fr/fr/contact.html\"><img src=\"img/map-pointer.png\" alt=\"localisation des franchises DAL'ALU\" width=\"50\" height=\"40\" style=\"margin-right: 10px;\"></a>
                <a class=\"btn btn-primary\" href=\"http://www.dalalu.fr/fr/contact.html\" role=\"button\">DAL'ALU près de chez vous</a>
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
                  Société DAL'ALU, SAS au capital de 4 200 000 Euros - B 438 705 238 R.C.S BORDEAUX - N° TVA intracommunautaire : FR35 438 705 238<br>
                  <br>
                  Crédit photos : ©Jean-Marie Colin Photographies / 2016
                </address>
              </div>
              <div class=\"col-xs-8\">
                <a href=\"http://www.dalalu.fr\"><h1 class=\"out\">Site DAL'ALU</h1> <img src=\"img/logo-dalalu.png\" alt=\"logo DAL'ALU\" style=\"max-width: 100%; max-height: 40px;\"></a>
                <span class=\"text text-left\">Copyright © 1982 - 2015 DAL'ALU. Tous droits réservés.</span>
                <br>
              </div>
              <div class=\"col-xs-4\">
                <div class=\"pull-right\">
                  <span class=\"text text-right\">Conception et réalisation société DAL'ALU.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </footer>
  </div>
</section>", "modular/footer.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/footer.html.twig");
    }
}
