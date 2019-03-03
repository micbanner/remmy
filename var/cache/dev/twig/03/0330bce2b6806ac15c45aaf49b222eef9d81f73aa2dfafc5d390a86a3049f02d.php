<?php

/* @RemmyFront/ProductRetail/Retail.html.twig */
class __TwigTemplate_b08cc157bcfc029cc3cfafee7bde65f7fe97e695c52e6d1152a289b5c6466031 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@RemmyFront/ProductRetail/Retail.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyFront/ProductRetail/Retail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyFront/ProductRetail/Retail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->source); })()));
        echo "
<div class=\"container\">
\t\t<div class=\"card\">
\t\t\t<div class=\"container-fliud\">
\t\t\t\t<div class=\"wrapper row\">
\t\t\t\t\t<div class=\"preview col-md-6\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"preview-pic tab-content\">
\t\t\t\t\t\t  <div class=\"tab-pane active\" id=\"pic-1\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_products/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 13, $this->source); })()), "image", []))), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"preview-thumbnail nav nav-tabs\">
\t\t\t\t\t\t  <li class=\"active\"><a data-target=\"#pic-1\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t  <li><a data-target=\"#pic-2\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t  <li><a data-target=\"#pic-3\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t  <li><a data-target=\"#pic-4\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t  <li><a data-target=\"#pic-5\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"details col-md-6\">
\t\t\t\t\t\t<h3 class=\"product-title\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 26, $this->source); })()), "name", []), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t<p class=\"product-description\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 27, $this->source); })()), "description", []), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<h4 class=\"price\">current price: <span>€";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 28, $this->source); })()), "price", []), "html", null, true);
        echo "</span></h4>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<div class=\"stars\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"review-no\">41 reviews</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"vote\"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
\t\t\t\t\t\t<h5 class=\"colors\">colors:
\t\t\t\t\t\t\t\t";
        // line 42
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["productHasColorsRepo"]) || array_key_exists("productHasColorsRepo", $context) ? $context["productHasColorsRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productHasColorsRepo" does not exist.', 42, $this->source); })()), "findByidproduct", [0 => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 42, $this->source); })()), "idproduct", [])], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["colorsRepo"]) || array_key_exists("colorsRepo", $context) ? $context["colorsRepo"] : (function () { throw new Twig_Error_Runtime('Variable "colorsRepo" does not exist.', 43, $this->source); })()), "findByidcolor", [0 => twig_get_attribute($this->env, $this->source, $context["color"], "idColor", [])], "method"), 0, [], "array"), "name", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<h5 class=\"sizes\">sizes:
\t\t\t\t\t\t\t<span class=\"size\" data-toggle=\"tooltip\" title=\"small\">s</span>
\t\t\t\t\t\t\t<span class=\"size\" data-toggle=\"tooltip\" title=\"medium\">m</span>
\t\t\t\t\t\t\t<span class=\"size\" data-toggle=\"tooltip\" title=\"large\">l</span>
\t\t\t\t\t\t\t<span class=\"size\" data-toggle=\"tooltip\" title=\"xtra large\">xl</span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<button class=\"add-to-cart btn btn-default\" type=\"button\">add to cart</button>
\t\t\t\t\t\t\t<button class=\"like btn btn-default\" type=\"button\"><span class=\"fa fa-heart\"></span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@RemmyFront/ProductRetail/Retail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  112 => 43,  107 => 42,  91 => 28,  87 => 27,  83 => 26,  67 => 13,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{{dump(product)}}
<div class=\"container\">
\t\t<div class=\"card\">
\t\t\t<div class=\"container-fliud\">
\t\t\t\t<div class=\"wrapper row\">
\t\t\t\t\t<div class=\"preview col-md-6\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"preview-pic tab-content\">
\t\t\t\t\t\t  <div class=\"tab-pane active\" id=\"pic-1\"><img src=\"{{ asset('uploads/images_products/' ~ product.image) }}\" /></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<ul class=\"preview-thumbnail nav nav-tabs\">
\t\t\t\t\t\t  <li class=\"active\"><a data-target=\"#pic-1\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t  <li><a data-target=\"#pic-2\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t  <li><a data-target=\"#pic-3\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t  <li><a data-target=\"#pic-4\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t  <li><a data-target=\"#pic-5\" data-toggle=\"tab\"><img src=\"http://placekitten.com/200/126\" /></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"details col-md-6\">
\t\t\t\t\t\t<h3 class=\"product-title\">{{product.name}}</h3>
\t\t\t\t\t\t<p class=\"product-description\">{{ product.description }}</p>
\t\t\t\t\t\t<h4 class=\"price\">current price: <span>€{{ product.price }}</span></h4>
\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<div class=\"stars\">
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"review-no\">41 reviews</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"vote\"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
\t\t\t\t\t\t<h5 class=\"colors\">colors:
\t\t\t\t\t\t\t\t{#{dump(productHasColorsRepo.findByidproduct(product.idproduct))}#}
\t\t\t\t\t\t\t\t\t{% for color in productHasColorsRepo.findByidproduct(product.idproduct) %}
\t\t\t\t\t\t\t\t\t<td>{{ colorsRepo.findByidcolor(color.idColor)[0].name }}</td>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<h5 class=\"sizes\">sizes:
\t\t\t\t\t\t\t<span class=\"size\" data-toggle=\"tooltip\" title=\"small\">s</span>
\t\t\t\t\t\t\t<span class=\"size\" data-toggle=\"tooltip\" title=\"medium\">m</span>
\t\t\t\t\t\t\t<span class=\"size\" data-toggle=\"tooltip\" title=\"large\">l</span>
\t\t\t\t\t\t\t<span class=\"size\" data-toggle=\"tooltip\" title=\"xtra large\">xl</span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<button class=\"add-to-cart btn btn-default\" type=\"button\">add to cart</button>
\t\t\t\t\t\t\t<button class=\"like btn btn-default\" type=\"button\"><span class=\"fa fa-heart\"></span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}", "@RemmyFront/ProductRetail/Retail.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\FrontBundle\\Resources\\views\\ProductRetail\\Retail.html.twig");
    }
}
