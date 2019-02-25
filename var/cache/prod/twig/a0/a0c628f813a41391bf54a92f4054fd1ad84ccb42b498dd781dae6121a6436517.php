<?php

/* base.html.twig */
class __TwigTemplate_e8957d13ec6fa9948c1fa2e35f91df4d77dff3774365e77f4d5cfd83e6d15312 extends Twig_Template
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

      <div class=\"container bg-light\">
        <nav class=\"navbar navbar-expand-md \">
                <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">REMMY</a>
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarsExampleDefault\">

            
                    <form class=\"form-inline my-2 my-lg-0\">
                            ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 39
            echo "
                            ";
            // line 40
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                echo "<a class=\" btn-sm ml-3\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_admin");
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>
                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 41
                echo "<a class=\"btn-sm ml-3\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.profile", array(), "FOSUserBundle"), "html", null, true);
                echo "</a>";
            }
            // line 42
            echo "                            <a class=\"btn-sm ml-3\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            
                            ";
        } else {
            // line 45
            echo "                                    <a class=\" btn-sm ml-3\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                    <a class=\" btn-sm ml-3\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 47
        echo "                    
                                    <a class=\"btn-sm ml-3\" href=\"\"><i class=\"fa fa-shopping-cart\"></span></i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.shopping_card", array(), "FOSUserBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/caroussel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
        echo "Home page Remmy";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 59
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        echo "<!-- Footer -->
    <footer class=\"page-footer font-small mt-5\">
    
            <!-- Footer Links -->
            <div class=\"container-fluid foot-base\">
                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/win.png"), "html", null, true);
        echo "\" class=\"foot-bandeau\" alt=\"fond-footer\">        
              <!-- Grid row-->
              <div class=\"row text-center d-flex justify-content-center pt-5 mb-3\">
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase text-white\">
                    <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aboutPage");
        echo "\">About us</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase text-white\">
                    <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cgvPage");
        echo "\">Conditions General</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase\">
                    <a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactPage");
        echo "\">Site Map</a>
                  </h6>
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class=\"col-md-2 mb-3\">
                  <h6 class=\"text-uppercase\">
                    <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sitemapPage");
        echo "\">contact</a>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/payplug.png"), "html", null, true);
        echo "\" alt=\"logo payement visa cb mastercard\" class=\"payment\">
                  <img src=\"";
        // line 120
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
    }

    // line 180
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  342 => 180,  279 => 120,  275 => 119,  250 => 97,  239 => 89,  228 => 81,  217 => 73,  207 => 66,  198 => 61,  193 => 59,  187 => 56,  181 => 22,  175 => 20,  165 => 183,  161 => 181,  159 => 180,  156 => 179,  154 => 61,  151 => 60,  149 => 59,  145 => 57,  143 => 56,  132 => 48,  129 => 47,  122 => 46,  115 => 45,  106 => 42,  99 => 41,  90 => 40,  87 => 39,  85 => 38,  73 => 29,  63 => 22,  60 => 21,  58 => 20,  50 => 15,  46 => 14,  42 => 13,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\base.html.twig");
    }
}
