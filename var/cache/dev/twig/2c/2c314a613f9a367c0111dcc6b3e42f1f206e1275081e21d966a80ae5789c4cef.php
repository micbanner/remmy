<?php

/* user/show.html.twig */
class __TwigTemplate_2db5ec19697543b71660db6f263e64839685d01b0707a9e45d350e11c38f0fac extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin-base.html.twig", "user/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

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
        echo "    <h1>User</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.gender", [], "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->source); })()), "gender", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.firstname", [], "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "firstname", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.lastname", [], "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->source); })()), "lastname", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.address", [], "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->source); })()), "address", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.zipcode", [], "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 30, $this->source); })()), "zipCode", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.city", [], "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->source); })()), "city", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.country", [], "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 38, $this->source); })()), "country", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.phone", [], "FOSUserBundle"), "html", null, true);
        echo "</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->source); })()), "phone", []), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 52, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 55, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  163 => 55,  157 => 52,  151 => 49,  141 => 42,  137 => 41,  131 => 38,  127 => 37,  121 => 34,  117 => 33,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  91 => 22,  87 => 21,  81 => 18,  77 => 17,  71 => 14,  67 => 13,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin-base.html.twig' %}

{% block body %}
    <h1>User</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>{{ 'form.gender'|trans({}, 'FOSUserBundle') }}</th>
                <td>{{ user.gender }}</td>
            </tr>
            <tr>
                <th>{{ 'profile.show.firstname'|trans({}, 'FOSUserBundle') }}</th>
                <td>{{ user.firstname }}</td>
            </tr>
            <tr>
                <th>{{ 'profile.show.lastname'|trans({}, 'FOSUserBundle') }}</th>
                <td>{{ user.lastname }}</td>
            </tr>
            <tr>
                <th>{{ 'profile.show.address'|trans({}, 'FOSUserBundle') }}</th>
                <td>{{ user.address }}</td>
            </tr>
            <tr>
                <th>{{ 'profile.show.zipcode'|trans({}, 'FOSUserBundle') }}</th>
                <td>{{ user.zipCode }}</td>
            </tr>
            <tr>
                <th>{{ 'profile.show.city'|trans({}, 'FOSUserBundle') }}</th>
                <td>{{ user.city }}</td>
            </tr>
            <tr>
                <th>{{ 'profile.show.country'|trans({}, 'FOSUserBundle') }}</th>
                <td>{{ user.country }}</td>
            </tr>
            <tr>
                <th>{{ 'profile.show.phone'|trans({}, 'FOSUserBundle') }}</th>
                <td>{{ user.phone }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('admin_user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('admin_user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\user\\show.html.twig");
    }
}
