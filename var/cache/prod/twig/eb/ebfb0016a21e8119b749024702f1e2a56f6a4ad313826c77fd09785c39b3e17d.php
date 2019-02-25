<?php

/* @RemmyBackOffice/Default/index-back.html.twig */
class __TwigTemplate_d0dd024143d7007c72ab19ba6dc467b0df95a2d7d282609e3e2e2baa29ae07dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("back-office.html.twig", "@RemmyBackOffice/Default/index-back.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

<p>Products list</p>

<div class=\"container\">
<div class=\"row\">
    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
        <div class=\"info-box blue-bg\">
            <div class=\"title\">Customer</div>
        </div>
    </div>
    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
        <div class=\"info-box brown-bg\">
            <div class=\"title\">Order</div>
        </div>
    </div>
    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
        <div class=\"info-box dark-bg\">
            <div class=\"title\">Stock</div>
        </div>
    </div>
</div>
</div>


    <!--sidebar start-->
    <aside>
      <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\">
          <li class=\"active\">
            <a class=\"\" href=\"index.html\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\" class=\"\">
                          <i class=\"icon_document_alt\"></i>
                          <span>Forms</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
            <ul class=\"sub\">
              <li><a class=\"\" href=\"form_component.html\">Form Elements</a></li>
              <li><a class=\"\" href=\"form_validation.html\">Form Validation</a></li>
            </ul>
          </li>
          <li class=\"sub-menu\">
            <a href=\"javascript:;\" class=\"\">
                          <i class=\"icon_desktop\"></i>
                          <span>UI Fitures</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
            <ul class=\"sub\">
              <li><a class=\"\" href=\"general.html\">Components</a></li>
              <li><a class=\"\" href=\"buttons.html\">Buttons</a></li>
              <li><a class=\"\" href=\"grids.html\">Grids</a></li>
            </ul>
          </li>
          <li>
            <a class=\"\" href=\"widgets.html\">
                          <i class=\"icon_genius\"></i>
                          <span>Widgets</span>
                      </a>
          </li>
          <li>
            <a class=\"\" href=\"chart-chartjs.html\">
                          <i class=\"icon_piechart\"></i>
                          <span>Charts</span>

                      </a>

          </li>

          <li class=\"sub-menu\">
            <a href=\"javascript:;\" class=\"\">
                          <i class=\"icon_table\"></i>
                          <span>Tables</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
            <ul class=\"sub\">
              <li><a class=\"\" href=\"basic_table.html\">Basic Table</a></li>
            </ul>
          </li>

          <li class=\"sub-menu\">
            <a href=\"javascript:;\" class=\"\">
                          <i class=\"icon_documents_alt\"></i>
                          <span>Pages</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
            <ul class=\"sub\">
              <li><a class=\"\" href=\"profile.html\">Profile</a></li>
              <li><a class=\"\" href=\"login.html\"><span>Login Page</span></a></li>
              <li><a class=\"\" href=\"contact.html\"><span>Contact Page</span></a></li>
              <li><a class=\"\" href=\"blank.html\">Blank Page</a></li>
              <li><a class=\"\" href=\"404.html\">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id=\"main-content\">
      <section class=\"wrapper\">
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <h3 class=\"page-header\"><i class=\"fa fa-files-o\"></i> Form Validation</h3>
            <ol class=\"breadcrumb\">
              <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
              <li><i class=\"icon_document_alt\"></i>Forms</li>
              <li><i class=\"fa fa-files-o\"></i>Form Validation</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class=\"row\">
          <div class=\"col-lg-12\">
            <section class=\"panel\">
              <header class=\"panel-heading\">
                Form validations
              </header>
              <div class=\"panel-body\">
                <div class=\"form\">
                  <form class=\"form-validate form-horizontal\" id=\"feedback_form\" method=\"get\" action=\"\">
                    <div class=\"form-group \">
                      <label for=\"cname\" class=\"control-label col-lg-2\">Full Name <span class=\"required\">*</span></label>
                      <div class=\"col-lg-10\">
                        <input class=\"form-control\" id=\"cname\" name=\"fullname\" minlength=\"5\" type=\"text\" required />
                      </div>
                    </div>
                    <div class=\"form-group \">
                      <label for=\"cemail\" class=\"control-label col-lg-2\">E-Mail <span class=\"required\">*</span></label>
                      <div class=\"col-lg-10\">
                        <input class=\"form-control \" id=\"cemail\" type=\"email\" name=\"email\" required />
                      </div>
                    </div>
                    <div class=\"form-group \">
                      <label for=\"curl\" class=\"control-label col-lg-2\">Website</label>
                      <div class=\"col-lg-10\">
                        <input class=\"form-control \" id=\"curl\" type=\"url\" name=\"url\" />
                      </div>
                    </div>
                    <div class=\"form-group \">
                      <label for=\"cname\" class=\"control-label col-lg-2\">Subject <span class=\"required\">*</span></label>
                      <div class=\"col-lg-10\">
                        <input class=\"form-control\" id=\"subject\" name=\"subject\" minlength=\"5\" type=\"text\" required />
                      </div>
                    </div>
                    <div class=\"form-group \">
                      <label for=\"ccomment\" class=\"control-label col-lg-2\">Feedback</label>
                      <div class=\"col-lg-10\">
                        <textarea class=\"form-control \" id=\"ccomment\" name=\"comment\" required></textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <div class=\"col-lg-offset-2 col-lg-10\">
                        <button class=\"btn btn-primary\" type=\"submit\">Save</button>
                        <button class=\"btn btn-default\" type=\"button\">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class=\"text-right\">
      <div class=\"credits\">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
        </div>
    </div>
  </section>    

";
    }

    public function getTemplateName()
    {
        return "@RemmyBackOffice/Default/index-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@RemmyBackOffice/Default/index-back.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\src\\Remmy\\BackOfficeBundle\\Resources\\views\\Default\\index-back.html.twig");
    }
}
