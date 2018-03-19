<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/soultana')) {
            // reservation_homepage
            if ('/soultana' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservation_homepage');
                }

                return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reservation_homepage',);
            }

            if (0 === strpos($pathinfo, '/soultana/reservation')) {
                // reservation_index
                if ('/soultana/reservation' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reservation_index');
                    }

                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
                }

                // reservation_catalogue
                if ('/soultana/reservation/catalogue' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\ReservationController::catalogueAction',  '_route' => 'reservation_catalogue',);
                }

                // reservation_connexion
                if ('/soultana/reservation/connexion' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\ReservationController::connexionAction',  '_route' => 'reservation_connexion',);
                }

                // reservation_approuver
                if ('/soultana/reservation/approuver' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\ReservationController::approuverAction',  '_route' => 'reservation_approuver',);
                }

            }

            elseif (0 === strpos($pathinfo, '/soultana/admin')) {
                // admin_index
                if ('/soultana/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_index');
                    }

                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_index',);
                }

                // admin_accueil
                if ('/soultana/admin/accueil' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::accueilAction',  '_route' => 'admin_accueil',);
                }

                // admin_reservation
                if ('/soultana/admin/reservation' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::reservationAction',  '_route' => 'admin_reservation',);
                }

                // requete_ajax
                if ('/soultana/admin/requete_ajax' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::requete_ajaxAction',  '_route' => 'requete_ajax',);
                }

                // admin_detail_reservation
                if ('/soultana/admin/detail' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::detailAction',  '_route' => 'admin_detail_reservation',);
                }

                // admin_contrat
                if ('/soultana/admin/contrat' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::contratAction',  '_route' => 'admin_contrat',);
                }

                // admin_biens_sousbiens
                if ('/soultana/admin/biens_sousbiens' === $pathinfo) {
                    return array (  '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::biens_sousbiensAction',  '_route' => 'admin_biens_sousbiens',);
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
