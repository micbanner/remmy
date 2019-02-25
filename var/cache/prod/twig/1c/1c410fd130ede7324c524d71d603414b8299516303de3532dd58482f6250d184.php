<?php

/* @RemmyFront/ShoppingCard/ShoppingCard.html.twig */
class __TwigTemplate_8ad9ecad1b2ac19c09421cb9d0fd6b80c0344be2416224de8866cdbcb4ea07f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@RemmyFront/ShoppingCard/ShoppingCard.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container\">
\t<table id=\"cart\" class=\"table table-hover table-condensed base-shcard mt-5\">
    \t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th style=\"width:50%\">Product</th>
\t\t\t\t\t\t\t<th style=\"width:10%\">Price</th>
\t\t\t\t\t\t\t<th style=\"width:8%\">Quantity</th>
\t\t\t\t\t\t\t<th style=\"width:22%\" class=\"text-center\">Subtotal</th>
\t\t\t\t\t\t\t<th style=\"width:10%\"></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td data-th=\"Product\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 hidden-xs\"><img src=\"http://placehold.it/100x100\" alt=\"...\" class=\"img-responsive\"/></div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 offset-sm-1\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"nomargin\">Product 1</h4>
\t\t\t\t\t\t\t\t\t\t<p>aaaaaaaaa</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Price\">zaaaaaaaaaa</td>
\t\t\t\t\t\t\t<td data-th=\"Quantity\">
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control text-center\" value=\"1\">
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td data-th=\"Subtotal\" class=\"text-center\">1.99</td>
\t\t\t\t\t\t\t<td class=\"actions\" data-th=\"\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\"><i class=\"far fa-trash-alt\"></i></button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t<tfoot>
\t\t\t\t\t\t<tr class=\"visible-xs\">
\t\t\t\t\t\t\t<td class=\"text-center\"><strong>Total 1.99</strong></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><a href=\"/\" class=\"btn btn-warning\"><i class=\"fa fa-angle-left\"></i> Continue Shopping</a></td>
\t\t\t\t\t\t\t<td colspan=\"2\" class=\"hidden-xs\"></td>
\t\t\t\t\t\t\t<td class=\"hidden-xs text-center\"><strong>Total \$1.99</strong></td>
\t\t\t\t\t\t\t<td><a href=\"#\" class=\"btn btn-success btn-block\">Checkout <i class=\"fa fa-angle-right\"></i></a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tfoot>
\t\t\t\t</table>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"offset-lg-5 col-lg-4 offset-lg-3\">
\t\t\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/payplug.png"), "html", null, true);
        echo "\" alt=\"logo payement visa cb mastercard\">
\t\t\t\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/paymentlogo_paypal.png"), "html", null, true);
        echo "\" alt=\"logo paypal\">
\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
</div><br><br><br><br>

";
    }

    public function getTemplateName()
    {
        return "@RemmyFront/ShoppingCard/ShoppingCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 53,  81 => 52,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@RemmyFront/ShoppingCard/ShoppingCard.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\FrontBundle\\Resources\\views\\ShoppingCard\\ShoppingCard.html.twig");
    }
}
