<?php

/* base.html.twig */
class __TwigTemplate_54de69bae46782497827fdbc3ea88e481aa43a3afc12d0abec57c6b32f4894be extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en.3.33333333333333333333333333333333333333\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!--asset CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/general.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ShoppingCar.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/retails.css"), "html", null, true);
        echo "\" />

    <!-- Font Awsome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>

  <body>
";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "session", []));
        echo "
      <div class=\"container\">
        <nav class=\"navbar navbar-expand-md \">
                <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">REMMY</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarsExampleDefault\">

            
                    <form class=\"form-inline my-2 my-lg-0\">
                            ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 39
            echo "
                            ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "<a class=\" btn-sm ml-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_office_admin");
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin", [], "FOSUserBundle"), "html", null, true);
                echo "</a>
                            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 41
                echo "<a class=\"btn-sm ml-3\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("profile.show.profile", [], "FOSUserBundle"), "html", null, true);
                echo "</a>";
            }
            // line 42
            echo "                            <a class=\"btn-sm ml-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                            
                            ";
        } else {
            // line 45
            echo "                                    <a class=\" btn-sm ml-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                                    <a class=\" btn-sm ml-3\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.register", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 47
        echo "                    
                                    <a class=\"btn-sm ml-3\" href=\"\"><i class=\"fa fa-shopping-cart\"></span></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.shopping_card", [], "FOSUserBundle"), "html", null, true);
        echo "<span class=\"badge badge-light\">5</a>                        
                        </form>
                </div>
        </nav> <hr>
    </div>


        
      ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "       

        ";
        // line 59
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 179
        echo "
    ";
        // line 180
        $this->displayBlock('javascripts', $context, $blocks);
        // line 181
        echo "    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/caroussel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home page Remmy";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<!-- Footer -->
    <footer class=\"page-footer font-small mt-5\">
    
            <!-- Footer Links -->
            <div class=\"container-fluid foot-base\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/win.png"), "html", null, true);
        echo "\" class=\"foot-bandeau\" alt=\"fond-footer\">        
              <!-- Grid row-->
              <div class=\"row text-center d-flex justify-content-center pt-5 mb-3\">
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase text-white\">
                    <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutPage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.about us", [], "FOSUserBundle"), "html", null, true);
        echo "</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase text-white\">
                    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgvPage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.generals conditions", [], "FOSUserBundle"), "html", null, true);
        echo "</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase\">
                    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactPage");
        echo "\">Contact</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase\">
                    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sitemapPage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.site map", [], "FOSUserBundle"), "html", null, true);
        echo "</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-3 mb-5\">
                    <form action=\"\" class=\"form-inline\">
                      <div class=\"form-group mx-sm-3\">
                        <input class=\"form-control \" type=\"search\" value=\"Newsletter\" id=\"example-search-input\">
                      </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Souscrire</button>
                    </form>
                </div>

                
                <!-- Grid column -->
        
              </div>
              <!-- Grid row-->
              
              <div class=\" text-center\">
                  <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/payplug.png"), "html", null, true);
        echo "\" alt=\"logo payement visa cb mastercard\" class=\"payment\">
                  <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/paymentlogo_paypal.png"), "html", null, true);
        echo "\" alt=\"logo paypal\" class=\"payment\">      
              </div>


              <div class=\"row d-flex text-center justify-content-center mb-md-0 mb-4\">
        
                <!-- Grid column -->
                <div class=\"col-md-8 col-12 mt-5 text-light\">
                  <p style=\"line-height: 1.7rem; font-size: 14px; \">Nos bracelets homme ont été sélectionnés pour s'inscrire dans la tendance actuelle. Pour satisfaire les goûts de chacun,
                     le choix est vaste, du plus sobre au plus chamarré. Nous avons fait le choix de créer des modèles alliant tradition et modernité :Pour certains bracelets,
                     les designers ont osé marier le cuir avec des matériaux beaucoup plus modernes comme le fer ou l'acier.
                     Un bon moyen de remettre les bracelets traditionnels au goût du jour !</p>
                </div>
                <!-- Grid column -->
        
              </div>
              <!-- Grid row-->
              <hr class=\"clearfix d-md-none rgba-white-light\" style=\"margin: 10% 15% 5%;\">
        
              <!-- Grid row-->
              <div class=\"row pb-3\">
        
                <!-- Grid column -->
                <div class=\"col-md-12\">
        
                  <div class=\"text-center justify-content-center mb-md-0 mb-4\">
        
                    <!-- Facebook -->
                    <a href=\"https://www.facebook.com/\">
                      <i class=\"fab fa-facebook-f fa-lg text-white mr-4\"> </i>
                    </a>
                    <!-- Twitter -->
                    <a  href=\"https://twitter.com/\">
                      <i class=\"fab fa-twitter fa-lg text-white mr-4\"> </i>
                    </a>
                    <!--Instagram-->
                    <a href=\"https://www.instagram.com/\">
                      <i class=\"fab fa-instagram fa-lg text-white mr-4\"> </i>
                    </a>
                  </div>
        
                </div>
                <!-- Grid column -->
        
              </div>
              <!-- Grid row-->
        
            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class=\"footer-copyright text-center py-3\">© 2018-2019 Copyright:
              <p>Michael Banicles Site NON LUCRATIF (formation professionelle)</p>
            </div>
            <!-- Copyright -->
        
          </footer>
          <!-- Footer -->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 180,  361 => 120,  357 => 119,  330 => 97,  319 => 89,  306 => 81,  293 => 73,  283 => 66,  268 => 61,  251 => 59,  233 => 56,  215 => 22,  197 => 20,  181 => 183,  177 => 181,  175 => 180,  172 => 179,  170 => 61,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  148 => 48,  145 => 47,  138 => 46,  131 => 45,  122 => 42,  115 => 41,  106 => 40,  103 => 39,  101 => 38,  89 => 29,  83 => 26,  76 => 22,  73 => 21,  71 => 20,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en.3.33333333333333333333333333333333333333\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <!--asset CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('css/general.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/ShoppingCar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/ui.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/retails.css') }}\" />

    <!-- Font Awsome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    {% block stylesheets %} {% endblock %}

    <title>{% block title %}Home page Remmy{% endblock %}</title>
  </head>

  <body>
{{dump(app.session)}}
      <div class=\"container\">
        <nav class=\"navbar navbar-expand-md \">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">REMMY</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarsExampleDefault\">

            
                    <form class=\"form-inline my-2 my-lg-0\">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

                            {% if is_granted('ROLE_ADMIN') %}<a class=\" btn-sm ml-3\" href=\"{{path('back_office_admin') }}\"></i> {{ 'admin'|trans({}, 'FOSUserBundle') }}</a>
                            {% elseif is_granted('ROLE_USER') %}<a class=\"btn-sm ml-3\" href=\"{{path('fos_user_profile_show') }}\"></i> {{ 'profile.show.profile'|trans({}, 'FOSUserBundle') }}</a>{% endif %}
                            <a class=\"btn-sm ml-3\" href=\"{{ path('fos_user_security_logout') }}\"> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a>
                            
                            {% else %}
                                    <a class=\" btn-sm ml-3\" href=\"{{ path('fos_user_security_login') }}\"> {{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                                    <a class=\" btn-sm ml-3\" href=\"{{ path('fos_user_registration_register') }}\">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a>
                            {% endif %}                    
                                    <a class=\"btn-sm ml-3\" href=\"\"><i class=\"fa fa-shopping-cart\"></span></i> {{ 'form.shopping_card'|trans({}, 'FOSUserBundle') }}<span class=\"badge badge-light\">5</a>                        
                        </form>
                </div>
        </nav> <hr>
    </div>


        
      {% block body %} {% endblock %}
       

        {% block fos_user_content %}{% endblock %}

    {% block footer %}<!-- Footer -->
    <footer class=\"page-footer font-small mt-5\">
    
            <!-- Footer Links -->
            <div class=\"container-fluid foot-base\">
                <img src=\"{{ asset('assets/win.png' ) }}\" class=\"foot-bandeau\" alt=\"fond-footer\">        
              <!-- Grid row-->
              <div class=\"row text-center d-flex justify-content-center pt-5 mb-3\">
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase text-white\">
                    <a href=\"{{path('aboutPage') }}\">{{ 'footer.about us'|trans({}, 'FOSUserBundle') }}</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase text-white\">
                    <a href=\"{{path('cgvPage') }}\">{{ 'footer.generals conditions'|trans({}, 'FOSUserBundle') }}</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase\">
                    <a href=\"{{path('contactPage') }}\">Contact</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase\">
                    <a href=\"{{path('sitemapPage') }}\">{{ 'footer.site map'|trans({}, 'FOSUserBundle') }}</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-3 mb-5\">
                    <form action=\"\" class=\"form-inline\">
                      <div class=\"form-group mx-sm-3\">
                        <input class=\"form-control \" type=\"search\" value=\"Newsletter\" id=\"example-search-input\">
                      </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Souscrire</button>
                    </form>
                </div>

                
                <!-- Grid column -->
        
              </div>
              <!-- Grid row-->
              
              <div class=\" text-center\">
                  <img src=\"{{ asset('assets/payplug.png') }}\" alt=\"logo payement visa cb mastercard\" class=\"payment\">
                  <img src=\"{{ asset('assets/paymentlogo_paypal.png') }}\" alt=\"logo paypal\" class=\"payment\">      
              </div>


              <div class=\"row d-flex text-center justify-content-center mb-md-0 mb-4\">
        
                <!-- Grid column -->
                <div class=\"col-md-8 col-12 mt-5 text-light\">
                  <p style=\"line-height: 1.7rem; font-size: 14px; \">Nos bracelets homme ont été sélectionnés pour s'inscrire dans la tendance actuelle. Pour satisfaire les goûts de chacun,
                     le choix est vaste, du plus sobre au plus chamarré. Nous avons fait le choix de créer des modèles alliant tradition et modernité :Pour certains bracelets,
                     les designers ont osé marier le cuir avec des matériaux beaucoup plus modernes comme le fer ou l'acier.
                     Un bon moyen de remettre les bracelets traditionnels au goût du jour !</p>
                </div>
                <!-- Grid column -->
        
              </div>
              <!-- Grid row-->
              <hr class=\"clearfix d-md-none rgba-white-light\" style=\"margin: 10% 15% 5%;\">
        
              <!-- Grid row-->
              <div class=\"row pb-3\">
        
                <!-- Grid column -->
                <div class=\"col-md-12\">
        
                  <div class=\"text-center justify-content-center mb-md-0 mb-4\">
        
                    <!-- Facebook -->
                    <a href=\"https://www.facebook.com/\">
                      <i class=\"fab fa-facebook-f fa-lg text-white mr-4\"> </i>
                    </a>
                    <!-- Twitter -->
                    <a  href=\"https://twitter.com/\">
                      <i class=\"fab fa-twitter fa-lg text-white mr-4\"> </i>
                    </a>
                    <!--Instagram-->
                    <a href=\"https://www.instagram.com/\">
                      <i class=\"fab fa-instagram fa-lg text-white mr-4\"> </i>
                    </a>
                  </div>
        
                </div>
                <!-- Grid column -->
        
              </div>
              <!-- Grid row-->
        
            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class=\"footer-copyright text-center py-3\">© 2018-2019 Copyright:
              <p>Michael Banicles Site NON LUCRATIF (formation professionelle)</p>
            </div>
            <!-- Copyright -->
        
          </footer>
          <!-- Footer -->
        {% endblock footer %}

    {% block javascripts %}{% endblock %}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"{{ asset('js/caroussel.js') }}\"></script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
  </body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\base.html.twig");
    }
}
