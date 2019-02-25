<?php

/* base.html.twig */
class __TwigTemplate_2407ded08095ab9482f04d2e25375443ef15d6e9315d44ee051cad2a5adb2fec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en.3.33333333333333333333333333333333333333\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <!--asset CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/general.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ShoppingCar.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/caroussel.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/retails.css"), "html", null, true);
        echo "\" />

    <!-- Font Awsome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
    <title>";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>

  <body>

      <div class=\"container bg-light\">
        <nav class=\"navbar navbar-expand-md \">
                <a class=\"navbar-brand\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">REMMY</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarsExampleDefault\">

            
                    <form class=\"form-inline my-2 my-lg-0\">
                            ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "
                            ";
            // line 41
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                echo "<a class=\" btn-sm ml-3\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_admin");
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 42
                echo "<a class=\"btn-sm ml-3\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.profile", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>";
            }
            // line 43
            echo "                            <a class=\"btn-sm ml-3\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            
                            ";
        } else {
            // line 46
            echo "                                    <a class=\" btn-sm ml-3\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                    <a class=\" btn-sm ml-3\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 48
        echo "                    
                                    <a class=\"btn-sm ml-3\" href=\"\"><i class=\"fa fa-shopping-cart\"></span></i> ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.shopping_card", array(), "FOSUserBundle"), "html", null, true);
        echo "<span class=\"badge badge-light\">5</a>                        
                        </form>
                </div>
        </nav> <hr>
    </div>


        
      ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "       

        ";
        // line 60
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 180
        echo "
    ";
        // line 181
        $this->displayBlock('javascripts', $context, $blocks);
        // line 182
        echo "    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/caroussel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home page Remmy";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "<!-- Footer -->
    <footer class=\"page-footer font-small mt-5\">
    
            <!-- Footer Links -->
            <div class=\"container-fluid foot-base\">
                <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/win.png"), "html", null, true);
        echo "\" class=\"foot-bandeau\" alt=\"fond-footer\">        
              <!-- Grid row-->
              <div class=\"row text-center d-flex justify-content-center pt-5 mb-3\">
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase text-white\">
                    <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aboutPage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.about us", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase text-white\">
                    <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cgvPage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.generals conditions", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase\">
                    <a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactPage");
        echo "\">Contact</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase\">
                    <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitemapPage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("footer.site map", array(), "FOSUserBundle"), "html", null, true);
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
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/payplug.png"), "html", null, true);
        echo "\" alt=\"logo payement visa cb mastercard\" class=\"payment\">
                  <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/paymentlogo_paypal.png"), "html", null, true);
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

    // line 181
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
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
        return array (  424 => 181,  355 => 121,  351 => 120,  324 => 98,  313 => 90,  300 => 82,  287 => 74,  277 => 67,  262 => 62,  245 => 60,  227 => 57,  209 => 23,  191 => 21,  175 => 184,  171 => 182,  169 => 181,  166 => 180,  164 => 62,  161 => 61,  159 => 60,  155 => 58,  153 => 57,  142 => 49,  139 => 48,  132 => 47,  125 => 46,  116 => 43,  109 => 42,  100 => 41,  97 => 40,  95 => 39,  83 => 30,  73 => 23,  70 => 22,  68 => 21,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  42 => 10,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <!--asset CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset('css/general.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/ShoppingCar.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/caroussel.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/retails.css') }}\" />

    <!-- Font Awsome -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\" integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">

    {% block stylesheets %} {% endblock %}

    <title>{% block title %}Home page Remmy{% endblock %}</title>
  </head>

  <body>

      <div class=\"container bg-light\">
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
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
  </body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\base.html.twig");
    }
}
