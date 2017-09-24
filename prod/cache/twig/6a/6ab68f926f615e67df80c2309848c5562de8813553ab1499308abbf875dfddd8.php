<?php

/* modular/sliderimage.html.twig */
class __TwigTemplate_4787f27da18e69911f436802416d7967b40c679592cb1f446be236a62c986b65 extends Twig_Template
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
        echo "<div class=\"home-slider-image\" id=\"demos\" style=\"background:#F1F1F1; padding-top: 0;\">
  <div style=\"padding: 60px 0 0;\">
    <div class=\"automatic-slider\">
      <ul>      
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "        <li>
          <a href=\"";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "listurlslider", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array"), "url", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["image"], "url", array());
            echo "\" /></a>
        </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ul>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/sliderimage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  45 => 7,  42 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"home-slider-image\" id=\"demos\" style=\"background:#F1F1F1; padding-top: 0;\">
  <div style=\"padding: 60px 0 0;\">
    <div class=\"automatic-slider\">
      <ul>      
        {% for image in page.media.images %}
        <li>
          <a href=\"{{ header.listurlslider[loop.index-1].url }}\"><img src=\"{{ image.url }}\" /></a>
        </li>
        {% endfor %}
      </ul>
    </div>
  </div>
</div>
", "modular/sliderimage.html.twig", "/home/www/lafranchise.dalalu.fr/user/themes/dalalu/templates/modular/sliderimage.html.twig");
    }
}
