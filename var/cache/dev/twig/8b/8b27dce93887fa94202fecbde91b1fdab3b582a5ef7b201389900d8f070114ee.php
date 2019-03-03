<?php

/* @RemmyFront/Homepage/home.html.twig */
class __TwigTemplate_e1f5987320899775bde024bdca5f5f1cf355e0db74a89ebbdac081df12cc8798 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@RemmyFront/Homepage/home.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyFront/Homepage/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyFront/Homepage/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"container-fluid\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/win2.png"), "html", null, true);
        echo "\" class=\"bandeau\" alt=\"\">
</div>

<nav class=\"navbar navbar-light  justify-content-between bar-navigation\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/remmy.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo remmy\">
    <form class=\"form-inline\">
        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.search", [], "FOSUserBundle"), "html", null, true);
        echo "\" aria-label=\"Search\">
        <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.search", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
    </form>
</nav>


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

<!--......slide........

    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy.jpg"), "html", null, true);
        echo "\" alt=\"slide 1\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy2.jpg"), "html", null, true);
        echo "\" alt=\"slide 2\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy3.jpg"), "html", null, true);
        echo "\" alt=\"slide 3\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy4.jpg"), "html", null, true);
        echo "\" alt=\"slide 4\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy5.jpg"), "html", null, true);
        echo "\" alt=\"slide 5\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy6.jpg"), "html", null, true);
        echo "\" alt=\"slide 6\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy6.jpg"), "html", null, true);
        echo "\" alt=\"slide 7\">
                </div>
                <div class=\"carousel-item col-md-4\">
                    <img class=\"d-block w-50\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/model/br cuir classy6.jpg"), "html", null, true);
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
        end slide-->


<!-- ========================= SECTION CONTENT ========================= -->

";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 74, $this->source); })()));
        echo "

<section class=\"section-content bg padding-y\">
    <div class=\"container-fluid\">

        <div class=\"row\">
            <aside class=\"col-sm-3\">

                <div class=\"card card-filter\">
                    <article class=\"card-group-item\">
                        <header class=\"card-header\">
                            <a class=\"\" aria-expanded=\"true\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapse22\">
                        <i class=\"icon-action fa fa-chevron-down\"></i>
                        <h6 class=\"title\">Category</h6>
                    </a>
                        </header>
                        <div style=\"\" class=\"filter-content collapse show\" id=\"collapse22\">
                            <div class=\"card-body\">
                                <form class=\"pb-3\">
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <ul class=\"list-unstyled list-lg\">
                                    <li><a href=\"#\">Cras justo odio <span class=\"float-right badge badge-light round\">142</span> </a></li>
                                    <li><a href=\"#\">Dapibus ac facilisis  <span class=\"float-right badge badge-light round\">3</span>  </a></li>
                                    <li><a href=\"#\">Morbi leo risus <span class=\"float-right badge badge-light round\">32</span>  </a></li>
                                    <li><a href=\"#\">Another item <span class=\"float-right badge badge-light round\">12</span>  </a></li>
                                </ul>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                    <article class=\"card-group-item\">
                        <header class=\"card-header\">
                            <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapse33\">
                        <i class=\"icon-action fa fa-chevron-down\"></i>
                        <h6 class=\"title\">Price  </h6>
                    </a>
                        </header>
                        <div class=\"filter-content collapse show\" id=\"collapse33\">
                            <div class=\"card-body\">
                                <input type=\"range\" class=\"custom-range\" min=\"0\" max=\"100\" name=\"\">
                                <div class=\"form-row\">
                                    <div class=\"form-group col-md-6\">
                                        <label>Min</label>
                                        <input class=\"form-control\" placeholder=\"\$0\" type=\"number\">
                                    </div>
                                    <div class=\"form-group text-right col-md-6\">
                                        <label>Max</label>
                                        <input class=\"form-control\" placeholder=\"\$1,0000\" type=\"number\">
                                    </div>
                                </div>
                                <!-- form-row.// -->
                                <button class=\"btn btn-block btn-outline-primary\">Apply</button>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                    <article class=\"card-group-item\">
                        <header class=\"card-header\">
                            <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapse44\">
                        <i class=\"icon-action fa fa-chevron-down\"></i>
                        <h6 class=\"title\">Color </h6>
                    </a>
                        </header>
                        <div class=\"filter-content collapse show\" id=\"collapse44\">
                            <div class=\"card-body\">
                                <form>
                                    <label class=\"form-check\">
                          <input class=\"form-check-input\" value=\"\" type=\"checkbox\">
                          <span class=\"form-check-label\">
                              <span class=\"float-right badge badge-light round\">5</span>
                            Noir
                          </span>
                        </label>
                                    <!-- form-check.// -->
                                    <label class=\"form-check\">
                          <input class=\"form-check-input\" value=\"\" type=\"checkbox\">
                          <span class=\"form-check-label\">
                              <span class=\"float-right badge badge-light round\">13</span>
                            Blanc
                          </span>
                        </label>
                                    <!-- form-check.// -->
                                    <label class=\"form-check\">
                          <input class=\"form-check-input\" value=\"\" type=\"checkbox\">
                          <span class=\"form-check-label\">
                              <span class=\"float-right badge badge-light round\">12</span>
                            Bleu
                          </span>
                        </label>
                                    <!-- form-check.// -->
                                    <label class=\"form-check\">
                          <input class=\"form-check-input\" value=\"\" type=\"checkbox\">
                          <span class=\"form-check-label\">
                              <span class=\"float-right badge badge-light round\">32</span>
                            Another Brand
                          </span>
                        </label>
                                    <!-- form-check.// -->
                                </form>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                </div>
                <!-- card.// -->
            </aside>
            <!-- col.// -->


            <main class=\"col-sm-9\">
                <div class=\"row\">
                    ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 198, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 199
            echo "                    <div class=\"col-sm-6\">
                        <article class=\"card bg-r\">

                            <div class=\"row\">

                                <aside class=\"col-sm-7 mb-2\">
                                    <div class=\"img-wrap\"><img src=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images_products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", []))), "html", null, true);
            echo "\"></div>
                                </aside>
                                <!-- col.// -->

                                <aside class=\"col-sm-5 border-left\">
                                    <div class=\"action-wrap\">
                                        <div class=\"price-wrap h4\">
                                            <span class=\"price\"> €";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", []), "html", null, true);
            echo " </span>
                                            <del class=\"price-old\"> \$528</del>
                                        </div>
                                        <!-- info-price-detail // -->
                                        <p class=\"text-success\">Free shipping</p>
                                        <p>
                                            <a href=\"#\" class=\"btn btn-primary\"> Buy now </a>
                                            <a href=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_product_retail", ["idproduct" => twig_get_attribute($this->env, $this->source, $context["product"], "idproduct", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary\"> Details  </a>
                                        </p>
                                        <a href=\"#\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                    </div>
                                    <!-- action-wrap.// -->
                                </aside>
                                <!-- col.// -->
                            </div>
                            <!-- row.// -->
                            <div class=\"row\">
                                <article class=\"col-sm-10\">
                                    <h4 class=\"title\">";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", []), "html", null, true);
            echo " </h4>
                                    <div class=\"rating-wrap mb-2\">
                                        <ul class=\"rating-stars\">
                                            <li style=\"width:50%\" class=\"stars-active\">
                                                <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </li>
                                            <li>
                                                <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </li>
                                        </ul>
                                        <div class=\"label-rating\">12 reviews</div>
                                        <div class=\"label-rating\">154 orders </div>
                                    </div>
                                    <!-- rating-wrap.// -->
                                    <p>";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", []), "html", null, true);
            echo "</p>
                                    <dl class=\"dlist-align\">
                                        <dt>Color</dt>
                                        <dd>aaaaaaaaaaaaaaaaa ";
            // line 252
            echo "                                        </dd>
                                    </dl>
                                    <!-- item-property-hor .// -->
                                    <dl class=\"dlist-align\">
                                        <dt>Material</dt>
                                        <dd>Syntetic, wooden</dd>
                                    </dl>
                                    <!-- item-property-hor .// -->
                                </article>
                                <!-- col.// -->
                            </div>

                        </article>
                        <!-- card product .// -->
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                </div>
            </main>
            <!-- col.// -->
        </div>
    </div>
    <!-- container .//  -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<div class=\"container\">
    <div class=\"col-lg-7\">
        <div class=\"alert alert-secondary\" role=\"alert\">
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
        return "@RemmyFront/Homepage/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 268,  362 => 252,  356 => 248,  335 => 230,  321 => 219,  311 => 212,  301 => 205,  293 => 199,  289 => 198,  162 => 74,  140 => 55,  134 => 52,  128 => 49,  122 => 46,  116 => 43,  110 => 40,  104 => 37,  98 => 34,  71 => 10,  67 => 9,  62 => 7,  55 => 3,  52 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} {% block body %}
<div class=\"container-fluid\">
    <img src=\"{{ asset('assets/win2.png') }}\" class=\"bandeau\" alt=\"\">
</div>

<nav class=\"navbar navbar-light  justify-content-between bar-navigation\">
    <img src=\"{{ asset('assets/remmy.png') }}\" class=\"logo\" alt=\"logo remmy\">
    <form class=\"form-inline\">
        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"{{ 'form.search'|trans({}, 'FOSUserBundle') }}\" aria-label=\"Search\">
        <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">{{ 'form.search'|trans({}, 'FOSUserBundle') }}</button>
    </form>
</nav>


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

<!--......slide........

    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <img class=\"d-block w-100\"  src=\"{{ asset('assets/model/br cuir classy.jpg') }}\" alt=\"slide 1\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\" src=\"{{ asset('assets/model/br cuir classy2.jpg') }}\" alt=\"slide 2\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"{{ asset('assets/model/br cuir classy3.jpg') }}\" alt=\"slide 3\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"{{ asset('assets/model/br cuir classy4.jpg') }}\" alt=\"slide 4\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"{{ asset('assets/model/br cuir classy5.jpg') }}\" alt=\"slide 5\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"{{ asset('assets/model/br cuir classy6.jpg') }}\" alt=\"slide 6\">
                </div>
                <div class=\"carousel-item\">
                    <img class=\"d-block w-50\"  src=\"{{ asset('assets/model/br cuir classy6.jpg') }}\" alt=\"slide 7\">
                </div>
                <div class=\"carousel-item col-md-4\">
                    <img class=\"d-block w-50\" src=\"{{ asset('assets/model/br cuir classy6.jpg') }}\" alt=\"slide 87\">
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
        end slide-->


<!-- ========================= SECTION CONTENT ========================= -->

{{dump(products)}}

<section class=\"section-content bg padding-y\">
    <div class=\"container-fluid\">

        <div class=\"row\">
            <aside class=\"col-sm-3\">

                <div class=\"card card-filter\">
                    <article class=\"card-group-item\">
                        <header class=\"card-header\">
                            <a class=\"\" aria-expanded=\"true\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapse22\">
                        <i class=\"icon-action fa fa-chevron-down\"></i>
                        <h6 class=\"title\">Category</h6>
                    </a>
                        </header>
                        <div style=\"\" class=\"filter-content collapse show\" id=\"collapse22\">
                            <div class=\"card-body\">
                                <form class=\"pb-3\">
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <ul class=\"list-unstyled list-lg\">
                                    <li><a href=\"#\">Cras justo odio <span class=\"float-right badge badge-light round\">142</span> </a></li>
                                    <li><a href=\"#\">Dapibus ac facilisis  <span class=\"float-right badge badge-light round\">3</span>  </a></li>
                                    <li><a href=\"#\">Morbi leo risus <span class=\"float-right badge badge-light round\">32</span>  </a></li>
                                    <li><a href=\"#\">Another item <span class=\"float-right badge badge-light round\">12</span>  </a></li>
                                </ul>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                    <article class=\"card-group-item\">
                        <header class=\"card-header\">
                            <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapse33\">
                        <i class=\"icon-action fa fa-chevron-down\"></i>
                        <h6 class=\"title\">Price  </h6>
                    </a>
                        </header>
                        <div class=\"filter-content collapse show\" id=\"collapse33\">
                            <div class=\"card-body\">
                                <input type=\"range\" class=\"custom-range\" min=\"0\" max=\"100\" name=\"\">
                                <div class=\"form-row\">
                                    <div class=\"form-group col-md-6\">
                                        <label>Min</label>
                                        <input class=\"form-control\" placeholder=\"\$0\" type=\"number\">
                                    </div>
                                    <div class=\"form-group text-right col-md-6\">
                                        <label>Max</label>
                                        <input class=\"form-control\" placeholder=\"\$1,0000\" type=\"number\">
                                    </div>
                                </div>
                                <!-- form-row.// -->
                                <button class=\"btn btn-block btn-outline-primary\">Apply</button>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                    <article class=\"card-group-item\">
                        <header class=\"card-header\">
                            <a href=\"#\" data-toggle=\"collapse\" data-target=\"#collapse44\">
                        <i class=\"icon-action fa fa-chevron-down\"></i>
                        <h6 class=\"title\">Color </h6>
                    </a>
                        </header>
                        <div class=\"filter-content collapse show\" id=\"collapse44\">
                            <div class=\"card-body\">
                                <form>
                                    <label class=\"form-check\">
                          <input class=\"form-check-input\" value=\"\" type=\"checkbox\">
                          <span class=\"form-check-label\">
                              <span class=\"float-right badge badge-light round\">5</span>
                            Noir
                          </span>
                        </label>
                                    <!-- form-check.// -->
                                    <label class=\"form-check\">
                          <input class=\"form-check-input\" value=\"\" type=\"checkbox\">
                          <span class=\"form-check-label\">
                              <span class=\"float-right badge badge-light round\">13</span>
                            Blanc
                          </span>
                        </label>
                                    <!-- form-check.// -->
                                    <label class=\"form-check\">
                          <input class=\"form-check-input\" value=\"\" type=\"checkbox\">
                          <span class=\"form-check-label\">
                              <span class=\"float-right badge badge-light round\">12</span>
                            Bleu
                          </span>
                        </label>
                                    <!-- form-check.// -->
                                    <label class=\"form-check\">
                          <input class=\"form-check-input\" value=\"\" type=\"checkbox\">
                          <span class=\"form-check-label\">
                              <span class=\"float-right badge badge-light round\">32</span>
                            Another Brand
                          </span>
                        </label>
                                    <!-- form-check.// -->
                                </form>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                </div>
                <!-- card.// -->
            </aside>
            <!-- col.// -->


            <main class=\"col-sm-9\">
                <div class=\"row\">
                    {% for product in products %}
                    <div class=\"col-sm-6\">
                        <article class=\"card bg-r\">

                            <div class=\"row\">

                                <aside class=\"col-sm-7 mb-2\">
                                    <div class=\"img-wrap\"><img src=\"{{ asset('uploads/images_products/' ~ product.image) }}\"></div>
                                </aside>
                                <!-- col.// -->

                                <aside class=\"col-sm-5 border-left\">
                                    <div class=\"action-wrap\">
                                        <div class=\"price-wrap h4\">
                                            <span class=\"price\"> €{{ product.price }} </span>
                                            <del class=\"price-old\"> \$528</del>
                                        </div>
                                        <!-- info-price-detail // -->
                                        <p class=\"text-success\">Free shipping</p>
                                        <p>
                                            <a href=\"#\" class=\"btn btn-primary\"> Buy now </a>
                                            <a href=\"{{ path('front_product_retail', { 'idproduct': product.idproduct }) }}\" class=\"btn btn-secondary\"> Details  </a>
                                        </p>
                                        <a href=\"#\"><i class=\"fa fa-heart\"></i> Add to wishlist</a>
                                    </div>
                                    <!-- action-wrap.// -->
                                </aside>
                                <!-- col.// -->
                            </div>
                            <!-- row.// -->
                            <div class=\"row\">
                                <article class=\"col-sm-10\">
                                    <h4 class=\"title\">{{ product.name }} </h4>
                                    <div class=\"rating-wrap mb-2\">
                                        <ul class=\"rating-stars\">
                                            <li style=\"width:50%\" class=\"stars-active\">
                                                <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </li>
                                            <li>
                                                <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </li>
                                        </ul>
                                        <div class=\"label-rating\">12 reviews</div>
                                        <div class=\"label-rating\">154 orders </div>
                                    </div>
                                    <!-- rating-wrap.// -->
                                    <p>{{ product.description }}</p>
                                    <dl class=\"dlist-align\">
                                        <dt>Color</dt>
                                        <dd>aaaaaaaaaaaaaaaaa {#{% for color in productHasColorsRepo.findByidColor(product.idcolor) %} {# Boucle sur chaque ligne de {% set colorsRepo.findByidColor(color.idColor)[0].color %} {% endfor %} {# Affiche la quantité finale après calcul {{ color }} #}
                                        </dd>
                                    </dl>
                                    <!-- item-property-hor .// -->
                                    <dl class=\"dlist-align\">
                                        <dt>Material</dt>
                                        <dd>Syntetic, wooden</dd>
                                    </dl>
                                    <!-- item-property-hor .// -->
                                </article>
                                <!-- col.// -->
                            </div>

                        </article>
                        <!-- card product .// -->
                    </div>
                    {% endfor %}
                </div>
            </main>
            <!-- col.// -->
        </div>
    </div>
    <!-- container .//  -->


</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<div class=\"container\">
    <div class=\"col-lg-7\">
        <div class=\"alert alert-secondary\" role=\"alert\">
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


{% endblock %}
", "@RemmyFront/Homepage/home.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\FrontBundle\\Resources\\views\\Homepage\\home.html.twig");
    }
}
