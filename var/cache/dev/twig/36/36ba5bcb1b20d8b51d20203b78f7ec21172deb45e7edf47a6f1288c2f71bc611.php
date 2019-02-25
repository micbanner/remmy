<?php

/* @RemmyHome/Homepage/contact.html.twig */
class __TwigTemplate_6135d2b1380f1cf24d36fbc8721c8ccf5dff0a3f3770792d9d1055f3291d5d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@RemmyHome/Homepage/contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyHome/Homepage/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyHome/Homepage/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container \">

<h1>CONTACT</h1>
<form action=\"\" class=\"formulaire col-sm-12\">
        <div class=\"form-group\">
                <label for=\"\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"email\" class=\"form-control\" id=\"\" aria-describedby=\"emailHelp\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.enter a email adresse", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
        <label>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.object", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <select class=\"form-control\">
                <option>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.ask a question", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></option>
                <option>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.order", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></option>
                <option>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.claim", array(), "FOSUserBundle"), "html", null, true);
        echo "</option>
                <option>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.other", array(), "FOSUserBundle"), "html", null, true);
        echo "</option>
        </select>
        </div>
        <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.describe your needs", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
        </div>
        
        <input class=\"btn btn-success\" type=\"submit\" id=\"\" name=\"formu_submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
</form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@RemmyHome/Homepage/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  92 => 24,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  68 => 15,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container \">

<h1>CONTACT</h1>
<form action=\"\" class=\"formulaire col-sm-12\">
        <div class=\"form-group\">
                <label for=\"\">{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}</label>
                <input type=\"email\" class=\"form-control\" id=\"\" aria-describedby=\"emailHelp\" placeholder=\"{{ 'form.enter a email adresse'|trans({}, 'FOSUserBundle') }}\">
        </div>

        <div class=\"form-group\">
        <label>{{ 'form.object'|trans({}, 'FOSUserBundle') }}</label>
        <select class=\"form-control\">
                <option>{{ 'form.ask a question'|trans({}, 'FOSUserBundle') }}</label></option>
                <option>{{ 'form.order'|trans({}, 'FOSUserBundle') }}</label></option>
                <option>{{ 'form.claim'|trans({}, 'FOSUserBundle') }}</option>
                <option>{{ 'form.other'|trans({}, 'FOSUserBundle') }}</option>
        </select>
        </div>
        <div class=\"form-group\">
                <label for=\"exampleFormControlTextarea1\"> {{ 'form.describe your needs'|trans({}, 'FOSUserBundle') }}</label>
                <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
        </div>
        
        <input class=\"btn btn-success\" type=\"submit\" id=\"\" name=\"formu_submit\" value=\"{{ 'form.submit'|trans({}, 'FOSUserBundle') }}\">
</form>
</div>
{% endblock %}", "@RemmyHome/Homepage/contact.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\HomeBundle\\Resources\\views\\Homepage\\Contact.html.twig");
    }
}
