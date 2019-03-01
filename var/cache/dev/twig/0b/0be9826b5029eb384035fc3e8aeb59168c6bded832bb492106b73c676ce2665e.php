<?php

/* orderline/show.html.twig */
class __TwigTemplate_738cf9cab6d5b87b63fcc40c64ae011d232d9ca94e3d7b8643437992a418e2df extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orderline/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orderline/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orderline/show.html.twig"));

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
        echo "    <h1>Orderline</h1>

    <table>
        <tbody>
            <tr>
                <th>Idorderline</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderLine"]) || array_key_exists("orderLine", $context) ? $context["orderLine"] : (function () { throw new Twig_Error_Runtime('Variable "orderLine" does not exist.', 10, $this->source); })()), "idorderline", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderLine"]) || array_key_exists("orderLine", $context) ? $context["orderLine"] : (function () { throw new Twig_Error_Runtime('Variable "orderLine" does not exist.', 14, $this->source); })()), "quantity", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Unitprice</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderLine"]) || array_key_exists("orderLine", $context) ? $context["orderLine"] : (function () { throw new Twig_Error_Runtime('Variable "orderLine" does not exist.', 18, $this->source); })()), "unitprice", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Totalprice</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderLine"]) || array_key_exists("orderLine", $context) ? $context["orderLine"] : (function () { throw new Twig_Error_Runtime('Variable "orderLine" does not exist.', 22, $this->source); })()), "totalprice", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Taxable</th>
                <td>";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderLine"]) || array_key_exists("orderLine", $context) ? $context["orderLine"] : (function () { throw new Twig_Error_Runtime('Variable "orderLine" does not exist.', 26, $this->source); })()), "taxable", [])) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Taxeamount</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderLine"]) || array_key_exists("orderLine", $context) ? $context["orderLine"] : (function () { throw new Twig_Error_Runtime('Variable "orderLine" does not exist.', 30, $this->source); })()), "taxeamount", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderline_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "orderline/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  100 => 30,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Orderline</h1>

    <table>
        <tbody>
            <tr>
                <th>Idorderline</th>
                <td>{{ orderLine.idorderline }}</td>
            </tr>
            <tr>
                <th>Quantity</th>
                <td>{{ orderLine.quantity }}</td>
            </tr>
            <tr>
                <th>Unitprice</th>
                <td>{{ orderLine.unitprice }}</td>
            </tr>
            <tr>
                <th>Totalprice</th>
                <td>{{ orderLine.totalprice }}</td>
            </tr>
            <tr>
                <th>Taxable</th>
                <td>{% if orderLine.taxable %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Taxeamount</th>
                <td>{{ orderLine.taxeamount }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('orderline_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "orderline/show.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\orderline\\show.html.twig");
    }
}
