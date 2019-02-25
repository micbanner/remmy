<?php

/* admin-base.html.twig */
class __TwigTemplate_512be14b0914f5c53f7f1a65c3f644f4dd8ce321ac122a6303e424f027e40323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("back-office.html.twig", "admin-base.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<p>PAGE ADMIN</p><br><br><br>

    <!-- Side Navbar -->
    <nav class=\"side-navbar\">
            <div class=\"side-navbar-wrapper\">
              <!-- Sidebar Header    -->
              <div class=\"sidenav-header d-flex align-items-center justify-content-center\">
                <!-- User Info-->
                <div class=\"sidenav-header-inner text-center\"><img src=\"img/avatar-7.jpg\" alt=\"person\" class=\"img-fluid rounded-circle\">
                  <h2 class=\"h5\">Nathan Andrews</h2><span>Web Developer</span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class=\"sidenav-header-logo\"><a href=\"index.html\" class=\"brand-small text-center\"> <strong>B</strong><strong class=\"text-primary\">D</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class=\"main-menu\">
                <h5 class=\"sidenav-heading\"><a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">DASHBOARD</a></h5><hr>
                <h5 class=\"sidenav-heading\">User <div class=\"badge badge-warning\">6 New</div></h5>
                <ul id=\"side-main-menu\" class=\"side-menu list-unstyled\">
                  <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_index");
        echo "\">All</a></li>
                </ul>
              </div>
              <div class=\"admin-menu\">
                <h5 class=\"sidenav-heading\">PRODUCT</h5>
                <ul id=\"side-admin-menu\" class=\"side-menu list-unstyled\"> 
                  <li> <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_index");
        echo "\"> <i class=\"icon-screen\"> </i>All</a></li>
                  <li> <a href=\"#\">CATEGORY</a></li>
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
        <div class=\"navbar-header\"><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_admin");
        echo "\"  class=\"navbar-brand\">
            <div class=\"brand-text d-none d-md-inline-block\"><strong class=\"text-info\">REMMY BACK OFFICE</strong></div></a></div>
        <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
            <li class=\"nav-item\"></li>
            
            <!-- return home page    -->
            <li class=\"nav-item\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline-block\">Home page</span><i class=\"fa fa-sign-out\"></i></a></li>
            <!-- Log out-->
            <li class=\"nav-item\"><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"nav-link logout\"> <span class=\"d-none d-sm-inline-block\">Logout</span><i class=\"fa fa-sign-out\"></i></a></li>
        </ul>
        </div>
    </div>
    </nav>
</header>

";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "
</div>
";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        echo "   ";
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
        return array (  123 => 68,  117 => 69,  115 => 68,  105 => 61,  100 => 59,  91 => 53,  66 => 31,  57 => 25,  51 => 22,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin-base.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\views\\admin-base.html.twig");
    }
}
