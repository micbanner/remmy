<?php

/* productstock/index.html.twig */
class __TwigTemplate_190497a2ab4697f4b4943dc9a2f86cd6cd95793c1281ade7afa2132fa1ee53d6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "productstock/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productstock/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productstock/index.html.twig"));

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
        echo "    <h1>Stocks list</h1>

    <table class=\"table table-bordered\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Idstock</th>
                <th>Name Products</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["productsRepo"]) || array_key_exists("productsRepo", $context) ? $context["productsRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productsRepo" does not exist.', 17, $this->source); })()), "findAll", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "            ";
            $context["productstocks"] = twig_get_attribute($this->env, $this->source, (isset($context["productStocksRepo"]) || array_key_exists("productStocksRepo", $context) ? $context["productStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productStocksRepo" does not exist.', 18, $this->source); })()), "findByidstock", [0 => twig_get_attribute($this->env, $this->source, (isset($context["productHasStocksRepo"]) || array_key_exists("productHasStocksRepo", $context) ? $context["productHasStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productHasStocksRepo" does not exist.', 18, $this->source); })()), "findByidproduct", [0 => twig_get_attribute($this->env, $this->source, $context["product"], "idproduct", [])], "method")], "method");
            // line 19
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["productstocks"]) || array_key_exists("productstocks", $context) ? $context["productstocks"] : (function () { throw new Twig_Error_Runtime('Variable "productstocks" does not exist.', 19, $this->source); })())) > 0)) {
                // line 20
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["productstocks"]) || array_key_exists("productstocks", $context) ? $context["productstocks"] : (function () { throw new Twig_Error_Runtime('Variable "productstocks" does not exist.', 20, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["productstock"]) {
                    // line 21
                    echo "            ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productHasStocksRepo"]) || array_key_exists("productHasStocksRepo", $context) ? $context["productHasStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productHasStocksRepo" does not exist.', 21, $this->source); })()), "findByidstock", [0 => twig_get_attribute($this->env, $this->source, $context["productstock"], "idstock", [])], "method"), 0, [], "array"), "idproduct", []), "name", []));
                    echo "
            <tr>
                <td>";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productstock"], "idstock", []), "html", null, true);
                    echo "</td>
                <td>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productHasStocksRepo"]) || array_key_exists("productHasStocksRepo", $context) ? $context["productHasStocksRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productHasStocksRepo" does not exist.', 24, $this->source); })()), "findByidstock", [0 => twig_get_attribute($this->env, $this->source, $context["productstock"], "idstock", [])], "method"), 0, [], "array"), "idproduct", []), "name", []), "html", null, true);
                    echo "</td>
                <td>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productstock"], "quantity", []), "html", null, true);
                    echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productstock_show", ["idstock" => twig_get_attribute($this->env, $this->source, $context["productstock"], "idstock", [])]), "html", null, true);
                    echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productstock_edit", ["idstock" => twig_get_attribute($this->env, $this->source, $context["productstock"], "idstock", [])]), "html", null, true);
                    echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productstock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        ";
            } else {
                // line 40
                echo "            <tr>
                <td>no stock</td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", []), "html", null, true);
                echo "</td>
                <td>No stock</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productstock_new", ["idproduct" => twig_get_attribute($this->env, $this->source, $context["product"], "idproduct", [])]), "html", null, true);
                echo "\">Add New Stock</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
            }
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </table>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productstock_new");
        echo "\">Create a new productstock</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "productstock/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  153 => 54,  147 => 53,  138 => 47,  130 => 42,  126 => 40,  123 => 39,  110 => 32,  104 => 29,  97 => 25,  93 => 24,  89 => 23,  83 => 21,  78 => 20,  75 => 19,  72 => 18,  68 => 17,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-base.html.twig' %}

{% block body %}
    <h1>Stocks list</h1>

    <table class=\"table table-bordered\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Idstock</th>
                <th>Name Products</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        
        {% for product in productsRepo.findAll() %}
            {% set productstocks = productStocksRepo.findByidstock(productHasStocksRepo.findByidproduct(product.idproduct)) %}
            {% if productstocks|length > 0 %}
            {% for productstock in productstocks %}
            {{dump(productHasStocksRepo.findByidstock(productstock.idstock)[0].idproduct.name)}}
            <tr>
                <td>{{ productstock.idstock }}</td>
                <td>{{productHasStocksRepo.findByidstock(productstock.idstock)[0].idproduct.name}}</td>
                <td>{{ productstock.quantity }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('productstock_show', { 'idstock': productstock.idstock }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('productstock_edit', { 'idstock': productstock.idstock }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
        {% endfor %}
        {% else %}
            <tr>
                <td>no stock</td>
                <td>{{product.name}}</td>
                <td>No stock</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('productstock_new', {'idproduct': product.idproduct }) }}\">Add New Stock</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endif %}
        {% endfor %}
    </table>

    <ul>
        <li>
            <a href=\"{{ path('productstock_new') }}\">Create a new productstock</a>
        </li>
    </ul>
{% endblock %}
", "productstock/index.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\productstock\\index.html.twig");
    }
}
