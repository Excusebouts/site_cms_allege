<?php

/* modular/sidemenupage3.html.twig */
class __TwigTemplate_d0cf16fcdf1c45d607d619e29a5bafed2371661e90a194c4608afe1a8c05d823 extends Twig_Template
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
        echo "<div class=\"side-menu\">
  <a class=\"link-1\" type=\"button\" data-toggle=\"modal\" data-target=\"";
        // line 2
        echo $this->getAttribute(($context["header"] ?? null), "menu_url1", array());
        echo "\">
    <span class=\"short\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></span>
    <div class=\"desc\">
      <p>";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "menu_texte1", array());
        echo "</p>
    </div>
  </a>
  <a class=\"link-2\" href=\"";
        // line 8
        echo $this->getAttribute(($context["header"] ?? null), "menu_url2", array());
        echo "\">
    <span class=\"short\"><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i></span>
    <div class=\"desc\">
      <p>";
        // line 11
        echo $this->getAttribute(($context["header"] ?? null), "menu_texte2", array());
        echo "</p>
    </div>
  </a>
  <a class=\"link-3\" href=\"";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "menu_url3", array());
        echo "\">
    <span class=\"short\"><span class=\"short\"><i class=\"fa fa-cubes\" aria-hidden=\"true\"></i></span></span>
    <div class=\"desc\">
      <p>";
        // line 17
        echo $this->getAttribute(($context["header"] ?? null), "menu_texte3", array());
        echo "</p>
    </div>
  </a>
</div>

 <div class=\"modal fade\" id=\"contact-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"contact-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\" id=\"myModalLabel\">Contactez nous</h4>
        </div>
        <div class=\"modal-body\">
          <div class=\"regularform\" style=\"padding: 0 20px;\">
           ";
        // line 31
        $this->loadTemplate("forms/form.html.twig", "modular/sidemenupage3.html.twig", 31)->display(array_merge($context, array("form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), array("contactmodalpage3-form")))));
        echo "         
          </div>
        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "modular/sidemenupage3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 31,  52 => 17,  46 => 14,  40 => 11,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"side-menu\">
  <a class=\"link-1\" type=\"button\" data-toggle=\"modal\" data-target=\"{{ header.menu_url1 }}\">
    <span class=\"short\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></span>
    <div class=\"desc\">
      <p>{{ header.menu_texte1 }}</p>
    </div>
  </a>
  <a class=\"link-2\" href=\"{{ header.menu_url2 }}\">
    <span class=\"short\"><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i></span>
    <div class=\"desc\">
      <p>{{ header.menu_texte2 }}</p>
    </div>
  </a>
  <a class=\"link-3\" href=\"{{ header.menu_url3 }}\">
    <span class=\"short\"><span class=\"short\"><i class=\"fa fa-cubes\" aria-hidden=\"true\"></i></span></span>
    <div class=\"desc\">
      <p>{{ header.menu_texte3 }}</p>
    </div>
  </a>
</div>

 <div class=\"modal fade\" id=\"contact-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"contact-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\" id=\"myModalLabel\">Contactez nous</h4>
        </div>
        <div class=\"modal-body\">
          <div class=\"regularform\" style=\"padding: 0 20px;\">
           {% include \"forms/form.html.twig\" with {form: forms('contactmodalpage3-form')} %}         
          </div>
        </div>
      </div>
    </div>
  </div>", "modular/sidemenupage3.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/prod/user/themes/dalalu/templates/modular/sidemenupage3.html.twig");
    }
}
