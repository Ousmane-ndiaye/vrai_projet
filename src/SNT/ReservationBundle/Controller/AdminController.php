<?php

namespace SNT\ReservationBundle\Controller;

use SNT\ReservationBundle\Entity\Bien;
use SNT\ReservationBundle\Entity\contrat;
use SNT\ReservationBundle\Entity\paiement;
use SNT\ReservationBundle\Entity\quartier;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction(Request $request)
    {
        return $this->render('admin/index.html.twig', array(
        ));
    }

    /**
     * @Route("/accueil")
     */
    public function accueilAction(Request $request)
    {
        return $this->render('admin/accueil.html.twig', array(
        ));
    }

    /**
     * @Route("/reservation")
     */
    public function reservationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('RESERVATIONBundle:reservation')->findReservation(null, null, null);

        return $this->render('admin/reservation.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    /**
     * @Route("/detail")
     */
    public function detailAction(Request $request)
    {
        if ($request->isMethod('GET')) {
            extract($_GET);
            $em = $this->getDoctrine()->getManager();
            $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

            return $this->render('admin/detail.html.twig', array(
                'reservation' => $reservation,
            ));
        }
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation(2, 18, 2);

        return $this->render('admin/detail.html.twig', array(
            'reservation' => $reservation,
        ));
    }

    /**
     * @Route("/contrat")
     */
    public function contratAction(Request $request)
    {
        extract($_GET);
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

        return $this->render('admin/contrat.html.twig', array(
            'reservation' => $reservation,
        ));
    }

    /**
     * @Route("/printcontrat")
     */
    public function printcontratAction(Request $request)
    {
        return $this->render('admin/printcontrat.html.twig', array(
        ));
    }

    /**
     * @Route("/biens_sousbiens")
     */
    public function biens_sousbiensAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $villes = $em->getRepository('RESERVATIONBundle:ville')->findAll();

        if ($request->isMethod('POST')) {
            extract($_POST);
            if (isset($requete)) {
                switch ($requete) {
                    case 'inserer_ville':
                        // code...
                        $quartier = new quartier();
                        $quartier->setNomQuartier($nomQuartier);
                        $quartier->setVille($em->getRepository('RESERVATIONBundle:ville')->find($idVille));
                        $em->persist($quartier);
                        $em->flush();

                        return new Response('Sucess');
                    break;

                    case 'inserer_quartier':
                        // code...
                    break;

                    case 'inserer_type':
                        // code...
                    break;

                    case 'inserer_bien':
                        // code...
                    break;

                    case 'inserer_image':
                        // code...
                    break;

                    default:
                        // code...
                    break;
                }
            }
        }

        return $this->render('admin/biens_sousbiens.html.twig', array(
            'villes' => $villes,
        ));
    }

    /**
     * @Route("/requete_ajax")
     */
    public function requete_ajaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            extract($_POST);
            if (isset($requete)) {
                switch ($requete) {
                    case 'lister_les_reservations_en_cours':
                        $biens = $em->getRepository('RESERVATIONBundle:Bien')->findBien(null, null, null, null);

                        return new Response(json_encode($biens));
                    break;

                    case 'rechercher_un_reservation_en_cours':
                        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

                        return new Response(json_encode($reservation));
                    break;

                    case 'charger_la_page_detail':
                        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->findReservation($idReservation, $idClient, $idBien);

                        return new Response(json_encode($reservation));
                    break;

                    case 'valider_la_reservation':

                        //Enregistrement du contrat
                        $contrat = new contrat();
                        $contrat->setDateContrat(new \DateTime('now'));
                        $contrat->setCaution($em->getRepository('RESERVATIONBundle:Bien')->find($idBien)->getPrixLoc());
                        $contrat->setDuree('1 an');
                        $contrat->setClient($em->getRepository('RESERVATIONBundle:client')->find($idClient));
                        $contrat->setBien($em->getRepository('RESERVATIONBundle:Bien')->find($idBien));
                        $em->persist($contrat);
                        $em->flush();
                        $idContrat = $contrat->getId();

                        //Enregistrement du paiement
                        $paiement = new paiement();
                        $paiement->setDatePaiement(new \DateTime('now'));
                        $paiement->setMontant($montant);
                        $paiement->setPeriode('3 mois');
                        $paiement->setIdContrat($em->getRepository('RESERVATIONBundle:contrat')->find($s));
                        $em->persist($paiement);
                        $em->flush();

                        //Changement de la disponibilité du bien
                        $bien = $em->getRepository('RESERVATIONBundle:Bien')->find($idBien);
                        $bien->setDisponibilite(0);
                        $em->persist($bien);
                        $em->flush();

                        //Validation de cette reservation
                        $reservation = $em->getRepository('RESERVATIONBundle:reservation')->find($idReservation);
                        $reservation->setEtat(0);
                        $em->persist($reservation);
                        $em->flush();

                        return new Response('Sucess');
                    break;

                    default:
                        // code...
                    break;
                }
            }
        }
    }
}
