<?php

/* @Var:Votre message a bien été envoyé. Merci. */
class __TwigTemplate_b84ab42c8950e4cf23105065072b13a1fbb602a93e62f529980d5e25dd795ca7 extends Twig_Template
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
        echo "Votre message a bien été envoyé. Merci.";
    }

    public function getTemplateName()
    {
        return "@Var:Votre message a bien été envoyé. Merci.";
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
        return new Twig_Source("Votre message a bien été envoyé. Merci.", "@Var:Votre message a bien été envoyé. Merci.", "");
    }
}
