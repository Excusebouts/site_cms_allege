<?php

/* modular/video_upload.html.twig */
class __TwigTemplate_0a56278e97f4e5818c4a6c0f29a609b272a3c3bbbfa5775a5f40d67ffb3fff6a extends Twig_Template
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
      <div class=\"col-md-6 col-sm-12 text-center\">
        <h2 class=\"section-heading\" style=\"padding-top:60px;\">";
        // line 5
        echo $this->getAttribute(($context["header"] ?? null), "titre", array());
        echo "</h2>
        <p>";
        // line 6
        echo $this->getAttribute(($context["header"] ?? null), "texte", array());
        echo "</p>
      </div>
      <div class=\"col-md-6 col-sm-12 text-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "videos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 10
            echo "        <video width=\"480\" height=\"272\" controls>
          <source src=\"";
            // line 11
            echo $this->getAttribute($context["video"], "url", array());
            echo "\"> Votre navigateur ne supporte pas la vidéo            
        </video>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </div>     
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/video_upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  42 => 11,  39 => 10,  35 => 9,  29 => 6,  25 => 5,  19 => 1,);
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
      <div class=\"col-md-6 col-sm-12 text-center\">
        <h2 class=\"section-heading\" style=\"padding-top:60px;\">{{ header.titre }}</h2>
        <p>{{ header.texte }}</p>
      </div>
      <div class=\"col-md-6 col-sm-12 text-center\">
        {% for video in page.media.videos %}
        <video width=\"480\" height=\"272\" controls>
          <source src=\"{{ video.url }}\"> Votre navigateur ne supporte pas la vidéo            
        </video>
      {% endfor %}
      </div>     
    </div>
  </div>
</section>", "modular/video_upload.html.twig", "/var/www/html/cms_dalalu/site_cms_allege/grav-admin/user/themes/dalalu/templates/modular/video_upload.html.twig");
    }
}
