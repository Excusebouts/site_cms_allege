<?php

/* @Var:[La Franchise Dalalu] {{ form.value.last_name }} {{ form.value.first_name }} - {{ form.value.tel }} */
class __TwigTemplate_8b60cfd0e624717c3b1ff57eb6f38ab105493d2a231098303014e055b314e23d extends Twig_Template
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
        echo "[La Franchise Dalalu] ";
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "last_name", array());
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "first_name", array());
        echo " - ";
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "tel", array());
    }

    public function getTemplateName()
    {
        return "@Var:[La Franchise Dalalu] {{ form.value.last_name }} {{ form.value.first_name }} - {{ form.value.tel }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[La Franchise Dalalu] {{ form.value.last_name }} {{ form.value.first_name }} - {{ form.value.tel }}", "@Var:[La Franchise Dalalu] {{ form.value.last_name }} {{ form.value.first_name }} - {{ form.value.tel }}", "");
    }
}
