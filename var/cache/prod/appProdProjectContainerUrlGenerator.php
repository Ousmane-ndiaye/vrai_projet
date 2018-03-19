<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'reservation_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\ReservationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/reservation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_catalogue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\ReservationController::catalogueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/reservation/catalogue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\ReservationController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/reservation/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reservation_approuver' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\ReservationController::approuverAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/reservation/approuver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/admin/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reservation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::reservationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/admin/reservation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_detail_reservation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/admin/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_contrat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::contratAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/admin/contrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'requete_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SNT\\ReservationBundle\\Controller\\AdminController::requete_ajaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soultana/admin/requete_ajax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
