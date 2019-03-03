<?php

/* product/show.html.twig */
class __TwigTemplate_929ff45b09aedddcff73fe81e748185d80a33d27c400c7bf9c9fe7645f0e3eb2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "product/show.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

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

        // line 5
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->source); })()), "name", []), "html", null, true);
        echo "</h1>
    
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_products/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 7, $this->source); })()), "image", []))), "html", null, true);
        echo "\" alt=\"product Remmy\">
    <p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 8, $this->source); })()), "description", []), "html", null, true);
        echo "</p>
    
    <p>Price ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 10, $this->source); })()), "price", []), "html", null, true);
        echo " € </p>

    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>id</th>
                <th>size</th>
                <th>color</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["productHasStocksRepo"]) || array_key_exists("productHasStocksRepo", $context) ? $context["productHasStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productHasStocksRepo" does not exist.', 23, $this->source); })()), "findByidproduct", [0 => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 23, $this->source); })()), "idproduct", [])], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 24
            echo "                ";
            // line 25
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productStocksRepo"]) || array_key_exists("productStocksRepo", $context) ? $context["productStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productStocksRepo" does not exist.', 25, $this->source); })()), "findByidstock", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "idstock", [])], "method"), 0, [], "array"), "idstock", []), "html", null, true);
            echo "</td>

                ";
            // line 28
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productStocksRepo"]) || array_key_exists("productStocksRepo", $context) ? $context["productStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productStocksRepo" does not exist.', 28, $this->source); })()), "findByidstock", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "idstock", [])], "method"), 0, [], "array"), "idSize", []), "name", []), "html", null, true);
            echo "</td>

                ";
            // line 31
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productStocksRepo"]) || array_key_exists("productStocksRepo", $context) ? $context["productStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productStocksRepo" does not exist.', 31, $this->source); })()), "findByidstock", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "idstock", [])], "method"), 0, [], "array"), "idColor", []), "name", []), "html", null, true);
            echo "</td>
                
                ";
            // line 34
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productStocksRepo"]) || array_key_exists("productStocksRepo", $context) ? $context["productStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productStocksRepo" does not exist.', 34, $this->source); })()), "findByidstock", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "idstock", [])], "method"), 0, [], "array"), "quantity", []), "html", null, true);
            echo "</td>
            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["idproduct" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 45, $this->source); })()), "idproduct", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 48, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  137 => 48,  131 => 45,  125 => 42,  117 => 36,  108 => 34,  102 => 31,  96 => 28,  90 => 25,  88 => 24,  84 => 23,  68 => 10,  63 => 8,  59 => 7,  53 => 5,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-base.html.twig' %}

{% block body %}
{#<h3> {{ product.categorycategory.name }}</h3>#}
    <h1>{{ product.name }}</h1>
    
    <img src=\"{{ asset('uploads/images_products/' ~ product.image) }}\" alt=\"product Remmy\">
    <p>{{ product.description }}</p>
    
    <p>Price {{ product.price }} € </p>

    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>id</th>
                <th>size</th>
                <th>color</th>
                <th>quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {% for stock in productHasStocksRepo.findByidproduct(product.idproduct) %}
                {#{dump(productHasStocksRepo.findByidproduct(product.idproduct))}#}
                <td>{{ productStocksRepo.findByidstock(stock.idstock)[0].idstock }}</td>

                {# -- À faire utiliser un repo pour aller chercher le nom des tailles -- #}
                <td>{{ productStocksRepo.findByidstock(stock.idstock)[0].idSize.name }}</td>

                {# -- À faire utiliser un repo pour aller chercher le nom des couleurs -- #}
                <td>{{ productStocksRepo.findByidstock(stock.idstock)[0].idColor.name }}</td>
                
                {# -- Quantité pour une ligne de la table productStock -- #}
                <td>{{ productStocksRepo.findByidstock(stock.idstock)[0].quantity }}</td>
            \t{% endfor %}
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_edit', { 'idproduct': product.idproduct }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/show.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\product\\show.html.twig");
    }
}
