<?php

/* @RemmyFront/ShoppingCard/ShoppingCard.html.twig */
class __TwigTemplate_0222a39a39ea3dab4c7854a57ab10dbc624c38694d84b68604b7cd7783f8b614 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyFront/ShoppingCard/ShoppingCard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyFront/ShoppingCard/ShoppingCard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  103 => 53,  99 => 52,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

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
\t\t\t\t\t\t<img src=\"{{ asset('assets/payplug.png' ) }}\" alt=\"logo payement visa cb mastercard\">
\t\t\t\t\t\t<img src=\"{{ asset('assets/paymentlogo_paypal.png' ) }}\" alt=\"logo paypal\">
\t\t\t\t\t\t<img src=\"\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
</div><br><br><br><br>

{% endblock %}", "@RemmyFront/ShoppingCard/ShoppingCard.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\FrontBundle\\Resources\\views\\ShoppingCard\\ShoppingCard.html.twig");
    }
}
