<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/admin' => array(array(array('_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'), null, null, null, false, null)),
            '/form' => array(array(array('_route' => 'form', '_controller' => 'App\\Controller\\AdminController::edit'), null, null, null, false, null)),
            '/contact' => array(array(array('_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'), null, null, null, false, null)),
            '/' => array(array(array('_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'), null, null, null, false, null)),
            '/inscription' => array(array(array('_route' => 'registration', '_controller' => 'App\\Controller\\SecurityController::registration'), null, null, null, false, null)),
            '/login' => array(array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, null)),
            '/logout' => array(array(array('_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/admin/([^/]++)/(?'
                        .'|edit(*:30)'
                        .'|remove(*:43)'
                    .')'
                    .'|/fiche/([^/]++)(*:66)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:104)'
                        .'|wdt/([^/]++)(*:124)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:170)'
                                .'|router(*:184)'
                                .'|exception(?'
                                    .'|(*:204)'
                                    .'|\\.css(*:217)'
                                .')'
                            .')'
                            .'|(*:227)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            30 => array(array(array('_route' => 'edit', '_controller' => 'App\\Controller\\AdminController::edit'), array('id'), null, null, false, null)),
            43 => array(array(array('_route' => 'remove', '_controller' => 'App\\Controller\\AdminController::remove'), array('id'), null, null, false, null)),
            66 => array(array(array('_route' => 'fiche_biens', '_controller' => 'App\\Controller\\FicheBiensController::index'), array('id'), null, null, false, null)),
            104 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            124 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            170 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            184 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            204 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            217 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            227 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
