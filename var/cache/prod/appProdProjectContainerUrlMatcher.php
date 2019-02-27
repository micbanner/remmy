<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/orderline')) {
            // orderline_index
            if ('/orderline' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\OrderLineController::indexAction',  '_route' => 'orderline_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_orderline_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'orderline_index'));
                }

                return $ret;
            }
            not_orderline_index:

            // orderline_show
            if (preg_match('#^/orderline/(?P<idorderline>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'orderline_show']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\OrderLineController::showAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/orderheader')) {
            // orderheader_index
            if ('/orderheader/orderlist' === $pathinfo) {
                return array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\OrderHeaderController::indexAction',  '_route' => 'orderheader_index',);
            }

            // orderheader_show
            if (preg_match('#^/orderheader/(?P<idorder>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'orderheader_show']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\OrderHeaderController::showAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/stockproduct')) {
                // stockproduct_index
                if ('/admin/stockproduct' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\StockProductController::indexAction',  '_route' => 'stockproduct_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_stockproduct_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'stockproduct_index'));
                    }

                    return $ret;
                }
                not_stockproduct_index:

                // stockproduct_new
                if ('/admin/stockproduct/new' === $pathinfo) {
                    return array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\StockProductController::newAction',  '_route' => 'stockproduct_new',);
                }

                // stockproduct_show
                if (preg_match('#^/admin/stockproduct/(?P<idstock>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'stockproduct_show']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\StockProductController::showAction',));
                }

                // stockproduct_edit
                if (preg_match('#^/admin/stockproduct/(?P<idstock>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'stockproduct_edit']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\StockProductController::editAction',));
                }

                // stockproduct_delete
                if (preg_match('#^/admin/stockproduct/(?P<idstock>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'stockproduct_delete']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\StockProductController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/size')) {
                // size_index
                if ('/admin/size' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\SizeController::indexAction',  '_route' => 'size_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_size_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'size_index'));
                    }

                    return $ret;
                }
                not_size_index:

                // size_new
                if ('/admin/size/new' === $pathinfo) {
                    return array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\SizeController::newAction',  '_route' => 'size_new',);
                }

                // size_show
                if (preg_match('#^/admin/size/(?P<idsize>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'size_show']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\SizeController::showAction',));
                }

                // size_edit
                if (preg_match('#^/admin/size/(?P<idsize>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'size_edit']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\SizeController::editAction',));
                }

                // size_delete
                if (preg_match('#^/admin/size/(?P<idsize>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'size_delete']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\SizeController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/color')) {
                // color_index
                if ('/admin/color' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ColorController::indexAction',  '_route' => 'color_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_color_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'color_index'));
                    }

                    return $ret;
                }
                not_color_index:

                // color_new
                if ('/admin/color/new' === $pathinfo) {
                    return array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ColorController::newAction',  '_route' => 'color_new',);
                }

                // color_show
                if (preg_match('#^/admin/color/(?P<idcolor>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'color_show']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ColorController::showAction',));
                }

                // color_edit
                if (preg_match('#^/admin/color/(?P<idcolor>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'color_edit']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ColorController::editAction',));
                }

                // color_delete
                if (preg_match('#^/admin/color/(?P<idcolor>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'color_delete']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ColorController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/category')) {
                // category_index
                if ('/admin/category' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_category_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'category_index'));
                    }

                    return $ret;
                }
                not_category_index:

                // category_new
                if ('/admin/category/new' === $pathinfo) {
                    return array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }

                // category_show
                if (preg_match('#^/admin/category/(?P<idcategory>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_show']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\CategoryController::showAction',));
                }

                // category_edit
                if (preg_match('#^/admin/category/(?P<idcategory>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_edit']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\CategoryController::editAction',));
                }

                // category_delete
                if (preg_match('#^/admin/category/(?P<idcategory>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'category_delete']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\CategoryController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/product')) {
                // product_index
                if ('/admin/product' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ProductController::indexAction',  '_route' => 'product_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_product_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'product_index'));
                    }

                    return $ret;
                }
                not_product_index:

                // product_new
                if ('/admin/product/new' === $pathinfo) {
                    return array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
                }

                // product_show
                if (preg_match('#^/admin/product/(?P<idproduct>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'product_show']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ProductController::showAction',));
                }

                // product_edit
                if (preg_match('#^/admin/product/(?P<idproduct>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'product_edit']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ProductController::editAction',));
                }

                // product_delete
                if (preg_match('#^/admin/product/(?P<idproduct>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'product_delete']), array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\ProductController::deleteAction',));
                }

            }

            // back_office_admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'Remmy\\BackOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_office_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_index
                if ('/admin/user' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'Remmy\\MainBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_admin_user_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin_user_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_user_index;
                    }

                    return $ret;
                }
                not_admin_user_index:

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_show']), array (  '_controller' => 'Remmy\\MainBundle\\Controller\\UserController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_admin_user_show;
                    }

                    return $ret;
                }
                not_admin_user_show:

                // admin_user_new
                if ('/admin/user/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'Remmy\\MainBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_user_new;
                    }

                    return $ret;
                }
                not_admin_user_new:

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_edit']), array (  '_controller' => 'Remmy\\MainBundle\\Controller\\UserController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_admin_user_edit;
                    }

                    return $ret;
                }
                not_admin_user_edit:

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_delete']), array (  '_controller' => 'Remmy\\MainBundle\\Controller\\UserController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_admin_user_delete;
                    }

                    return $ret;
                }
                not_admin_user_delete:

            }

        }

        // aboutPage
        if ('/about' === $pathinfo) {
            return array (  '_controller' => 'Remmy\\HomeBundle\\Controller\\HomeController::aboutAction',  '_route' => 'aboutPage',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Remmy\\HomeBundle\\Controller\\HomeController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_homepage;
            }

            return $ret;
        }
        not_homepage:

        // cgvPage
        if ('/cgv' === $pathinfo) {
            return array (  '_controller' => 'Remmy\\HomeBundle\\Controller\\HomeController::cgvAction',  '_route' => 'cgvPage',);
        }

        // contactPage
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'Remmy\\HomeBundle\\Controller\\HomeController::contactAction',  '_route' => 'contactPage',);
        }

        // sitemapPage
        if ('/sitemap' === $pathinfo) {
            return array (  '_controller' => 'Remmy\\HomeBundle\\Controller\\HomeController::sitemapAction',  '_route' => 'sitemapPage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // front_homepage
            if ('/user' === $pathinfo) {
                return array (  '_controller' => 'Remmy\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_homepage',);
            }

            // front_shoppingCard
            if ('/user/card' === $pathinfo) {
                return array (  '_controller' => 'Remmy\\FrontBundle\\Controller\\ShoppingCardController::shoppingAction',  '_route' => 'front_shoppingCard',);
            }

        }

        // front_product_retail
        if ('/product' === $pathinfo) {
            return array (  '_controller' => 'Remmy\\FrontBundle\\Controller\\ProductRetailController::RetailAction',  '_route' => 'front_product_retail',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
