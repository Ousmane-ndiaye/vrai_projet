<?php

namespace SNT\ReservationBundle\Controller;

use SNT\ReservationBundle\Entity\client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SNT\ReservationBundle\Entity\reservation;
use SNT\ReservationBundle\Entity\Bien;

class ReservationController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $villes = $em->getRepository('RESERVATIONBundle:ville')->findAll();
        $typesBien = $em->getRepository('RESERVATIONBundle:typeBien')->findAll();
        $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBien('', '', '', '');

        if ($request->isMethod('POST') && $_POST['form_type'] == 'rechercher') {
            extract($_POST);
            $prix = explode(',', $request->request->get('prix'));
            $prixMin = $prix[0].'000';
            $prixMax = $prix[1].'000';
            if (!isset($meuble)) {
                $meuble = '';
            }
            if (!isset($balcon)) {
                $balcon = '';
            }
            if (!isset($parking)) {
                $parking = '';
            }
            $em = $this->getDoctrine()->getManager();
            $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBien($lieu, $typeBien, $prixMin, $prixMax, $meuble, $balcon, $parking);

            return $this->render('reservation/catalogue.html.twig', array(
                'biens' => $biens,
            ));
        }

        return $this->render('reservation/index.html.twig', array(
            'villes' => $villes,
            'typesBien' => $typesBien,
            'biens' => $biens,
        ));
    }

    /**
     * @Route("/catalogue")
     */
    public function catalogueAction()
    {
        return $this->render('reservation/catalogue.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/approuver")
     */
    public function approuverAction(Request $request)
    {
        if ($request->isMethod('GET')) {
            extract($_GET);
            $em = $this->getDoctrine()->getManager();
            $bien = $em->getRepository('RESERVATIONBundle:Bien')->findBienById($idBien);

            return $this->render('reservation/approuver.html.twig', array(
                'biens' => $bien,
            ));
        }

        return $this->render('reservation/approuver.html.twig', array(
            //...
        ));
    }

    /**
     * @Route("/connexion")
     */
    public function connexionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('GET')) {
            extract($_GET);
            $bien = $em->getRepository('RESERVATIONBundle:Bien')->findBienById($idBien);

            return $this->render('reservation/connexion.html.twig', array(
                'bien' => $bien,
            ));
        }

        if ($request->isMethod('POST') && $_POST['typeformInscrit'] == 'inscription') {
            extract($_POST);
            $new_client = new client();
            $new_client->setNomClient($nomClientInscrit);
            $new_client->setNumCni($numCniInscrit);
            $new_client->setAdresse($adresseInscrit);
            $new_client->setTelephone($telephoneInscrit);
            $new_client->setEmail($emailInscrit);
            $new_client->setLogin($loginInscrit);
            $new_client->setPassword($passwordInscrit);
            $em->persist($new_client);
            $em->flush();

            $bien = $em->getRepository('RESERVATIONBundle:Bien')->find($idBienInscrit);

            $new_reservation = new reservation();
            $new_reservation->setDate(new \DateTime('now'));
            $new_reservation->setEtat(false);
            $new_reservation->setBien($bien);
            $new_reservation->setClient($new_client);
            $em->persist($new_reservation);
            $em->flush();

            $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBienById($idBienInscrit);

            return $this->render('reservation/approuver.html.twig', array(
                'biens' => $biens,
            ));
        }

        if ($request->isMethod('POST') && $_POST['typeform'] == 'connexion') {
            extract($_POST);
            $client = $em->getRepository('RESERVATIONBundle:client')->findClientLog($login, $password);

            $bien = $em->getRepository('RESERVATIONBundle:Bien')->find($idBien);

            $new_client = $em->getRepository('RESERVATIONBundle:client')->find($client[0]->getId());

            $new_reservation = new reservation();
            $new_reservation->setDate(new \DateTime('now'));
            $new_reservation->setEtat(false);
            $new_reservation->setBien($bien);
            $new_reservation->setClient($new_client);
            $em->persist($new_reservation);
            $em->flush();

            $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBienById($idBien);

            return $this->render('reservation/approuver.html.twig', array(
                'biens' => $biens,
            ));
        }

        return $this->render('reservation/connexion.html.twig', array(
            // ...
        ));
    }
}
