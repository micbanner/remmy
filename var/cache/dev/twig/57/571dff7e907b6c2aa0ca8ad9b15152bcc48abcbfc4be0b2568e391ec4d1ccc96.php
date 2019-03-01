<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_4e6a140cf2480da88a6c282ae28947de5b2cd7f6db3c0118ae7d7753e213c1c2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div id=\"layout-view\" class=\"view view-login\">
        ";
        // line 4
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "            <div class=\"bg-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->source); })()), [], "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 7
        echo "        <div id=\"login-form\" class=\"col-lg-4 offset-lg-4 mt-5\">
            <h1 class=\"text-center\">CONNEXION</h1>

            <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"center-block\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" />

                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.username", [], "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>

                <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />

            </form>

            <div>
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a> <span> | </span>
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\">password oublier</a>
            </div>

        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  86 => 30,  78 => 25,  72 => 22,  65 => 18,  57 => 15,  51 => 12,  46 => 10,  41 => 7,  35 => 5,  33 => 4,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div id=\"layout-view\" class=\"view view-login\">
        {% if error %}
            <div class=\"bg-danger\">{{ error|trans({}, 'FOSUserBundle') }}</div>
        {% endif %}
        <div id=\"login-form\" class=\"col-lg-4 offset-lg-4 mt-5\">
            <h1 class=\"text-center\">CONNEXION</h1>

            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"center-block\">

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}\"/>
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}\"/>
                </div>
                <div class=\"form-group\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
                </div>

                <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" />

            </form>

            <div>
                <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a> <span> | </span>
                <a href=\"{{ path('fos_user_change_password') }}\">password oublier</a>
            </div>

        </div>
    </div>", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
