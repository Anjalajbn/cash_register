<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'get_notes',  'permanent' => true,  '_route' => '_welcome',);
        }

        // _login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  'route' => 'login',  '_route' => '_login',);
        }

        if (0 === strpos($pathinfo, '/product')) {
            if (0 === strpos($pathinfo, '/products')) {
                // get_products
                if (preg_match('#^/products(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_products;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_products')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::getProductsAction',  '_format' => NULL,));
                }
                not_get_products:

                // new_product
                if (0 === strpos($pathinfo, '/products/new') && preg_match('#^/products/new(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_new_product;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_product')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::newProductAction',  '_format' => NULL,));
                }
                not_new_product:

                // get_product
                if (preg_match('#^/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_product;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_product')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::getProductAction',  '_format' => NULL,));
                }
                not_get_product:

            }

            // get_product_barcode
            if (0 === strpos($pathinfo, '/product/barcode') && preg_match('#^/product/barcode(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_product_barcode;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_product_barcode')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::getProductBarcodeAction',  '_format' => NULL,));
            }
            not_get_product_barcode:

            if (0 === strpos($pathinfo, '/products')) {
                // post_products
                if (preg_match('#^/products(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_products;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_products')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::postProductsAction',  '_format' => NULL,));
                }
                not_post_products:

                // edit_products
                if (preg_match('#^/products/(?P<id>[^/]++)/edit(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_edit_products;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_products')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::editProductsAction',  '_format' => NULL,));
                }
                not_edit_products:

                // put_products
                if (preg_match('#^/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_put_products;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_products')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::putProductsAction',  '_format' => NULL,));
                }
                not_put_products:

                // delete_products
                if (preg_match('#^/products/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_delete_products;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_products')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::deleteProductsAction',  '_format' => NULL,));
                }
                not_delete_products:

            }

        }

        // get_invoice
        if (0 === strpos($pathinfo, '/invoice') && preg_match('#^/invoice(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_invoice;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_invoice')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::getInvoiceAction',  '_format' => NULL,));
        }
        not_get_invoice:

        // remove_products
        if (0 === strpos($pathinfo, '/products') && preg_match('#^/products/(?P<id>[^/]++)/remove(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_remove_products;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_products')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::removeProductsAction',  '_format' => NULL,));
        }
        not_remove_products:

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // nelmio_api_doc_index
        if (0 === strpos($pathinfo, '/api/doc') && preg_match('#^/api/doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
        }
        not_nelmio_api_doc_index:

        if (0 === strpos($pathinfo, '/log')) {
            // _loginCheck
            if ($pathinfo === '/loginCheck') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logincheckAction',  'route' => 'logincheck',  '_route' => '_loginCheck',);
            }

            // _logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
