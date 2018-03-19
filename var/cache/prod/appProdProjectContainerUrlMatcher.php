<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/soultana')) {
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
