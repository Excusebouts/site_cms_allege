<?php

/* forms/fields/fieldset/fieldset.html.twig */
class __TwigTemplate_e0502db0d3357b2a9b89fa01b518bf68a66d532aa627d46dc2709fb40a08831e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/fieldset/fieldset.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
            'group' => array($this, 'block_group'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"form-fieldset";
        if ((isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " vertical";
        }
        echo "\">
    ";
        // line 5
        $this->displayBlock('contents', $context, $blocks);
        // line 66
        echo "  </div>
";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\"";
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "collapsible", array()) ||  !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "collapsed", array()))) {
            echo " checked=\"checked\"";
        }
        echo " />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label";
        // line 10
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "collapsible", array())) {
            echo " for=\"fieldset_collapsible_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
            echo "\" class=\"form-fieldset--cursor\"";
        }
        echo ">
            ";
        // line 11
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 12
            echo "            <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array()))), "html", null, true);
            echo "\">
            ";
        }
        // line 14
        echo "            ";
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "          ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 25
            echo "          </span>
          ";
        }
        // line 27
        echo "
          ";
        // line 29
        echo "          <span class=\"actions\">
            ";
        // line 30
        $this->displayBlock('actions', $context, $blocks);
        // line 38
        echo "          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        ";
        // line 48
        echo "      >

        ";
        // line 50
        $this->displayBlock('group', $context, $blocks);
        // line 64
        echo "      </div>
    ";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "              ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "icon", array())) {
            // line 16
            echo "                <i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "icon", array()), "html", null, true);
            echo "\"></i>
              ";
        }
        // line 18
        echo "              ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())), "html", null, true);
        echo "
              ";
        // line 19
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
              ";
        // line 20
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array())) {
            // line 21
            echo "                <span class=\"form-fieldset--info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array())), "html", null, true);
            echo "</span>
              ";
        }
        // line 23
        echo "            ";
    }

    // line 30
    public function block_actions($context, array $blocks = array())
    {
        // line 31
        echo "              ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "collapsible", array())) {
            // line 32
            echo "                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              ";
        }
        // line 37
        echo "            ";
    }

    // line 50
    public function block_group($context, array $blocks = array())
    {
        // line 51
        echo "          ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array())) {
            // line 52
            echo "            <p>";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array())), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "text", array())), "html", null, true);
            }
            echo "<p>
          ";
        }
        // line 54
        echo "
          ";
        // line 55
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 56
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 57
                echo "              ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 58
                    echo "                  ";
                    $context["value"] = (($this->getAttribute($context["field"], "name", array())) ? ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method")) : ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "toArray", array())));
                    // line 59
                    echo "                ";
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "forms/fields/fieldset/fieldset.html.twig", 59)->display($context);
                    // line 60
                    echo "              ";
                }
                // line 61
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "          ";
        }
        // line 63
        echo "        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/fieldset/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 63,  231 => 62,  217 => 61,  214 => 60,  211 => 59,  208 => 58,  205 => 57,  187 => 56,  185 => 55,  182 => 54,  172 => 52,  169 => 51,  166 => 50,  162 => 37,  155 => 32,  152 => 31,  149 => 30,  145 => 23,  139 => 21,  137 => 20,  133 => 19,  128 => 18,  122 => 16,  119 => 15,  116 => 14,  111 => 64,  109 => 50,  105 => 48,  98 => 38,  96 => 30,  93 => 29,  90 => 27,  86 => 25,  83 => 24,  80 => 14,  74 => 12,  72 => 11,  64 => 10,  52 => 6,  49 => 5,  44 => 66,  42 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
  <div class=\"form-fieldset{% if vertical %} vertical{% endif %}\">
    {% block contents %}
      <input type=\"checkbox\" class=\"hidden\" id=\"fieldset_collapsible_{{ field.name }}\"{% if not field.collapsible or not field.collapsed %} checked=\"checked\"{% endif %} />

      <div class=\"form-label form-fieldset--label\">
        <h2>
          <label{% if field.collapsible %} for=\"fieldset_collapsible_{{ field.name }}\" class=\"form-fieldset--cursor\"{% endif %}>
            {% if field.help %}
            <span class=\"hint--bottom\" data-hint=\"{{ field.help|e|tu }}\">
            {% endif %}
            {% block label %}
              {% if field.icon %}
                <i class=\"fa fa-fw fa-{{ field.icon }}\"></i>
              {% endif %}
              {{ field.title|tu }}
              {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
              {% if field.info %}
                <span class=\"form-fieldset--info\">{{ field.info|tu }}</span>
              {% endif %}
            {% endblock %}
          {% if field.help %}
          </span>
          {% endif %}

          {# Actions panel #}
          <span class=\"actions\">
            {% block actions %}
              {% if field.collapsible %}
                <span class=\"form-fieldset--collapsible\">
                  <i class=\"fa fa-chevron-down open\"></i>
                  <i class=\"fa fa-chevron-up close\"></i>
                </span>
              {% endif %}
            {% endblock %}
          </span>
        </label>
      </h2>
      </div>
      <div class=\"form-data\"
        {#{% block global_attributes %}
          data-grav-field=\"{{ field.type }}\"
          data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
          data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
        {% endblock %}#}
      >

        {% block group %}
          {% if field.text %}
            <p>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.text|tu }}{% else %}{{ field.text|t }}{% endif %}<p>
          {% endif %}

          {% if field.fields %}
            {% for field in field.fields %}
              {% if field.type %}
                  {% set value = field.name ? data.value(field.name) : data.toArray %}
                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
              {% endif %}
            {% endfor %}
          {% endif %}
        {% endblock %}
      </div>
    {% endblock %}
  </div>
{% endblock %}
", "forms/fields/fieldset/fieldset.html.twig", "/home/www/lafranchise.dalalu.fr/user/plugins/admin/themes/grav/templates/forms/fields/fieldset/fieldset.html.twig");
    }
}
