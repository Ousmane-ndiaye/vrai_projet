<?php

/* admin/contrat.html.twig */
class __TwigTemplate_53c316a7dd96c7a6295a05378019e1d6d4d2a0a3f913a74a3b1b8a1f63f3fd61 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo "Réservation";
        echo "
";
    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo "Gestion des réservations contrat";
        echo "
";
    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"row\" id=\"charge_contrat\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">
                    Finalisation du demande de réservation faites par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomClient", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomBien", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomVille", array()) . ", ") . $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomQuartier", array())), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomComplet", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "prixLoc", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_cni", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_adresse", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_email", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_telephone", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "prixLoc", array()), "html", null, true);
        echo " fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa</span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 155
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "prixLoc", array()) + 50000), "html", null, true);
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
                                                        Partie II– Les éléments de base du langage Python
                                                        II.1. Pourquoi Python ?
                                                        Quelques notions essentielles sur le langage Python
                                                        Python est un langage de programmation généraliste, facile à apprendre et rapide à
                                                        mettre en œuvre.
                                                        Python est généraliste car, selon les multiples réalisations qu'il a à son actif, il peut
                                                        être utilisé dans tous les domaines : écriture d'applications pour le Web (serveur
                                                        d'application Zope, framework Django), programmes de calculs mathématiques
                                                        (biblithèque SciPy), interfaces graphiques (il existe des supports de Python pour les
                                                        sytèmes d'interface graphique GTK, Qt, TK, wxWidget), programmation de scripts
                                                        systèmes, etc.
                                                        De fait, Python dispose d'une très large bibliothèque standard qui offre au
                                                        programmeur des outils très divers pour : la gestion réseau (librairie socket), la
                                                        manipulation du format xml, l'accès aux protocoles d'Internet (protocoles des services
                                                        courriel, divers protocoles web), l'accès aux éléments du système d'exploitation
                                                        sous-jacent (accès aux fichiers et répertoires, gestion des processus), l'écriture
                                                        d'interfaces graphiques (librairie Tkinter), l'accès aux bases de données relationnelles,
                                                        etc.
                                                        Il est aussi possible d'étendre Python en intégrant de nouveaux modules. Par exemple
                                                        la librairie PIL permet de traiter des images.
                                                        [The Python Standard Library: http://docs.python.org/2/library/index.html]
                                                        Python est facile à apprendre car de nombreuses opérations dévolues au programmeur
                                                        dans les langages classiques comme le langage C, par exemple la gestion de la
                                                        mémoire, sont prises en charge par l'interpréteur Python. De même, Python gère
                                                        dynamiquement les variables et libère le programmeur des déclarations de type.
                                                        De plus Python impose d'écrire les blocs d'instructions de manière indentée, ce qui
                                                        favorise grandement la lecture des programmes.
                                                        Enfin, en tant que langage interprété (voir dans la partie I de ce cours), Python est
                                                        rapide à mettre en œuvre. Il suffit de lancer la console Python pour avoir sous la min
                                                        de quoi tester directement des commandes et des structures de données. Cela est un
                                                        gain de temps pour le programmeur par rapport au cycle compilation/édition de liens
                                                        du langage C.
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
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Reservation_id", array()), "html", null, true);
        echo "\" data-idbien=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Bien_id", array()), "html", null, true);
        echo "\" data-idclient=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_id", array()), "html", null, true);
        echo "\" data-montant=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "prixLoc", array()) + 50000), "html", null, true);
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
";
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
        return array (  311 => 215,  248 => 155,  239 => 149,  201 => 114,  195 => 111,  189 => 108,  183 => 105,  177 => 102,  139 => 67,  133 => 64,  127 => 61,  121 => 58,  115 => 55,  109 => 52,  70 => 16,  64 => 12,  61 => 11,  54 => 9,  51 => 8,  44 => 6,  41 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/contrat.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/contrat.html.twig");
    }
}
