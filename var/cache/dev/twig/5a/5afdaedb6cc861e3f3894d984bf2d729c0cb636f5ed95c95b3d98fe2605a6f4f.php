<?php

/* @RemmyBackOffice/AdminOffice/admin.html.twig */
class __TwigTemplate_59ddbf9aa45835d5818a9f736776a6d12ac5e6b3dd88dab814a4902cc7083768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("back-office.html.twig", "@RemmyBackOffice/AdminOffice/admin.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "back-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyBackOffice/AdminOffice/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RemmyBackOffice/AdminOffice/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
<p>PAGE ADMIN</p><br><br><br>

    <!-- Side Navbar -->
    <nav class=\"side-navbar\">
            <div class=\"side-navbar-wrapper\">
              <!-- Sidebar Header    -->
              <div class=\"sidenav-header d-flex align-items-center justify-content-center\">
                <!-- User Info-->
                <div class=\"sidenav-header-inner text-center\">connexion
                  <h2 class=\"h5\">ADMIN</h2>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class=\"sidenav-header-logo\"><a href=\"index.html\" class=\"brand-small text-center\"> <strong>B</strong><strong class=\"text-primary\">D</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class=\"main-menu\">
                <h5 class=\"sidenav-heading\"><a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_admin");
        echo "\">DASHBOARD</a></h5><hr>
                <h5 class=\"sidenav-heading\">User<div class=\"badge badge-warning\">6 New</div></h5>
                <ul id=\"side-main-menu\" class=\"side-menu list-unstyled\">
                  <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_index");
        echo "\">All</a></li>
                </ul>
              </div>
              <div class=\"admin-menu\">
                <h5 class=\"sidenav-heading\">Product</h5>
                <ul id=\"side-admin-menu\" class=\"side-menu list-unstyled\"> 
                  <li> <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\"> <i class=\"icon-screen\"> </i>All</a></li>  
                  <li> <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Category</a></li>
                  <li> <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">product Retail</a></li>
                  <li> <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("color_index");
        echo "\">Color</a></li>
                  <li> <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("size_index");
        echo "\">Size</a></li>
                  <li> <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stockproduct_index");
        echo "\">Stock</a></li>
                  <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"icon-interface-windows\"></i>Liste <div class=\"badge badge-info\">Item</div></a>
                    <ul id=\"exampledropdownDropdown\" class=\"collapse\">
                      <li><a href=\"#\">Page</a></li>
                      <li><a href=\"#\">Page</a></li>
                      <li><a href=\"#\">Page</a></li>
                    </ul>
                  </li>
                  <li> <a href=\"#\"> <i class=\"icon-flask\"> </i>Product</a></li>
                </ul>
              </div>  
            </div>
          </nav>
          
<div class=\"page\">
    
<!-- navbar-->
<header class=\"header\">
    <nav class=\"navbar\">
    <div class=\"container-fluid\">
        <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
        <div class=\"navbar-header\">
            <div class=\"brand-text d-none d-md-inline-block\"><strong class=\"text-info navbar-brand\">REMMY BACK OFFICE</strong></div></a></div>
        <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
            <li class=\"nav-item\"></li>
            
            <!-- return home page    -->
            <li class=\"nav-item\"><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline-block\">Home page</span><i class=\"fa fa-sign-out\"></i></a></li>
            <!-- Log out-->
            <li class=\"nav-item\"><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline-block\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
        </ul>
        </div>
    </div>
    </nav>
</header>

<!-- Counts Section -->
<section class=\"dashboard-counts section-padding\">
    <div class=\"container-fluid\">
      <div class=\"row\">
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-user\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">CUSTOMERS</strong><span>Last 7 days</span>
              <div class=\"count-number\">25</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-padnote\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">ORDERS</strong><span>Last 5 days</span>
              <div class=\"count-number\">400</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-check\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">OPEN CASE</strong><span>Last 2 months</span>
              <div class=\"count-number\">342</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-bill\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">IN TRANSIT</strong><span>Last 2 days</span>
              <div class=\"count-number\">123</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-list\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">DELIVERY CLOSE</strong><span>Last 3 months</span>
              <div class=\"count-number\">92</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-list-1\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">STOCK</strong><span>Last 7 days</span>
              <div class=\"count-number\">70</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

";
        // line 134
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@RemmyBackOffice/AdminOffice/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 134,  213 => 135,  211 => 134,  139 => 65,  134 => 63,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  75 => 25,  69 => 22,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'back-office.html.twig' %}


{% block content %}

<p>PAGE ADMIN</p><br><br><br>

    <!-- Side Navbar -->
    <nav class=\"side-navbar\">
            <div class=\"side-navbar-wrapper\">
              <!-- Sidebar Header    -->
              <div class=\"sidenav-header d-flex align-items-center justify-content-center\">
                <!-- User Info-->
                <div class=\"sidenav-header-inner text-center\">connexion
                  <h2 class=\"h5\">ADMIN</h2>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class=\"sidenav-header-logo\"><a href=\"index.html\" class=\"brand-small text-center\"> <strong>B</strong><strong class=\"text-primary\">D</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class=\"main-menu\">
                <h5 class=\"sidenav-heading\"><a class=\"navbar-brand\" href=\"{{ path('back_office_admin') }}\">DASHBOARD</a></h5><hr>
                <h5 class=\"sidenav-heading\">User<div class=\"badge badge-warning\">6 New</div></h5>
                <ul id=\"side-main-menu\" class=\"side-menu list-unstyled\">
                  <li><a href=\"{{ path('admin_user_index') }}\">All</a></li>
                </ul>
              </div>
              <div class=\"admin-menu\">
                <h5 class=\"sidenav-heading\">Product</h5>
                <ul id=\"side-admin-menu\" class=\"side-menu list-unstyled\"> 
                  <li> <a href=\"{{ path('product_index') }}\"> <i class=\"icon-screen\"> </i>All</a></li>  
                  <li> <a href=\"{{ path('category_index') }}\">Category</a></li>
                  <li> <a href=\"{{ path('product_index') }}\">product Retail</a></li>
                  <li> <a href=\"{{ path('color_index') }}\">Color</a></li>
                  <li> <a href=\"{{ path('size_index') }}\">Size</a></li>
                  <li> <a href=\"{{ path('stockproduct_index') }}\">Stock</a></li>
                  <li><a href=\"#exampledropdownDropdown\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"icon-interface-windows\"></i>Liste <div class=\"badge badge-info\">Item</div></a>
                    <ul id=\"exampledropdownDropdown\" class=\"collapse\">
                      <li><a href=\"#\">Page</a></li>
                      <li><a href=\"#\">Page</a></li>
                      <li><a href=\"#\">Page</a></li>
                    </ul>
                  </li>
                  <li> <a href=\"#\"> <i class=\"icon-flask\"> </i>Product</a></li>
                </ul>
              </div>  
            </div>
          </nav>
          
<div class=\"page\">
    
<!-- navbar-->
<header class=\"header\">
    <nav class=\"navbar\">
    <div class=\"container-fluid\">
        <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
        <div class=\"navbar-header\">
            <div class=\"brand-text d-none d-md-inline-block\"><strong class=\"text-info navbar-brand\">REMMY BACK OFFICE</strong></div></a></div>
        <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
            <li class=\"nav-item\"></li>
            
            <!-- return home page    -->
            <li class=\"nav-item\"><a href=\"{{ path('homepage') }}\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline-block\">Home page</span><i class=\"fa fa-sign-out\"></i></a></li>
            <!-- Log out-->
            <li class=\"nav-item\"><a href=\"{{ path('fos_user_security_logout') }}\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline-block\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
        </ul>
        </div>
    </div>
    </nav>
</header>

<!-- Counts Section -->
<section class=\"dashboard-counts section-padding\">
    <div class=\"container-fluid\">
      <div class=\"row\">
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-user\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">CUSTOMERS</strong><span>Last 7 days</span>
              <div class=\"count-number\">25</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-padnote\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">ORDERS</strong><span>Last 5 days</span>
              <div class=\"count-number\">400</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-check\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">OPEN CASE</strong><span>Last 2 months</span>
              <div class=\"count-number\">342</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-bill\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">IN TRANSIT</strong><span>Last 2 days</span>
              <div class=\"count-number\">123</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-list\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">DELIVERY CLOSE</strong><span>Last 3 months</span>
              <div class=\"count-number\">92</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class=\"col-xl-2 col-md-4 col-6\">
          <div class=\"wrapper count-title d-flex\">
            <div class=\"icon\"><i class=\"icon-list-1\"></i></div>
            <div class=\"name\"><strong class=\"text-uppercase\">STOCK</strong><span>Last 7 days</span>
              <div class=\"count-number\">70</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

{% block body %}   {% endblock %}

</div>
{% endblock %}", "@RemmyBackOffice/AdminOffice/admin.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\BackOfficeBundle\\Resources\\views\\AdminOffice\\admin.html.twig");
    }
}
