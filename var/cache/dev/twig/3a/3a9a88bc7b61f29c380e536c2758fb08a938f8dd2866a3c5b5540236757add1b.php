<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_7d0de1ba9d76ddcdabded534735ebe59208ce3681ab6b5a5fdf74420d9c8dcab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div id=\"user-profile-2\" class=\"user-profile\">
    <!--onglets-->
    <div class=\"tabbable\">
        <ul class=\"nav nav-tabs padding-18 \">
            <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#home\">
                    <i class=\"green ace-icon fa fa-user bigger-120\"></i>
                    Profile
                </a>
            </li>

            <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#feed\">
                        <i class=\"orange ace-icon fas fa-shopping-bag bigger-120\"></i>
                    order
                </a>
            </li>

            <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#friends\">
                        <i class=\"blue ace-icon fas fa-comment-alt bigger-120\"></i>
                    Comment
                </a>
            </li>

            <li>
                <a data-toggle=\"tab\" href=\"#pictures\">
                    <i class=\"pink ace-icon fa fa-picture-o bigger-120\"></i>
                    Pictures
                </a>
            </li>
        </ul>
        <!--col img -update-->
        <div class=\"tab-content no-border padding-24\">
            <div id=\"home\" class=\"tab-pane in active\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-2 center space-top \">
                            <div>
                                <h4 class=\"blue\">
                                    <span class=\"middle\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
                                </h4>
                            </div>
                        <!--picture-->
                        <span class=\"profile-picture sz-blk\">
                            <img class=\"editable img-responsive sz-img\" alt=\" Avatar\" id=\"avatar2\" src=\"http://bootdey.com/img/Content/avatar/avatar6.png\">
                        </span>

                        <div class=\"space space-4\"></div>

                        <a href=\"#\" class=\"btn btn-sm  btn-dark\">
                            <i class=\"ace-icon fa fa-plus-circle bigger-120\"></i>
                            <span class=\"bigger-110\"> update picture</span>
                        </a>

                    </div>

            <!-- /.col informations-->
                    <div class=\"col-xs-12 col-sm-5\">

                        <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-sm btn-primary\">
                            <i class=\"ace-icon fa fa-envelope-o bigger-110\"></i>
                            <span class=\"bigger-110\">Modifier profil</span>
                        </a>

                        <div class=\"profile-user-info\">
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.lastname", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>

                                <div class=\"profile-info-value\">
                                    <span>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>

                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.firstname", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>

                                <div class=\"profile-info-value\">
                                    <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>

                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\"> email</div>

                                <div class=\"profile-info-value\">
                                    <span>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span>
                                </div>
                            </div>

                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.change_password", array(), "FOSUserBundle"), "html", null, true);
        echo " </div>

                                <div class=\"profile-info-value\">
                                        <div class=\"profile-info-name\"><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" name=\"rest-pass\"> password </a></div>
                                </div>
                            </div>

                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.last_login", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>

                                <div class=\"profile-info-value\">
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class=\"hr hr-8 dotted\"></div>


                    </div><!-- /.col -->
                    <div class=\"col-xs-12 col-sm-5\">
                        
                    </div>
                </div><!-- /.row -->

                
            </div>
            
            <!-- /#home -->

            <div id=\"feed\" class=\"tab-pane\">
                <div class=\"profile-feed row\">
                    <div class=\"col-sm-6\">
                            <div class=\"profile-user-info\">
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> firstname </div>
        
                                        <div class=\"profile-info-value\">
                                            <span>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> lastname</div>
        
                                        <div class=\"profile-info-value\">
                                            <span>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> email</div>
        
                                        <div class=\"profile-info-value\">
                                            <span>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\">change password </div>
        
                                        <div class=\"profile-info-value\">
                                                <div class=\"profile-info-name\"><a href=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\" name=\"rest-pass\"> password </a></div>
                                        </div>
                                    </div>
        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Last Online </div>
        
                                        <div class=\"profile-info-value\">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                    </div><!-- /.col -->

                    <div class=\"col-sm-6\">
                        <div class=\"profile-activity clearfix\">


                            <div class=\"tools action-buttons\">
                                <a href=\"#\" class=\"blue\">
                                    <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
                                </a>

                                <a href=\"#\" class=\"red\">
                                    <i class=\"ace-icon fa fa-times bigger-125\"></i>
                                </a>
                            </div>
                        </div>





                    </div><!-- /.col -->
                </div><!-- /.row -->

                <div class=\"space-12\"></div>

                <div class=\"center\">
                    <button type=\"button\" class=\"btn btn-sm btn-primary btn-white btn-round\">
                        <i class=\"ace-icon fa fa-rss bigger-150 middle orange2\"></i>
                        <span class=\"bigger-110\">View more activities</span>

                        <i class=\"icon-on-right ace-icon fa fa-arrow-right\"></i>
                    </button>
                </div>
            </div><!-- /#feed -->

            <div id=\"friends\" class=\"tab-pane\">
                <div class=\"profile-users clearfix\">
                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Bob Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-online\"></span>
                                        Bob Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Content Editor</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 orange\"></i>
                                        <span class=\"green\"> 20 mins ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"Rose Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-offline\"></span>
                                        Rose Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Graphic Designer</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 grey\"></i>
                                        <span class=\"grey\"> 30 min ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar2.png\" alt=\"Jim Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-busy\"></span>
                                        Jim Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">SEO &amp; Advertising</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 red\"></i>
                                        <span class=\"grey\"> 1 hour ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Alex Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-idle\"></span>
                                        Alex Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Marketing</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 orange\"></i>
                                        <span class=\"\"> 40 minutes idle </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar4.png\" alt=\"Phil Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-online\"></span>
                                        Phil Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Public Relations</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 orange\"></i>
                                        <span class=\"green\"> 2 hours ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Susan Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-online\"></span>
                                        Susan Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">HR Management</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 orange\"></i>
                                        <span class=\"green\"> 20 mins ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"Jennifer Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-offline\"></span>
                                        Jennifer Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Graphic Designer</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 grey\"></i>
                                        <span class=\"grey\"> 2 hours ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar2.png\" alt=\"Alexa Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-offline\"></span>
                                        Alexa Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Accounting</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 grey\"></i>
                                        <span class=\"grey\"> 4 hours ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"hr hr10 hr-double\"></div>

                <ul class=\"pager pull-right\">
                    <li class=\"previous disabled\">
                        <a href=\"#\">← Prev</a>
                    </li>

                    <li class=\"next\">
                        <a href=\"#\">Next →</a>
                    </li>
                </ul>
            </div><!-- /#friends -->

            <div id=\"pictures\" class=\"tab-pane\">
                <ul class=\"ace-thumbnails\">
                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/1/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/2/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/3/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/4/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/5/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/6/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/7/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/1/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div><!-- /#pictures -->
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 155,  208 => 147,  197 => 139,  186 => 131,  153 => 101,  145 => 96,  139 => 93,  131 => 88,  120 => 80,  114 => 77,  106 => 72,  100 => 69,  90 => 62,  67 => 42,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div id=\"user-profile-2\" class=\"user-profile\">
    <!--onglets-->
    <div class=\"tabbable\">
        <ul class=\"nav nav-tabs padding-18 \">
            <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#home\">
                    <i class=\"green ace-icon fa fa-user bigger-120\"></i>
                    Profile
                </a>
            </li>

            <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#feed\">
                        <i class=\"orange ace-icon fas fa-shopping-bag bigger-120\"></i>
                    order
                </a>
            </li>

            <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#friends\">
                        <i class=\"blue ace-icon fas fa-comment-alt bigger-120\"></i>
                    Comment
                </a>
            </li>

            <li>
                <a data-toggle=\"tab\" href=\"#pictures\">
                    <i class=\"pink ace-icon fa fa-picture-o bigger-120\"></i>
                    Pictures
                </a>
            </li>
        </ul>
        <!--col img -update-->
        <div class=\"tab-content no-border padding-24\">
            <div id=\"home\" class=\"tab-pane in active\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-2 center space-top \">
                            <div>
                                <h4 class=\"blue\">
                                    <span class=\"middle\">{{ user.username }}</span>
                                </h4>
                            </div>
                        <!--picture-->
                        <span class=\"profile-picture sz-blk\">
                            <img class=\"editable img-responsive sz-img\" alt=\" Avatar\" id=\"avatar2\" src=\"http://bootdey.com/img/Content/avatar/avatar6.png\">
                        </span>

                        <div class=\"space space-4\"></div>

                        <a href=\"#\" class=\"btn btn-sm  btn-dark\">
                            <i class=\"ace-icon fa fa-plus-circle bigger-120\"></i>
                            <span class=\"bigger-110\"> update picture</span>
                        </a>

                    </div>

            <!-- /.col informations-->
                    <div class=\"col-xs-12 col-sm-5\">

                        <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-sm btn-primary\">
                            <i class=\"ace-icon fa fa-envelope-o bigger-110\"></i>
                            <span class=\"bigger-110\">Modifier profil</span>
                        </a>

                        <div class=\"profile-user-info\">
                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">{{ 'profile.show.lastname'|trans({}, 'FOSUserBundle') }}</div>

                                <div class=\"profile-info-value\">
                                    <span>{{ user.lastname }}</span>
                                </div>
                            </div>

                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">{{ 'profile.show.firstname'|trans({}, 'FOSUserBundle') }}</div>

                                <div class=\"profile-info-value\">
                                    <span>{{ user.firstname }}</span>
                                </div>
                            </div>

                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\"> email</div>

                                <div class=\"profile-info-value\">
                                    <span>{{ user.email }}</span>
                                </div>
                            </div>

                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">{{ 'profile.show.change_password'|trans({}, 'FOSUserBundle') }} </div>

                                <div class=\"profile-info-value\">
                                        <div class=\"profile-info-name\"><a href=\"{{ path('fos_user_change_password') }}\" name=\"rest-pass\"> password </a></div>
                                </div>
                            </div>

                            <div class=\"profile-info-row\">
                                <div class=\"profile-info-name\">{{ 'profile.show.last_login'|trans({}, 'FOSUserBundle') }}</div>

                                <div class=\"profile-info-value\">
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class=\"hr hr-8 dotted\"></div>


                    </div><!-- /.col -->
                    <div class=\"col-xs-12 col-sm-5\">
                        
                    </div>
                </div><!-- /.row -->

                
            </div>
            
            <!-- /#home -->

            <div id=\"feed\" class=\"tab-pane\">
                <div class=\"profile-feed row\">
                    <div class=\"col-sm-6\">
                            <div class=\"profile-user-info\">
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> firstname </div>
        
                                        <div class=\"profile-info-value\">
                                            <span>{{ user.firstname }}</span>
                                        </div>
                                    </div>
        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> lastname</div>
        
                                        <div class=\"profile-info-value\">
                                            <span>{{ user.lastname }}</span>
                                        </div>
                                    </div>
        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> email</div>
        
                                        <div class=\"profile-info-value\">
                                            <span>{{ user.email }}</span>
                                        </div>
                                    </div>
        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\">change password </div>
        
                                        <div class=\"profile-info-value\">
                                                <div class=\"profile-info-name\"><a href=\"{{ path('fos_user_change_password') }}\" name=\"rest-pass\"> password </a></div>
                                        </div>
                                    </div>
        
                                    <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> Last Online </div>
        
                                        <div class=\"profile-info-value\">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                    </div><!-- /.col -->

                    <div class=\"col-sm-6\">
                        <div class=\"profile-activity clearfix\">


                            <div class=\"tools action-buttons\">
                                <a href=\"#\" class=\"blue\">
                                    <i class=\"ace-icon fa fa-pencil bigger-125\"></i>
                                </a>

                                <a href=\"#\" class=\"red\">
                                    <i class=\"ace-icon fa fa-times bigger-125\"></i>
                                </a>
                            </div>
                        </div>





                    </div><!-- /.col -->
                </div><!-- /.row -->

                <div class=\"space-12\"></div>

                <div class=\"center\">
                    <button type=\"button\" class=\"btn btn-sm btn-primary btn-white btn-round\">
                        <i class=\"ace-icon fa fa-rss bigger-150 middle orange2\"></i>
                        <span class=\"bigger-110\">View more activities</span>

                        <i class=\"icon-on-right ace-icon fa fa-arrow-right\"></i>
                    </button>
                </div>
            </div><!-- /#feed -->

            <div id=\"friends\" class=\"tab-pane\">
                <div class=\"profile-users clearfix\">
                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Bob Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-online\"></span>
                                        Bob Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Content Editor</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 orange\"></i>
                                        <span class=\"green\"> 20 mins ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"Rose Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-offline\"></span>
                                        Rose Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Graphic Designer</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 grey\"></i>
                                        <span class=\"grey\"> 30 min ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar2.png\" alt=\"Jim Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-busy\"></span>
                                        Jim Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">SEO &amp; Advertising</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 red\"></i>
                                        <span class=\"grey\"> 1 hour ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar3.png\" alt=\"Alex Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-idle\"></span>
                                        Alex Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Marketing</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 orange\"></i>
                                        <span class=\"\"> 40 minutes idle </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar4.png\" alt=\"Phil Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-online\"></span>
                                        Phil Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Public Relations</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 orange\"></i>
                                        <span class=\"green\"> 2 hours ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Susan Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-online\"></span>
                                        Susan Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">HR Management</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 orange\"></i>
                                        <span class=\"green\"> 20 mins ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar1.png\" alt=\"Jennifer Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-offline\"></span>
                                        Jennifer Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Graphic Designer</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 grey\"></i>
                                        <span class=\"grey\"> 2 hours ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"itemdiv memberdiv\">
                        <div class=\"inline pos-rel\">
                            <div class=\"user\">
                                <a href=\"#\">
                                    <img src=\"http://bootdey.com/img/Content/avatar/avatar2.png\" alt=\"Alexa Doe's avatar\">
                                </a>
                            </div>

                            <div class=\"body\">
                                <div class=\"name\">
                                    <a href=\"#\">
                                        <span class=\"user-status status-offline\"></span>
                                        Alexa Doe
                                    </a>
                                </div>
                            </div>

                            <div class=\"popover\">
                                <div class=\"arrow\"></div>

                                <div class=\"popover-content\">
                                    <div class=\"bolder\">Accounting</div>

                                    <div class=\"time\">
                                        <i class=\"ace-icon fa fa-clock-o middle bigger-120 grey\"></i>
                                        <span class=\"grey\"> 4 hours ago </span>
                                    </div>

                                    <div class=\"hr dotted hr-8\"></div>

                                    <div class=\"tools action-buttons\">
                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-facebook-square blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
                                        </a>

                                        <a href=\"#\">
                                            <i class=\"ace-icon fa fa-google-plus-square red bigger-150\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"hr hr10 hr-double\"></div>

                <ul class=\"pager pull-right\">
                    <li class=\"previous disabled\">
                        <a href=\"#\">← Prev</a>
                    </li>

                    <li class=\"next\">
                        <a href=\"#\">Next →</a>
                    </li>
                </ul>
            </div><!-- /#friends -->

            <div id=\"pictures\" class=\"tab-pane\">
                <ul class=\"ace-thumbnails\">
                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/1/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/2/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/3/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/4/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/5/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/6/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/7/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>

                    <li>
                        <a href=\"#\" data-rel=\"colorbox\">
                            <img alt=\"150x150\" src=\"http://lorempixel.com/200/200/nature/1/\">
                            <div class=\"text\">
                                <div class=\"inner\">Sample Caption on Hover</div>
                            </div>
                        </a>

                        <div class=\"tools tools-bottom\">
                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-link\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-paperclip\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-pencil\"></i>
                            </a>

                            <a href=\"#\">
                                <i class=\"ace-icon fa fa-times red\"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div><!-- /#pictures -->
        </div>
    </div>
</div>", "@FOSUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\symfony\\Remmy\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
