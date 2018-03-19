<?php

namespace SNT\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RESERVATIONBundle:Default:index.html.twig');
    }
}
