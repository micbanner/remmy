<?php

/* category/index.html.twig */
class __TwigTemplate_37fe4db530df7fdddfa1f5af54dbfc3dade0187cebd5d18df1cf49f9ed4518e3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "category/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

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


    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_new");
        echo "\" class=\"btn btn-success\">Create a new category</a><hr>

    <h1>Categories list</h1>

    <table class=\"table table-bordered\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Id Category</th>
                <th>category master</th>
                <th>sub-category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["category"], "categorycategory", []))) {
                // line 23
                echo "            ";
                $context["masterCategory"] = twig_get_attribute($this->env, $this->source, (isset($context["productCategoryRepo"]) || array_key_exists("productCategoryRepo", $context) ? $context["productCategoryRepo"] : (function () { throw new Twig_Error_Runtime('Variable "productCategoryRepo" does not exist.', 23, $this->source); })()), "findByidcategory", [0 => twig_get_attribute($this->env, $this->source, $context["category"], "categorycategory", [])], "method");
                // line 24
                echo "            <tr>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idcategory", []), "html", null, true);
                echo "</td>
                ";
                // line 27
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "categorycategory", []), "name", []), "html", null, true);
                echo "</td>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", []), "html", null, true);
                echo "</td>
            ";
            } else {
                // line 30
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idcategory", []), "html", null, true);
                echo "</td>
            ";
                // line 32
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", []), "html", null, true);
                echo "</td>
            <td> - </td>
            ";
            }
            // line 35
            echo "                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["idcategory" => twig_get_attribute($this->env, $this->source, $context["category"], "idcategory", [])]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_edit", ["idcategory" => twig_get_attribute($this->env, $this->source, $context["category"], "idcategory", [])]), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  125 => 41,  119 => 38,  114 => 35,  107 => 32,  102 => 30,  97 => 28,  92 => 27,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  75 => 21,  58 => 7,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-base.html.twig' %}

{% block body %}



    <a href=\"{{ path('category_new') }}\" class=\"btn btn-success\">Create a new category</a><hr>

    <h1>Categories list</h1>

    <table class=\"table table-bordered\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Id Category</th>
                <th>category master</th>
                <th>sub-category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            {% if category.categorycategory is not null %}
            {% set masterCategory = productCategoryRepo.findByidcategory(category.categorycategory) %}
            <tr>
                <td>{{ category.idcategory }}</td>
                {#{dump(category)}#}
                <td>{{ category.categorycategory.name }}</td>
                <td>{{ category.name }}</td>
            {% else %}
            <td>{{ category.idcategory }}</td>
            {#{dump(category)}#}
            <td>{{ category.name }}</td>
            <td> - </td>
            {% endif %}
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('category_show', { 'idcategory': category.idcategory }) }}\">show</a>
                        </li>
                        <li>
                                <a href=\"{{ path('category_edit', { 'idcategory': category.idcategory }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "category/index.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\category\\index.html.twig");
    }
}
