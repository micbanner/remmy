<?php

/* @RemmyHome/Default/index.html.twig */
class __TwigTemplate_7c2dba5d2d23ec8b2e20ff349386e772d575b81a6e4010ef5f0e4ceec1f7046a extends Twig_Template
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
        echo "Hello World!
";
    }

    public function getTemplateName()
    {
        return "@RemmyHome/Default/index.html.twig";
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
        return new Twig_Source("", "@RemmyHome/Default/index.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\HomeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
