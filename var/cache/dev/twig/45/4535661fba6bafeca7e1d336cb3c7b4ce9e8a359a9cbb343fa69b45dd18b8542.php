<?php

/* @RemmyHome/Homepage/home.html.twig */
class __TwigTemplate_3104aa12d044c8f836b8d953dd99e772133d23df4a38db2a297c35f6a98dcbcb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@RemmyHome/Homepage/home.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyHome/Homepage/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyHome/Homepage/home.html.twig"));

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
        echo "<div class=\"container-fluid\">
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/win2.png"), "html", null, true);
        echo "\" class=\"bandeau\" alt=\"\">
</div>

    <nav class=\"navbar navbar-light  justify-content-between bar-navigation\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/remmy.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo remmy\">
        <form class=\"form-inline\">
          <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </nav>

</div>

<div class=\"container mid-header\">
    <div class=\"row\">
        <div class=\"col-sm hr2\">
          LIVRAISON A DOMICILE
        </div>
        <div class=\"col-sm hr2\">
          PAIEMENT SECURISE
        </div>
        <div class=\"col-sm hr2\">
          REMBOURSEMENT SOUS 30 JOURS
        </div>
      </div>
    </div>

    <!--......slide........-->

    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy.png"), "html", null, true);
        echo "\" alt=\"slide 1\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy2.png"), "html", null, true);
        echo "\" alt=\"slide 2\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy3.png"), "html", null, true);
        echo "\" alt=\"slide 3\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy4.png"), "html", null, true);
        echo "\" alt=\"slide 4\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy5.png"), "html", null, true);
        echo "\" alt=\"slide 5\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy6.png"), "html", null, true);
        echo "\" alt=\"slide 6\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy6.png"), "html", null, true);
        echo "\" alt=\"slide 7\">
                </div>
                <div class=\"carousel-item col-md-4\">
                    <img class=\"d-block w-100\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy6.png"), "html", null, true);
        echo "\" alt=\"slide 87\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExample\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-chevron-left fa-lg text-muted\"></i>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next text-faded\" href=\"#carouselExample\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-chevron-right fa-lg text-muted\"></i>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!--end slide-->

<div class=\"container\">
    <div class=\"row\">

        <div class=\"alert alert-secondary border-dark rounded col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                <nav class=\"col-lg-12 border-dark rounded\">
                        <ul>
                          <li><a href=\"\">Cuir</a></li>
                        </ul>
                        <ul>
                          <li><a href=\"\">Metal</a></li>
                        </ul>
                  
                          <label for=\"capacite\">Capacité</label>
                          <select class=\"custom-select\" id=\"capacite\" name=\"capacite\" size=\"1\">
                            <option selected>Choisissez capacité</option>
                            <option>5</option>
                            <option>20</option>
                            <option>50</option>
                            <option>100</option>
                          </select>
                  
                        <label for=\"prix\">Prix</label>
                        <input type=\"range\" class=\"custom-range\" min=\"0\" max=\"1000\" id=\"prix\">
                        <div class=\"form-group\">

                          <label for=\"dateA\">Date d'arrivée</label>

                        </div>
                </nav>
                  
        </div>
        <div class=\"col-lg-7\">
            <div class=\"alert alert-secondary\" role=\"alert\">
                <div class=\"row\">
                   
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 110
            echo "
                <div class=\"col-lg-4 mt-5\">
                    <div class=\"card-deck\">
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", []))), "html", null, true);
            echo "\" alt=\"photo bracelet\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", []), "html", null, true);
            echo "</h5>
                                <p class=\"card-text text-center\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", []), "html", null, true);
            echo " </p>
                            </div>
                            <div class=\"card-footer\">
                                <small class=\"text-muted text-center\">Euro ";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", []), "html", null, true);
            echo " <input type=\"button\" class=\"btn btn-dark\" value=\"ajouter au panier\"> </small>

                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
                </div>
            </div>
            </div>
            <hr>

            <hr>
            <div class=\" alert alert-secondary col-lg-2\">
                
            </div>

            <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-item bg-secondary\">Se eliminó</li>
                        <li class=\"list-group-item\">bootstrap.min.css de Material Design</li>
                        <li class=\"list-group-item\">bootstrap.min.js de Material Design</li>
                        <li class=\"list-group-item border border-0\"> </li>
                        <li class=\"list-group-item bg-secondary\">Se arregló</li>
                        <li class=\"list-group-item\">bootstrap.min.css para Material Design</li>
                        <li class=\"list-group-item\">bootstrap.min.js para Material Design</li>
                        <li class=\"list-group-item\">mdb.min.css</li>
                        <li class=\"list-group-item\">mdb.min.js</li>
                        <li class=\"list-group-item\">jarallax.js</li>
                        <li class=\"list-group-item\">jarallax-video.js, tarda en iniciar.. Aun no se la razón</li>
                    </ul>
                </div>
                <div class=\"col-6\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-item bg-secondary\">It is eliminated</li>
                        <li class=\"list-group-item\">bootstrap.min.css from Material Design</li>
                        <li class=\"list-group-item\">bootstrap.min.js from Material Design</li>
                        <li class=\"list-group-item border border-0\"> </li>
                        <li class=\"list-group-item bg-secondary\">Se arregló</li>
                        <li class=\"list-group-item\">bootstrap.min.css for Material Design</li>
                        <li class=\"list-group-item\">bootstrap.min.js for Material Design</li>
                        <li class=\"list-group-item\">mdb.min.css</li>
                        <li class=\"list-group-item\">mdb.min.js</li>
                        <li class=\"list-group-item\">jarallax.js</li>
                        <li class=\"list-group-item\">jarallax-video.js, It takes time to start .. I still do not know why</li>
                    </ul>
                </div>
            </div>
            </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@RemmyHome/Homepage/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 128,  215 => 120,  209 => 117,  205 => 116,  200 => 114,  194 => 110,  190 => 109,  136 => 58,  130 => 55,  124 => 52,  118 => 49,  112 => 46,  106 => 43,  100 => 40,  94 => 37,  63 => 9,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid\">
    <img src=\"{{ asset('assets/win2.png') }}\" class=\"bandeau\" alt=\"\">
</div>

    <nav class=\"navbar navbar-light  justify-content-between bar-navigation\">
        <img src=\"{{ asset('assets/remmy.png') }}\" class=\"logo\" alt=\"logo remmy\">
        <form class=\"form-inline\">
          <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </nav>

</div>

<div class=\"container mid-header\">
    <div class=\"row\">
        <div class=\"col-sm hr2\">
          LIVRAISON A DOMICILE
        </div>
        <div class=\"col-sm hr2\">
          PAIEMENT SECURISE
        </div>
        <div class=\"col-sm hr2\">
          REMBOURSEMENT SOUS 30 JOURS
        </div>
      </div>
    </div>

    <!--......slide........-->

    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"{{ asset('assets/model/br cuir classy.png') }}\" alt=\"slide 1\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\" src=\"{{ asset('assets/model/br cuir classy2.png') }}\" alt=\"slide 2\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"{{ asset('assets/model/br cuir classy3.png') }}\" alt=\"slide 3\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"{{ asset('assets/model/br cuir classy4.png') }}\" alt=\"slide 4\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"{{ asset('assets/model/br cuir classy5.png') }}\" alt=\"slide 5\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"{{ asset('assets/model/br cuir classy6.png') }}\" alt=\"slide 6\">
                </div>
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"{{ asset('assets/model/br cuir classy6.png') }}\" alt=\"slide 7\">
                </div>
                <div class=\"carousel-item col-md-4\">
                    <img class=\"d-block w-100\" src=\"{{ asset('assets/model/br cuir classy6.png') }}\" alt=\"slide 87\">
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExample\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-chevron-left fa-lg text-muted\"></i>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next text-faded\" href=\"#carouselExample\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-chevron-right fa-lg text-muted\"></i>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!--end slide-->

<div class=\"container\">
    <div class=\"row\">

        <div class=\"alert alert-secondary border-dark rounded col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                <nav class=\"col-lg-12 border-dark rounded\">
                        <ul>
                          <li><a href=\"\">Cuir</a></li>
                        </ul>
                        <ul>
                          <li><a href=\"\">Metal</a></li>
                        </ul>
                  
                          <label for=\"capacite\">Capacité</label>
                          <select class=\"custom-select\" id=\"capacite\" name=\"capacite\" size=\"1\">
                            <option selected>Choisissez capacité</option>
                            <option>5</option>
                            <option>20</option>
                            <option>50</option>
                            <option>100</option>
                          </select>
                  
                        <label for=\"prix\">Prix</label>
                        <input type=\"range\" class=\"custom-range\" min=\"0\" max=\"1000\" id=\"prix\">
                        <div class=\"form-group\">

                          <label for=\"dateA\">Date d'arrivée</label>

                        </div>
                </nav>
                  
        </div>
        <div class=\"col-lg-7\">
            <div class=\"alert alert-secondary\" role=\"alert\">
                <div class=\"row\">
                   
                {% for product in products %}

                <div class=\"col-lg-4 mt-5\">
                    <div class=\"card-deck\">
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"{{ asset('uploads/images products/' ~ product.image ) }}\" alt=\"photo bracelet\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">{{ product.name }}</h5>
                                <p class=\"card-text text-center\">{{ product.description }} </p>
                            </div>
                            <div class=\"card-footer\">
                                <small class=\"text-muted text-center\">Euro {{ product.price }} <input type=\"button\" class=\"btn btn-dark\" value=\"ajouter au panier\"> </small>

                            </div>
                        </div>
                    </div>
                </div>
                
                {% endfor %}

                </div>
            </div>
            </div>
            <hr>

            <hr>
            <div class=\" alert alert-secondary col-lg-2\">
                
            </div>

            <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-item bg-secondary\">Se eliminó</li>
                        <li class=\"list-group-item\">bootstrap.min.css de Material Design</li>
                        <li class=\"list-group-item\">bootstrap.min.js de Material Design</li>
                        <li class=\"list-group-item border border-0\"> </li>
                        <li class=\"list-group-item bg-secondary\">Se arregló</li>
                        <li class=\"list-group-item\">bootstrap.min.css para Material Design</li>
                        <li class=\"list-group-item\">bootstrap.min.js para Material Design</li>
                        <li class=\"list-group-item\">mdb.min.css</li>
                        <li class=\"list-group-item\">mdb.min.js</li>
                        <li class=\"list-group-item\">jarallax.js</li>
                        <li class=\"list-group-item\">jarallax-video.js, tarda en iniciar.. Aun no se la razón</li>
                    </ul>
                </div>
                <div class=\"col-6\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-item bg-secondary\">It is eliminated</li>
                        <li class=\"list-group-item\">bootstrap.min.css from Material Design</li>
                        <li class=\"list-group-item\">bootstrap.min.js from Material Design</li>
                        <li class=\"list-group-item border border-0\"> </li>
                        <li class=\"list-group-item bg-secondary\">Se arregló</li>
                        <li class=\"list-group-item\">bootstrap.min.css for Material Design</li>
                        <li class=\"list-group-item\">bootstrap.min.js for Material Design</li>
                        <li class=\"list-group-item\">mdb.min.css</li>
                        <li class=\"list-group-item\">mdb.min.js</li>
                        <li class=\"list-group-item\">jarallax.js</li>
                        <li class=\"list-group-item\">jarallax-video.js, It takes time to start .. I still do not know why</li>
                    </ul>
                </div>
            </div>
            </div>
    </div>
</div>

{% endblock %}", "@RemmyHome/Homepage/home.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\HomeBundle\\Resources\\views\\Homepage\\home.html.twig");
    }
}
