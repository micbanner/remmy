<?php

/* orderheader/show.html.twig */
class __TwigTemplate_b309761bc9e1fbd7a073904452c542729a97c31a7844b6e14bffb73a13695044 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "orderheader/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orderheader/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orderheader/show.html.twig"));

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
        echo "    <h1>Order Retail</h1>
    ";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 5, $this->source); })()));
        echo "
    ";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["orderLines"]) || array_key_exists("orderLines", $context) ? $context["orderLines"] : (function () { throw new Twig_Error_Runtime('Variable "orderLines" does not exist.', 6, $this->source); })()));
        echo "

<h3>Idorder: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 8, $this->source); })()), "idorder", []), "html", null, true);
        echo "</h3>
<h3>Creationdate: ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 9, $this->source); })()), "creationdate", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 9, $this->source); })()), "creationdate", []), "Y-m-d"), "html", null, true);
        }
        echo "</h3>
<h4>Lastupdate: ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 10, $this->source); })()), "lastUpdate", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 10, $this->source); })()), "lastUpdate", []), "Y-m-d"), "html", null, true);
        }
        echo "Idorder: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 10, $this->source); })()), "idorder", []), "html", null, true);
        echo "</h4>


<h3>Username: <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 13, $this->source); })()), "iduser", []), "id", [])]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 13, $this->source); })()), "iduser", []), "username", []), "html", null, true);
        echo "</a></h3>



<table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Id order</th>
                <th>product</th>
                <th>Quantity</th>
                <th>Unit price</th>
                <th>Total price</th>
                <th>Taxable</th>
                <th>Taxe amount</th>
                <th>Actions</th>
            </tr>
        <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderLines"]) || array_key_exists("orderLines", $context) ? $context["orderLines"] : (function () { throw new Twig_Error_Runtime('Variable "orderLines" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["orderLine"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderline_show", ["idorderline" => twig_get_attribute($this->env, $this->source, $context["orderLine"], "idorderline", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderLine"], "idorderline", []), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderLine"], "idproduct", []), "name", []), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderLine"], "quantity", []), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderLine"], "unitprice", []), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderLine"], "totalprice", []), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["orderLine"], "taxable", [])) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo " </td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderLine"], "taxeamount", []), "html", null, true);
            echo " €</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderline_show", ["idorderline" => twig_get_attribute($this->env, $this->source, $context["orderLine"], "idorderline", [])]), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderheader_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orderheader/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 53,  163 => 48,  151 => 42,  144 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  114 => 32,  111 => 31,  107 => 30,  85 => 13,  75 => 10,  69 => 9,  65 => 8,  60 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-base.html.twig' %}

{% block body %}
    <h1>Order Retail</h1>
    {{dump(orderHeader)}}
    {{dump(orderLines)}}

<h3>Idorder: {{ orderHeader.idorder }}</h3>
<h3>Creationdate: {% if orderHeader.creationdate %}{{ orderHeader.creationdate|date('Y-m-d') }}{% endif %}</h3>
<h4>Lastupdate: {% if orderHeader.lastUpdate %}{{ orderHeader.lastUpdate|date('Y-m-d') }}{% endif %}Idorder: {{ orderHeader.idorder }}</h4>


<h3>Username: <a href=\"{{ path('admin_user_show', {'id': orderHeader.iduser.id }) }}\">{{orderHeader.iduser.username}}</a></h3>



<table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Id order</th>
                <th>product</th>
                <th>Quantity</th>
                <th>Unit price</th>
                <th>Total price</th>
                <th>Taxable</th>
                <th>Taxe amount</th>
                <th>Actions</th>
            </tr>
        <tbody>
            {% for orderLine in orderLines %}
            <tr>
                <td><a href=\"{{ path('orderline_show', { 'idorderline': orderLine.idorderline }) }}\">{{ orderLine.idorderline }}</a></td>
                <td>{{ orderLine.idproduct.name }}</td>
                <td>{{ orderLine.quantity }}</td>
                <td>{{ orderLine.unitprice }}</td>
                <td>{{ orderLine.totalprice }}</td>
                <td>{% if orderLine.taxable %}Yes{% else %}No{% endif %} </td>
                <td>{{ orderLine.taxeamount }} €</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('orderline_show', { 'idorderline': orderLine.idorderline }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('orderheader_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "orderheader/show.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\orderheader\\show.html.twig");
    }
}
