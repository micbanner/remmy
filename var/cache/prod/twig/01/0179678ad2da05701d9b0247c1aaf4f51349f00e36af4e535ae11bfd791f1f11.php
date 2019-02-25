<?php

/* @RemmyHome/Homepage/home.html.twig */
class __TwigTemplate_801d562f18d543c8722fa566c6ba2cd6d5c4de084dfb708ea8c9002d731a9c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@RemmyHome/Homepage/home.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container-fluid\">
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/win2.png"), "html", null, true);
        echo "\" class=\"bandeau\" alt=\"\">
</div>

    <nav class=\"navbar navbar-light  justify-content-between bar-navigation\">
        <a class=\"text-white\">PAGE ACCUEIL</a>
        <form class=\"form-inline\">
          <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <button class=\"btn btn-outline-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </nav>

</div>

<div class=\"view hm-white-light jarallax\" data-jarallax='{\"speed\": 0.2}' data-jarallax-video=\"\">
    <div class=\"full-bg-img\">
        <div class=\"container flex-center\">
            <div class=\"row\">
                <div class=\"col-md-12 wow fadeIn\">
                    <div class=\"text-center text-black mid-header\">
                        <h1 class=\"display-2 mb-2 wow fadeInDown\" data-wow-delay=\"0.3s\">Header</h1>
                        <a class=\"btn btn-primary btn-lg wow fadeInDown\" data-wow-delay=\"0.4s\"><i class=\"fa fa-diamond\"></i> button</a> 
                        <a class=\"btn btn-primary btn-lg wow fadeInDown\" data-wow-delay=\"0.4s\"><i class=\"fa fa-shield\"></i> button </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"py-2\"></div>

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
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 71
            echo "
                <div class=\"col-lg-4 mt-5\">
                    <div class=\"card-deck\">
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images products/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
            echo "\" alt=\"photo bracelet\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-center\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</h5>
                                <p class=\"card-text text-center\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo " </p>
                            </div>
                            <div class=\"card-footer\">
                                <small class=\"text-muted text-center\">Euro ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
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
        // line 89
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

            <!--......slide........-->
            <div class=\"container\">
                <div id=\"carouselExample\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"4000\">
                    <div class=\"carousel-inner row w-100 mx-auto\" role=\"listbox\">
                        <div class=\"carousel-item col-md-4 active\">
                            <img class=\"img-fluid mx-auto d-block\" src=\"//placehold.it/600x400/000/fff?text=1\" alt=\"slide 1\">
                        </div>
                        <div class=\"carousel-item col-md-4\">
                            <img class=\"img-fluid mx-auto d-block\" src=\"//placehold.it/600x400?text=2\" alt=\"slide 2\">
                        </div>
                        <div class=\"carousel-item col-md-4\">
                            <img class=\"img-fluid mx-auto d-block\" src=\"//placehold.it/600x400?text=3\" alt=\"slide 3\">
                        </div>
                        <div class=\"carousel-item col-md-4\">
                            <img class=\"img-fluid mx-auto d-block\" src=\"//placehold.it/600x400?text=4\" alt=\"slide 4\">
                        </div>
                        <div class=\"carousel-item col-md-4\">
                            <img class=\"img-fluid mx-auto d-block\" src=\"//placehold.it/600x400?text=5\" alt=\"slide 5\">
                        </div>
                        <div class=\"carousel-item col-md-4\">
                            <img class=\"img-fluid mx-auto d-block\" src=\"//placehold.it/600x400?text=6\" alt=\"slide 6\">
                        </div>
                        <div class=\"carousel-item col-md-4\">
                            <img class=\"img-fluid mx-auto d-block\" src=\"//placehold.it/600x400?text=7\" alt=\"slide 7\">
                        </div>
                        <div class=\"carousel-item col-md-4\">
                            <img class=\"img-fluid mx-auto d-block\" src=\"//placehold.it/600x400?text=8\" alt=\"slide 87\">
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
            </div>
";
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
        return array (  141 => 89,  127 => 81,  121 => 78,  117 => 77,  112 => 75,  106 => 71,  102 => 70,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@RemmyHome/Homepage/home.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\HomeBundle\\Resources\\views\\Homepage\\home.html.twig");
    }
}
