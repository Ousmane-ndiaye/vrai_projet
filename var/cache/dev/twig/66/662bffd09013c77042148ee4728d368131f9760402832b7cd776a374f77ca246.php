<?php

/* admin/contrat.html.twig */
class __TwigTemplate_9d76964389d7c8b2d3136662f0ee0551fcdeabd0293f72ab8e2b8e60c5045cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/contrat.html.twig", 1);
        $this->blocks = array(
            'accueil' => array($this, 'block_accueil'),
            'titre_page_li' => array($this, 'block_titre_page_li'),
            'titre_page_h1' => array($this, 'block_titre_page_h1'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f49d4c5b7d23004af665248b5f9b9414a3c44049a5eccca9c8a9f9a0305f01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f49d4c5b7d23004af665248b5f9b9414a3c44049a5eccca9c8a9f9a0305f01e->enter($__internal_6f49d4c5b7d23004af665248b5f9b9414a3c44049a5eccca9c8a9f9a0305f01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contrat.html.twig"));

        $__internal_c342c67734acaf4afdc91388aa845f1ec1657ce703f5f9b029c9617c98ddc4fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c342c67734acaf4afdc91388aa845f1ec1657ce703f5f9b029c9617c98ddc4fb->enter($__internal_c342c67734acaf4afdc91388aa845f1ec1657ce703f5f9b029c9617c98ddc4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f49d4c5b7d23004af665248b5f9b9414a3c44049a5eccca9c8a9f9a0305f01e->leave($__internal_6f49d4c5b7d23004af665248b5f9b9414a3c44049a5eccca9c8a9f9a0305f01e_prof);

        
        $__internal_c342c67734acaf4afdc91388aa845f1ec1657ce703f5f9b029c9617c98ddc4fb->leave($__internal_c342c67734acaf4afdc91388aa845f1ec1657ce703f5f9b029c9617c98ddc4fb_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_b7a1adaaf3ec3604b8830f7f8fd3c866918e0d05f237ff7caada87a4592b4ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a1adaaf3ec3604b8830f7f8fd3c866918e0d05f237ff7caada87a4592b4ba7->enter($__internal_b7a1adaaf3ec3604b8830f7f8fd3c866918e0d05f237ff7caada87a4592b4ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_24371478fab6b31240505bbb31f884ab69b9d08f3369dc2db0630f836a564817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24371478fab6b31240505bbb31f884ab69b9d08f3369dc2db0630f836a564817->enter($__internal_24371478fab6b31240505bbb31f884ab69b9d08f3369dc2db0630f836a564817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_24371478fab6b31240505bbb31f884ab69b9d08f3369dc2db0630f836a564817->leave($__internal_24371478fab6b31240505bbb31f884ab69b9d08f3369dc2db0630f836a564817_prof);

        
        $__internal_b7a1adaaf3ec3604b8830f7f8fd3c866918e0d05f237ff7caada87a4592b4ba7->leave($__internal_b7a1adaaf3ec3604b8830f7f8fd3c866918e0d05f237ff7caada87a4592b4ba7_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_f3018b968a47eaa13bff07da5ae6ef44ba27340c6c2495a44dfe15a81c52f561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3018b968a47eaa13bff07da5ae6ef44ba27340c6c2495a44dfe15a81c52f561->enter($__internal_f3018b968a47eaa13bff07da5ae6ef44ba27340c6c2495a44dfe15a81c52f561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_ce63149b40d52d6770dd93215bad070bc588875ea868293b92b7b54ab95d0304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce63149b40d52d6770dd93215bad070bc588875ea868293b92b7b54ab95d0304->enter($__internal_ce63149b40d52d6770dd93215bad070bc588875ea868293b92b7b54ab95d0304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    ";
        echo "Réservation";
        echo "
";
        
        $__internal_ce63149b40d52d6770dd93215bad070bc588875ea868293b92b7b54ab95d0304->leave($__internal_ce63149b40d52d6770dd93215bad070bc588875ea868293b92b7b54ab95d0304_prof);

        
        $__internal_f3018b968a47eaa13bff07da5ae6ef44ba27340c6c2495a44dfe15a81c52f561->leave($__internal_f3018b968a47eaa13bff07da5ae6ef44ba27340c6c2495a44dfe15a81c52f561_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_31d78e9a02c8bd6edcbef63ddd9ad5127d0566de06c65b03f47ceb58be7bf6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d78e9a02c8bd6edcbef63ddd9ad5127d0566de06c65b03f47ceb58be7bf6a0->enter($__internal_31d78e9a02c8bd6edcbef63ddd9ad5127d0566de06c65b03f47ceb58be7bf6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_f6d98167148909b07f50af915cecf4d305ea2c1aa02b63a19bdb18fabe25459f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d98167148909b07f50af915cecf4d305ea2c1aa02b63a19bdb18fabe25459f->enter($__internal_f6d98167148909b07f50af915cecf4d305ea2c1aa02b63a19bdb18fabe25459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    ";
        echo "Gestion des réservations contrat";
        echo "
";
        
        $__internal_f6d98167148909b07f50af915cecf4d305ea2c1aa02b63a19bdb18fabe25459f->leave($__internal_f6d98167148909b07f50af915cecf4d305ea2c1aa02b63a19bdb18fabe25459f_prof);

        
        $__internal_31d78e9a02c8bd6edcbef63ddd9ad5127d0566de06c65b03f47ceb58be7bf6a0->leave($__internal_31d78e9a02c8bd6edcbef63ddd9ad5127d0566de06c65b03f47ceb58be7bf6a0_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_c2b3d002d143773ad4660eb0a5fcd5dc34aff3d43a95076297b0c530247be737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b3d002d143773ad4660eb0a5fcd5dc34aff3d43a95076297b0c530247be737->enter($__internal_c2b3d002d143773ad4660eb0a5fcd5dc34aff3d43a95076297b0c530247be737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_7b88ddce48293e18f7763b88c0d3b0ec0d1c7a11a11c250e33fa218d2a048e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b88ddce48293e18f7763b88c0d3b0ec0d1c7a11a11c250e33fa218d2a048e7c->enter($__internal_7b88ddce48293e18f7763b88c0d3b0ec0d1c7a11a11c250e33fa218d2a048e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 12
        echo "    <div class=\"row\" id=\"charge_contrat\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">
                    Finalisation du demande de réservation faites par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo "
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Détail du bien
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> nom  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> adresse </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> localité </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> type </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> proprietaire </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> montant </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> caution </span> :
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomBien", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomVille", array()) . ", ") . $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomQuartier", array())), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomComplet", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "prixLoc", array()), "html", null, true);
        echo " fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Détail du client
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> prénom & nom  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Numéro cni </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> adresse </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> e-mail </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> téléphone </span> :
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_cni", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_adresse", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_email", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_telephone", array()), "html", null, true);
        echo " </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Formalité du contrat
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> Mensualité  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Caution </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Total </span> :
                                            </li>
                                            <li>
                                                <form method=\"POST\" class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label style=\"font-weight: bold;\">
                                                            <input type=\"checkbox\" id=\"contrat_renouvable\" value=\"contrat de 1 an renouvelable\"> Contrat de 1 an renouvelable
                                                        </label>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "prixLoc", array()), "html", null, true);
        echo " fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa</span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 155
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "prixLoc", array()) + 50000), "html", null, true);
        echo " fcfa </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Terme du contrat
                                    </div>
                                    <div class=\"panel-body row\">
                                        <div class=\"col-md-12\">
                                            <form method=\"POST\" class=\"form-group\">
                                                <div class=\"form-group\">
                                                    <label>termes et conditions</label>
                                                    <textarea id=\"aImprimer\" class=\"form-control\" readonly=\"true\" rows=\"15\">
                                                        ";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "text", array()), "html", null, true);
        echo "
                                                    </textarea>
                                                </div>
                                                <div class=\"radio\">
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"radio\" name=\"soumContrat\" class=\"soumContrat\" value=\"accepter\"> Accepter
                                                    </label>
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"radio\" name=\"soumContrat\" class=\"soumContrat\" value=\"refuser\"> Refuser
                                                    </label>
                                                </div>
                                                <button style=\"color: #1a2b3c;\" id=\"pushContrat\"  type=\"submit\" class=\"btn btn-sucess\" data-idreservation=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Reservation_id", array()), "html", null, true);
        echo "\" data-idbien=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Bien_id", array()), "html", null, true);
        echo "\" data-idclient=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_id", array()), "html", null, true);
        echo "\" data-montant=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "prixLoc", array()) + 50000), "html", null, true);
        echo "\">Enregistrer</button>
                                            </form>
                                        </div>
                                    </di>
                                </div>
                            </div>
                            <!--/.col-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            &nbsp;
        </div>
        <!--/.col-->
    </div>
    <div id=\"content_general\">
        <header>
            <h2>CONTRAT DE LOCATION / COLOCATION</h2>
        </header>
        <div id = \"contenu_contrat\">
            <ol type=\"I\" style=\"color:MediumSeaGreen;\">
                <li>DÉSIGNATION DES PARTIES</li>
            </ol>
            <h3>Le présent contrat est conclu entre les soussignés : </h3>
            <ul>
                <li>  Nom et prénom, ou dénomination du bailleur :      <b>SOULTANA SA</b> </li>
                <li>  Domicile ou siège social du bailleur :            <b>DAKAR, PLACE DE L'INDEPENDANCE </b> </li>
                <li>  Qualité du bailleur :</li>
            </ul>
            <form action=\"/action_page.php\" method=\"POST\">
                <input type=\"checkbox\" name=\"p_physique\" value=\"Bike\">Personne physique
                <input type=\"checkbox\" name=\"p_morale\" value=\"Car\" checked>Personne morale
                <h3>désigné (s) ci-après le bailleur ; </h3>
                <p>Le cas échéant, représenté par le mandataire :</p>
                <ul>
                    <li> Nom et prénom du locataire : <b> ";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo " </b> </li>
                    <li> Adresse du locataire : <b>";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_adresse", array()), "html", null, true);
        echo " </b> </li>
                    <li> Adresse email du locataire : <b>";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_email", array()), "html", null, true);
        echo " </b> </li>
                    <li> Si second locataire, nom et prénom du second locataire : ............................</li>
                    <li> Adresse du second locataire :........................................................</li>
                    <li> Adresse email du second locataire (facultatif) :.....................................</li>
                </ul>
                <h3>désigné (s) ci-après le locataire</h3>
            </form>
            <p>Il a été convenu ce qui suit :</p>
            <ol type=\"II\" style=\"color:MediumSeaGreen;\">
                <li>OBJET DU CONTRAT</li>
            </ol>
            <h3>Le présent contrat a pour objet la location d’un logement ainsi déterminé :</h3>
            <ol type=\"A\" style=\"color:Gold\">
                <li> Consistance du logement :</li>
            </ol>
            <ul>
                <li> Adresse du logement : <b>";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo "</b> </li>
                <li> Bâtiment / escalier / étage / porte : <b> ";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo "</b> </li>
                <li>Surface habitable (en m²) : <b>";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "surface", array()), "html", null, true);
        echo "</b> </li>
                <li>Nombre de chambre : <b>";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nbreChambre", array()), "html", null, true);
        echo "</b> </li>
                <li>Nombre de salle de bain : <b>";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nbreSallebain", array()), "html", null, true);
        echo "</b> </li>
                <li>Le cas échéant, autres parties du logement :</li>
            </ul>
            <form action=\"/action_page.php\">
                <ul>
                    <li>
                        ";
        // line 249
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "parking", array()) == false)) {
            echo "<input type=\"checkbox\" name=\"parking\" value=\"Non\">Parking";
        } else {
            echo "<input type=\"checkbox\" name=\"parking\" value=\"Oui\" checked>Parking";
        }
        // line 250
        echo "                    </li>
                    <li>
                        ";
        // line 252
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "balcon", array()) == false)) {
            echo "<input type=\"checkbox\" name=\"balcon\" value=\"Non\">Balcon";
        } else {
            echo "<input type=\"checkbox\" name=\"balcon\" value=\"Oui\" checked>Balcon";
        }
        // line 253
        echo "                    </li>
                    <li>
                        ";
        // line 255
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "meuble", array()) == false)) {
            echo "<input type=\"checkbox\" name=\"meuble\" value=\"Non\">Meublé";
        } else {
            echo "<input type=\"checkbox\" name=\"meuble\" value=\"Oui\" checked>Meublé";
        }
        // line 256
        echo "                    </li>
                    <li>
                        <input type=\"checkbox\" name=\"vehicle2\" value=\"\">Autre : ......................................
                    </li>
                </ul>
            </form>
            <ul>
                <li>Modalité de production de chauffage :</li>
            </ul>
        </div>
        <footer>
            Copyright &copy; SOULTANA
        </footer>
    </div>
";
        
        $__internal_7b88ddce48293e18f7763b88c0d3b0ec0d1c7a11a11c250e33fa218d2a048e7c->leave($__internal_7b88ddce48293e18f7763b88c0d3b0ec0d1c7a11a11c250e33fa218d2a048e7c_prof);

        
        $__internal_c2b3d002d143773ad4660eb0a5fcd5dc34aff3d43a95076297b0c530247be737->leave($__internal_c2b3d002d143773ad4660eb0a5fcd5dc34aff3d43a95076297b0c530247be737_prof);

    }

    public function getTemplateName()
    {
        return "admin/contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 256,  455 => 255,  451 => 253,  445 => 252,  441 => 250,  435 => 249,  426 => 243,  422 => 242,  418 => 241,  414 => 240,  410 => 239,  391 => 223,  387 => 222,  383 => 221,  337 => 184,  323 => 173,  302 => 155,  293 => 149,  255 => 114,  249 => 111,  243 => 108,  237 => 105,  231 => 102,  193 => 67,  187 => 64,  181 => 61,  175 => 58,  169 => 55,  163 => 52,  124 => 16,  118 => 12,  109 => 11,  96 => 9,  87 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base1.html.twig' %}
{% block accueil %}
    {{ 'class=\" \"' }}
{% endblock %}
{% block titre_page_li %}
    {{ 'Réservation' }}
{% endblock %}
{% block titre_page_h1 %}
    {{ 'Gestion des réservations contrat' }}
{% endblock %}
{% block contenus %}
    <div class=\"row\" id=\"charge_contrat\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">
                    Finalisation du demande de réservation faites par {{ reservation[0].nomClient }}
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Détail du bien
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> nom  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> adresse </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> localité </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> type </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> proprietaire </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> montant </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> caution </span> :
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomBien }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].adresse }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomVille ~\", \"~reservation[0].nomQuartier }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomTypeBien }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomComplet }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].prixLoc}} fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Détail du client
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> prénom & nom  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Numéro cni </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> adresse </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> e-mail </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> téléphone </span> :
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomClient }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].Client_cni }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].Client_adresse }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].Client_email }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].Client_telephone }} </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Formalité du contrat
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> Mensualité  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Caution </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Total </span> :
                                            </li>
                                            <li>
                                                <form method=\"POST\" class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label style=\"font-weight: bold;\">
                                                            <input type=\"checkbox\" id=\"contrat_renouvable\" value=\"contrat de 1 an renouvelable\"> Contrat de 1 an renouvelable
                                                        </label>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].prixLoc }} fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa</span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].prixLoc + 50000 }} fcfa </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Terme du contrat
                                    </div>
                                    <div class=\"panel-body row\">
                                        <div class=\"col-md-12\">
                                            <form method=\"POST\" class=\"form-group\">
                                                <div class=\"form-group\">
                                                    <label>termes et conditions</label>
                                                    <textarea id=\"aImprimer\" class=\"form-control\" readonly=\"true\" rows=\"15\">
                                                        {{ reservation[0].text }}
                                                    </textarea>
                                                </div>
                                                <div class=\"radio\">
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"radio\" name=\"soumContrat\" class=\"soumContrat\" value=\"accepter\"> Accepter
                                                    </label>
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"radio\" name=\"soumContrat\" class=\"soumContrat\" value=\"refuser\"> Refuser
                                                    </label>
                                                </div>
                                                <button style=\"color: #1a2b3c;\" id=\"pushContrat\"  type=\"submit\" class=\"btn btn-sucess\" data-idreservation=\"{{ reservation[0].Reservation_id }}\" data-idbien=\"{{ reservation[0].Bien_id }}\" data-idclient=\"{{ reservation[0].Client_id }}\" data-montant=\"{{ reservation[0].prixLoc + 50000 }}\">Enregistrer</button>
                                            </form>
                                        </div>
                                    </di>
                                </div>
                            </div>
                            <!--/.col-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            &nbsp;
        </div>
        <!--/.col-->
    </div>
    <div id=\"content_general\">
        <header>
            <h2>CONTRAT DE LOCATION / COLOCATION</h2>
        </header>
        <div id = \"contenu_contrat\">
            <ol type=\"I\" style=\"color:MediumSeaGreen;\">
                <li>DÉSIGNATION DES PARTIES</li>
            </ol>
            <h3>Le présent contrat est conclu entre les soussignés : </h3>
            <ul>
                <li>  Nom et prénom, ou dénomination du bailleur :      <b>SOULTANA SA</b> </li>
                <li>  Domicile ou siège social du bailleur :            <b>DAKAR, PLACE DE L'INDEPENDANCE </b> </li>
                <li>  Qualité du bailleur :</li>
            </ul>
            <form action=\"/action_page.php\" method=\"POST\">
                <input type=\"checkbox\" name=\"p_physique\" value=\"Bike\">Personne physique
                <input type=\"checkbox\" name=\"p_morale\" value=\"Car\" checked>Personne morale
                <h3>désigné (s) ci-après le bailleur ; </h3>
                <p>Le cas échéant, représenté par le mandataire :</p>
                <ul>
                    <li> Nom et prénom du locataire : <b> {{ reservation[0].nomClient }} </b> </li>
                    <li> Adresse du locataire : <b>{{ reservation[0].Client_adresse }} </b> </li>
                    <li> Adresse email du locataire : <b>{{ reservation[0].Client_email }} </b> </li>
                    <li> Si second locataire, nom et prénom du second locataire : ............................</li>
                    <li> Adresse du second locataire :........................................................</li>
                    <li> Adresse email du second locataire (facultatif) :.....................................</li>
                </ul>
                <h3>désigné (s) ci-après le locataire</h3>
            </form>
            <p>Il a été convenu ce qui suit :</p>
            <ol type=\"II\" style=\"color:MediumSeaGreen;\">
                <li>OBJET DU CONTRAT</li>
            </ol>
            <h3>Le présent contrat a pour objet la location d’un logement ainsi déterminé :</h3>
            <ol type=\"A\" style=\"color:Gold\">
                <li> Consistance du logement :</li>
            </ol>
            <ul>
                <li> Adresse du logement : <b>{{ reservation[0].adresse }}</b> </li>
                <li> Bâtiment / escalier / étage / porte : <b> {{ reservation[0].nomTypeBien }}</b> </li>
                <li>Surface habitable (en m²) : <b>{{ reservation[0].surface }}</b> </li>
                <li>Nombre de chambre : <b>{{ reservation[0].nbreChambre }}</b> </li>
                <li>Nombre de salle de bain : <b>{{ reservation[0].nbreSallebain }}</b> </li>
                <li>Le cas échéant, autres parties du logement :</li>
            </ul>
            <form action=\"/action_page.php\">
                <ul>
                    <li>
                        {% if reservation[0].parking == false %}<input type=\"checkbox\" name=\"parking\" value=\"Non\">Parking{% else %}<input type=\"checkbox\" name=\"parking\" value=\"Oui\" checked>Parking{% endif %}
                    </li>
                    <li>
                        {% if reservation[0].balcon == false %}<input type=\"checkbox\" name=\"balcon\" value=\"Non\">Balcon{% else %}<input type=\"checkbox\" name=\"balcon\" value=\"Oui\" checked>Balcon{% endif %}
                    </li>
                    <li>
                        {% if reservation[0].meuble == false %}<input type=\"checkbox\" name=\"meuble\" value=\"Non\">Meublé{% else %}<input type=\"checkbox\" name=\"meuble\" value=\"Oui\" checked>Meublé{% endif %}
                    </li>
                    <li>
                        <input type=\"checkbox\" name=\"vehicle2\" value=\"\">Autre : ......................................
                    </li>
                </ul>
            </form>
            <ul>
                <li>Modalité de production de chauffage :</li>
            </ul>
        </div>
        <footer>
            Copyright &copy; SOULTANA
        </footer>
    </div>
{% endblock %}", "admin/contrat.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/contrat.html.twig");
    }
}
