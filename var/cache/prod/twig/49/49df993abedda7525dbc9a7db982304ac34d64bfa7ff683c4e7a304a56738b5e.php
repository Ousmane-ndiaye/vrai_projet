<?php

/* admin/detail.html.twig */
class __TwigTemplate_cddca8ea942c52539addac43ebab8b9b38348670b0f58e21c1c134748ee40909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/detail.html.twig", 1);
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
        echo "    Réservation
";
    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        // line 9
        echo "    Gestion des réservations
";
    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"row\" id=\"charge_detail\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">Détail du demande de réservation faites par ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo "
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du bien
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
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
                    </ul>
                    <ul class=\"col-md-8 ul_detail\">
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomBien", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomVille", array()) . ", ") . $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomQuartier", array())), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomComplet", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "prixLoc", array()), "html", null, true);
        echo " fcfa </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du client
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
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
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_cni", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_adresse", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_email", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_telephone", array()), "html", null, true);
        echo " </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Description
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body\">
                            <p>
                                ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "description", array()), "html", null, true);
        echo "
                            </p>
                            <div class=\"panel-body row\">
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Meublé </span> <span class=\"reponse_description col-md-2\">";
        // line 145
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "meuble", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> balcon </span> <span class=\"reponse_description col-md-2\">";
        // line 148
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "balcon", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </l>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> parking </span> <span class=\"reponse_description col-md-2\">";
        // line 151
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "parking", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </li>
                                </ul>
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Surface </span> <span class=\"reponse_description col-md-2\">";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "surface", array()), "html", null, true);
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> chambre à coucher </span> <span class=\"reponse_description col-md-2\">";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nbreChambre", array()), "html", null, true);
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> salle de bain </span> <span class=\"reponse_description col-md-2\">";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "nbreSallebain", array()), "html", null, true);
        echo "</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row col-sm-12\">
            <span class=\"col-sm-3\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_annuler_reserve\">Annuler</a>
            <span class=\"col-sm-2\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_valider_reserve\" data-idreservation=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Reservation_id", array()), "html", null, true);
        echo "\" data-idbien=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Bien_id", array()), "html", null, true);
        echo "\" data-idclient=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? null), 0, array(), "array"), "Client_id", array()), "html", null, true);
        echo "\">Valider</a>
            <span class=\"col-sm-3\">&nbsp;</span>
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
        return "admin/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 175,  287 => 162,  281 => 159,  275 => 156,  263 => 151,  253 => 148,  243 => 145,  235 => 140,  217 => 125,  211 => 122,  205 => 119,  199 => 116,  193 => 113,  158 => 81,  152 => 78,  146 => 75,  140 => 72,  134 => 69,  128 => 66,  90 => 31,  82 => 26,  74 => 21,  65 => 15,  60 => 12,  57 => 11,  52 => 9,  49 => 8,  44 => 6,  41 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/detail.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/detail.html.twig");
    }
}
