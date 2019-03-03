<?php

/* productstock/show.html.twig */
class __TwigTemplate_b2f9c99f95ba2d74e8dcf2c9e278e86a4939906f23fb5cc7effe7aefaa9ed08b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "productstock/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productstock/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "productstock/show.html.twig"));

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
        echo "    <h1>Productstock</h1>
    
    ";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["productstock"]) || array_key_exists("productstock", $context) ? $context["productstock"] : (function () { throw new Twig_Error_Runtime('Variable "productstock" does not exist.', 6, $this->source); })()));
        echo "
    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Quantity</th>
                <th>color</th>
                <th>size</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productstock"]) || array_key_exists("productstock", $context) ? $context["productstock"] : (function () { throw new Twig_Error_Runtime('Variable "productstock" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 18
            echo "
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productstock"]) || array_key_exists("productstock", $context) ? $context["productstock"] : (function () { throw new Twig_Error_Runtime('Variable "productstock" does not exist.', 19, $this->source); })()), "quantity", []), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productstock"]) || array_key_exists("productstock", $context) ? $context["productstock"] : (function () { throw new Twig_Error_Runtime('Variable "productstock" does not exist.', 20, $this->source); })()), "color", []), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["productstock"]) || array_key_exists("productstock", $context) ? $context["productstock"] : (function () { throw new Twig_Error_Runtime('Variable "productstock" does not exist.', 21, $this->source); })()), "size", []), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productstock_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productstock_edit", ["idstock" => twig_get_attribute($this->env, $this->source, (isset($context["productstock"]) || array_key_exists("productstock", $context) ? $context["productstock"] : (function () { throw new Twig_Error_Runtime('Variable "productstock" does not exist.', 32, $this->source); })()), "idstock", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "productstock/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  114 => 35,  108 => 32,  102 => 29,  94 => 23,  86 => 21,  82 => 20,  78 => 19,  75 => 18,  71 => 17,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-base.html.twig' %}

{% block body %}
    <h1>Productstock</h1>
    
    {{dump(productstock)}}
    <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Quantity</th>
                <th>color</th>
                <th>size</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {% for stock in productstock %}

                <td>{{ productstock.quantity }}</td>
                <td>{{ productstock.color }}</td>
                <td>{{ productstock.size }}</td>
                {% endfor %}
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('productstock_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('productstock_edit', { 'idstock': productstock.idstock }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "productstock/show.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\productstock\\show.html.twig");
    }
}
