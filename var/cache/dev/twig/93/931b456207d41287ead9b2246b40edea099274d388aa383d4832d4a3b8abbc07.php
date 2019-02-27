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
        echo "    <h1>Orderheader</h1>
    ";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 5, $this->source); })()));
        echo "
    ";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["orderLines"]) || array_key_exists("orderLines", $context) ? $context["orderLines"] : (function () { throw new Twig_Error_Runtime('Variable "orderLines" does not exist.', 6, $this->source); })()));
        echo "
    <table>
        <tbody>
            <tr>
                <th>Idorder</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 11, $this->source); })()), "idorder", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 15, $this->source); })()), "creationdate", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 15, $this->source); })()), "creationdate", []), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Lastupdate</th>
                <td>";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 19, $this->source); })()), "lastUpdate", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 19, $this->source); })()), "lastUpdate", []), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderLines"]) || array_key_exists("orderLines", $context) ? $context["orderLines"] : (function () { throw new Twig_Error_Runtime('Variable "orderLines" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["orderLine"]) {
            // line 27
            echo "            <tr>
                <th>Idorder</th>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderLine"], "idproduct", []), "name", []), "html", null, true);
            echo "</td>
                <td></td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>";
            // line 34
            if (twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 34, $this->source); })()), "creationdate", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 34, $this->source); })()), "creationdate", []), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            </tr>
            <tr>
                <th>Lastupdate</th>
                <td>";
            // line 38
            if (twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 38, $this->source); })()), "lastUpdate", [])) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderHeader"]) || array_key_exists("orderHeader", $context) ? $context["orderHeader"] : (function () { throw new Twig_Error_Runtime('Variable "orderHeader" does not exist.', 38, $this->source); })()), "lastUpdate", []), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
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
        return array (  139 => 46,  132 => 41,  121 => 38,  112 => 34,  104 => 29,  100 => 27,  96 => 26,  84 => 19,  75 => 15,  68 => 11,  60 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-base.html.twig' %}

{% block body %}
    <h1>Orderheader</h1>
    {{dump(orderHeader)}}
    {{dump(orderLines)}}
    <table>
        <tbody>
            <tr>
                <th>Idorder</th>
                <td>{{ orderHeader.idorder }}</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>{% if orderHeader.creationdate %}{{ orderHeader.creationdate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Lastupdate</th>
                <td>{% if orderHeader.lastUpdate %}{{ orderHeader.lastUpdate|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            {% for orderLine in orderLines %}
            <tr>
                <th>Idorder</th>
                <td>{{ orderLine.idproduct.name}}</td>
                <td></td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>{% if orderHeader.creationdate %}{{ orderHeader.creationdate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Lastupdate</th>
                <td>{% if orderHeader.lastUpdate %}{{ orderHeader.lastUpdate|date('Y-m-d') }}{% endif %}</td>
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
