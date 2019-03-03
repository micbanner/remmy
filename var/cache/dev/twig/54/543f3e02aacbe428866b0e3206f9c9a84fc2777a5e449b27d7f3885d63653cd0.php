<?php

/* product/index.html.twig */
class __TwigTemplate_bcdeb1396293e99511201d8b61046e424f0996328d37e65f730000a07c7fb4b0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "product/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

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
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_new");
        echo "\" class=\"btn btn-success\">Create a new product</a><hr>
<h1>All Products</h1>

";
        // line 8
        echo "
    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>color</th>
                <th>Price</th>
                <th>Total Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>    
        <tbody>

        ";
        // line 26
        echo "        ";
        $context["quantity"] = 0;
        // line 27
        echo "        
        
        ";
        // line 31
        echo "            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 31, $this->source); })()), "query", [])) > 0)) {
            // line 32
            echo "            ";
            $context["products"] = twig_get_attribute($this->env, $this->source, (isset($context["productsRepo"]) || array_key_exists("productsRepo", $context) ? $context["productsRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productsRepo" does not exist.', 32, $this->source); })()), "findBycategoryCategoryIdcategory", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 32, $this->source); })()), "query", []), "get", [0 => "idcategory"], "method")], "method");
            // line 33
            echo "            ";
        } else {
            // line 34
            echo "            ";
            $context["products"] = twig_get_attribute($this->env, $this->source, (isset($context["productsRepo"]) || array_key_exists("productsRepo", $context) ? $context["productsRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productsRepo" does not exist.', 34, $this->source); })()), "findAll", [], "method");
            // line 35
            echo "            ";
        }
        // line 36
        echo "
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "            ";
            $context["quantity"] = 0;
            // line 39
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["productCategoryRepo"]) || array_key_exists("productCategoryRepo", $context) ? $context["productCategoryRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productCategoryRepo" does not exist.', 39, $this->source); })()), "findOneByidcategory", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "categorycategoryidcategory", [])], "method"));
            echo "
            ";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["product"]);
            echo "
            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "idProduct", []), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", []), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", []), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", []))), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", []))), "html", null, true);
            echo "\" class=\"img_size\" alt=\"remmy product\"></a></td>
                <td>color</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", []), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["productHasStocksRepo"]) || array_key_exists("productHasStocksRepo", $context) ? $context["productHasStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productHasStocksRepo" does not exist.', 50, $this->source); })()), "findByidproduct", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "idproduct", [])], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 51
                echo "                    ";
                // line 52
                echo "                    ";
                // line 53
                echo "                    ";
                $context["quantity"] = ((isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new Twig_Error_Runtime('Variable "quantity" does not exist.', 53, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productStocksRepo"]) || array_key_exists("productStocksRepo", $context) ? $context["productStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productStocksRepo" does not exist.', 53, $this->source); })()), "findByidstock", [0 => twig_get_attribute($this->env, $this->source, $context["stock"], "idstock", [])], "method"), 0, [], "array"), "quantity", []));
                // line 54
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                    ";
            // line 56
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new Twig_Error_Runtime('Variable "quantity" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "
                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["idproduct" => twig_get_attribute($this->env, $this->source, $context["product"], "idproduct", [])]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["idproduct" => twig_get_attribute($this->env, $this->source, $context["product"], "idproduct", [])]), "html", null, true);
            echo "\">edit</a>
                        </li>
                        
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 71,  182 => 64,  176 => 61,  167 => 56,  165 => 55,  159 => 54,  156 => 53,  154 => 52,  152 => 51,  148 => 50,  143 => 48,  136 => 46,  132 => 45,  128 => 44,  125 => 43,  121 => 42,  116 => 40,  111 => 39,  108 => 38,  104 => 37,  101 => 36,  98 => 35,  95 => 34,  92 => 33,  89 => 32,  86 => 31,  82 => 27,  79 => 26,  60 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-base.html.twig' %}

{% block body %}
<a href=\"{{ path('product_new') }}\" class=\"btn btn-success\">Create a new product</a><hr>
<h1>All Products</h1>

{#{dump(request)}#}

    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>color</th>
                <th>Price</th>
                <th>Total Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>    
        <tbody>

        {# -- Initialisation de la quantité à Zero pour le prochain produit -- #}
        {% set quantity = 0%}
        
        
        {#{{ dump( productsRepo.findBycategoryCategoryIdcategory(2)) }}
        {{ dump( request.query.get('idcategory') )}}#}
            {% if request.query|length > 0 %}
            {% set products = productsRepo.findBycategoryCategoryIdcategory(request.query.get('idcategory')) %}
            {% else %}
            {% set products = productsRepo.findAll() %}
            {% endif %}

        {% for product in products %}
            {% set quantity = 0 %}
            {{dump(productCategoryRepo.findOneByidcategory(product.categorycategoryidcategory))}}
            {{dump(product)}}
            <tr>
                <td>{{ product.idProduct }}</td>
                <td>{#{ .name }#}</td>
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td><a href=\"{{ asset('uploads/images_products/' ~ product.image) }}\" ><img src=\"{{ asset('uploads/images_products/' ~ product.image) }}\" class=\"img_size\" alt=\"remmy product\"></a></td>
                <td>color</td>
                <td>{{ product.price }}</td>
                <td>
                    {% for stock in productHasStocksRepo.findByidproduct(product.idproduct) %}
                    {#{dump(productHasStocksRepo.findByidproduct(product.idproduct))}#}
                    {# Boucle sur chaque ligne de #}
                    {% set quantity = quantity + productStocksRepo.findByidstock(stock.idstock)[0].quantity %}
                    {% endfor %}
                    {# Affiche la quantité finale après calcul #}
                    {{ quantity }}
                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('product_show', { 'idproduct': product.idproduct }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('product_edit', { 'idproduct': product.idproduct }) }}\">edit</a>
                        </li>
                        
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "product/index.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\product\\index.html.twig");
    }
}
