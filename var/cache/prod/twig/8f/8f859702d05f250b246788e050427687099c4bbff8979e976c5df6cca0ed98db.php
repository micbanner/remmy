<?php

/* @RemmyMain/Default/index.html.twig */
class __TwigTemplate_04a19edc4b5ec48adbba3ddaad493abca95d4607e0d18aeeab158fdf83c4baad extends Twig_Template
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
        echo "hello world !";
    }

    public function getTemplateName()
    {
        return "@RemmyMain/Default/index.html.twig";
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
        return new Twig_Source("", "@RemmyMain/Default/index.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\MainBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
