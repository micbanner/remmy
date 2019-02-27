<?php

/* admin-base.html.twig */
class __TwigTemplate_19877b68ee4abfb21a98d2f86c72e3efef38e4acbaa4415c734b48a63168bb45 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("back-office.html.twig", "admin-base.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "back-office.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin-base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin-base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <!-- Side Navbar -->
    <nav class=\"side-navbar\">
            <div class=\"side-navbar-wrapper\">
              <!-- Sidebar Header    -->
              <div class=\"sidenav-header d-flex align-items-center justify-content-center\">
                <!-- User Info-->
                <div class=\"sidenav-header-inner text-center\">REMMY
                  <h2 class=\"h5\">Admin</h2>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class=\"sidenav-header-logo\"><a href=\"index.html\" class=\"brand-small text-center\"> <strong>B</strong><strong class=\"text-primary\">D</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class=\"main-menu\">
                <h5 class=\"sidenav-heading\"><a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_office_admin");
        echo "\">DASHBOARD</a></h5><hr>
                <h5 class=\"sidenav-heading\">User<div class=\"badge badge-warning\">6 New</div></h5>
                <ul id=\"side-main-menu\" class=\"side-menu list-unstyled\">
                  <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\"><i class=\"fas fa-ellipsis-v\"></i>All Users</a></li>
                </ul>
              </div>
              <div class=\"admin-menu\">
                <h5 class=\"sidenav-heading\">Product</h5>
                <ul id=\"side-admin-menu\" class=\"side-menu list-unstyled\"> 
                  <li> <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\"><i class=\"fas fa-list-ul\"></i>All Items</a></li>
                  <li><a href=\"#collapse_product\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"far fa-arrow-alt-circle-down\"></i>Items<div class=\"badge badge-info\">Item</div></a>
                    <ul id=\"collapse_product\" class=\"collapse\">
                      <li><a href=\"#\">Page</a></li>
                      <li><a href=\"#\">Page</a></li>
                      <li><a href=\"#\">Page</a></li>
                    </ul>
                  </li>
                  <li> <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\"><i class=\"fas fa-ellipsis-v\"></i>Category</a></li>
                  <li> <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("color_index");
        echo "\"><i class=\"fas fa-ellipsis-v\"></i>Color</a></li>
                  <li> <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("size_index");
        echo "\"><i class=\"fas fa-ellipsis-v\"></i>Size</a></li>
                  <li> <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stockproduct_index");
        echo "\"><i class=\"fas fa-ellipsis-v\"></i>Stock</a></li>
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
            <div class=\"brand-text d-none d-md-inline-block\"><strong class=\"text-success navbar-brand\"> BACK OFFICE</strong></div>
        </div>
        <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
            <li class=\"nav-item\"></li>
            
            <!-- return home page    -->
            <li class=\"nav-item\"><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline-block\">Home page</span><i class=\"fa fa-sign-out\"></i></a></li>
            <!-- Log out-->
            <li class=\"nav-item\"><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
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
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 131,  211 => 132,  209 => 131,  137 => 62,  132 => 60,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  86 => 29,  77 => 23,  71 => 20,  54 => 5,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'back-office.html.twig' %}


{% block content %}

    <!-- Side Navbar -->
    <nav class=\"side-navbar\">
            <div class=\"side-navbar-wrapper\">
              <!-- Sidebar Header    -->
              <div class=\"sidenav-header d-flex align-items-center justify-content-center\">
                <!-- User Info-->
                <div class=\"sidenav-header-inner text-center\">REMMY
                  <h2 class=\"h5\">Admin</h2>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class=\"sidenav-header-logo\"><a href=\"index.html\" class=\"brand-small text-center\"> <strong>B</strong><strong class=\"text-primary\">D</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class=\"main-menu\">
                <h5 class=\"sidenav-heading\"><a class=\"navbar-brand\" href=\"{{ path('back_office_admin') }}\">DASHBOARD</a></h5><hr>
                <h5 class=\"sidenav-heading\">User<div class=\"badge badge-warning\">6 New</div></h5>
                <ul id=\"side-main-menu\" class=\"side-menu list-unstyled\">
                  <li><a href=\"{{ path('admin_user_index') }}\"><i class=\"fas fa-ellipsis-v\"></i>All Users</a></li>
                </ul>
              </div>
              <div class=\"admin-menu\">
                <h5 class=\"sidenav-heading\">Product</h5>
                <ul id=\"side-admin-menu\" class=\"side-menu list-unstyled\"> 
                  <li> <a href=\"{{ path('product_index') }}\"><i class=\"fas fa-list-ul\"></i>All Items</a></li>
                  <li><a href=\"#collapse_product\" aria-expanded=\"false\" data-toggle=\"collapse\"><i class=\"far fa-arrow-alt-circle-down\"></i>Items<div class=\"badge badge-info\">Item</div></a>
                    <ul id=\"collapse_product\" class=\"collapse\">
                      <li><a href=\"#\">Page</a></li>
                      <li><a href=\"#\">Page</a></li>
                      <li><a href=\"#\">Page</a></li>
                    </ul>
                  </li>
                  <li> <a href=\"{{ path('category_index') }}\"><i class=\"fas fa-ellipsis-v\"></i>Category</a></li>
                  <li> <a href=\"{{ path('color_index') }}\"><i class=\"fas fa-ellipsis-v\"></i>Color</a></li>
                  <li> <a href=\"{{ path('size_index') }}\"><i class=\"fas fa-ellipsis-v\"></i>Size</a></li>
                  <li> <a href=\"{{ path('stockproduct_index') }}\"><i class=\"fas fa-ellipsis-v\"></i>Stock</a></li>
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
            <div class=\"brand-text d-none d-md-inline-block\"><strong class=\"text-success navbar-brand\"> BACK OFFICE</strong></div>
        </div>
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
{% endblock %}", "admin-base.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\admin-base.html.twig");
    }
}
