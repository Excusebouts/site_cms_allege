<?php

/* @Var:{{ form.value.message }}  */
class __TwigTemplate_22cd84d7b3d74960443823a7d95f1da67eca3fc21ff2f3f082d00e2d75c95ff5 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "message", array());
        echo " ";
    }

    public function getTemplateName()
    {
        return "@Var:{{ form.value.message }} ";
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
        return new Twig_Source("{{ form.value.message }} ", "@Var:{{ form.value.message }} ", "");
    }
}
