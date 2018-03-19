<?php

/* reservation/approuver.html.twig */
class __TwigTemplate_faaef3bacfe21986eb50558421bc1b499c07976cf03c65aa3292d97b542c68fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/approuver.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Réservation";
    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"page-head-content\">
                    <h1 class=\"page-title\">Superbe ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class=\"content-area single-property\" style=\"background-color: #FCFCFC;\">&nbsp;
        <div class=\"container\">

            <div class=\"clearfix padding-top-40\">

                <div class=\"col-md-8 single-property-content prp-style-1 \" id=\"detail_for_admin\">
                    <div class=\"row\">
                        <div class=\"light-slide-item\">
                            <div class=\"clearfix\">
                                <div class=\"favorite-and-print\">
                                    <a class=\"add-to-fav\" href=\"#login-modal\" data-toggle=\"modal\">
                                        <i class=\"fa fa-star-o\"></i>
                                    </a>
                                    <a class=\"printer-icon \" href=\"javascript:window.print()\">
                                        <i class=\"fa fa-print\"></i>
                                    </a>
                                </div>

                                <ul id=\"image-gallery\" class=\"gallery list-unstyled cS-hidden\">
                                    <li data-thumb=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-1/property1.jpg"), "html", null, true);
        echo "\">
                                        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-1/property1.jpg"), "html", null, true);
        echo "\" />
                                    </li>
                                    <li data-thumb=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-1/property2.jpg"), "html", null, true);
        echo "\">
                                        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-1/property3.jpg"), "html", null, true);
        echo "\" />
                                    </li>
                                    <li data-thumb=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-1/property3.jpg"), "html", null, true);
        echo "\">
                                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-1/property3.jpg"), "html", null, true);
        echo "\" />
                                    </li>
                                    <li data-thumb=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-1/property4.jpg"), "html", null, true);
        echo "\">
                                        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-1/property4.jpg"), "html", null, true);
        echo "\" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"single-property-wrapper\">
                        <div class=\"single-property-header\">
                            <h1 class=\"property-title pull-left\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo "</h1>
                            <span class=\"property-price pull-right\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "prixLoc", array()), "html", null, true);
        echo " f</span>
                        </div>

                        <div class=\"property-meta entry-meta clearfix \">

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-tag\">
                                        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/sale-orange.png"), "html", null, true);
        echo "\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Status</span>
                                <span class=\"property-info-value\">À Louer</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info icon-area\">
                                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/room-orange.png"), "html", null, true);
        echo "\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Surface</span>
                                <span class=\"property-info-value\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "surface", array()), "html", null, true);
        echo "<b class=\"property-info-unit\"></b></span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-bed\">
                                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/bed-orange.png"), "html", null, true);
        echo "\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Chambre à coucher</span>
                                <span class=\"property-info-value\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "nbreChambre", array()), "html", null, true);
        echo "</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-bed\">
                                        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/cars-orange.png"), "html", null, true);
        echo "\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Garage</span>
                                <span class=\"property-info-value\">";
        // line 96
        if (($this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "parking", array()) == false)) {
            echo "0";
        } else {
            echo "1";
        }
        echo "</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-bath\">
                                        <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/os-orange.png"), "html", null, true);
        echo "\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Bathrooms</span>
                                <span class=\"property-info-value\">3.5</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-garage\">
                                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/room-orange.png"), "html", null, true);
        echo "\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Garages</span>
                                <span class=\"property-info-value\">2</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-garage\">
                                        <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icon/shawer-orange.png"), "html", null, true);
        echo "\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Salle de bain</span>
                                <span class=\"property-info-value\">";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "nbreSallebain", array()), "html", null, true);
        echo "</span>
                                </span>
                            </div>


                        </div>
                        <!-- .property-meta -->

                        <div class=\"section\">
                            <h4 class=\"s-property-title\">Description</h4>
                            <div class=\"s-property-content\">
                                <p>
                                    ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "description", array()), "html", null, true);
        echo "
                                </p>
                            </div>
                        </div>
                        <!-- End description area  -->

                        <div class=\"section additional-details\">

                            <h4 class=\"s-property-title\">Details Additionels</h4>

                            <ul class=\"additional-details-list clearfix\">
                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">Meublé</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">";
        // line 151
        if (($this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "meuble", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                </li>

                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">Balcon</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">";
        // line 156
        if (($this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "balcon", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                </li>
                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">Parking</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">";
        // line 160
        if (($this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "parking", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                </li>

                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">Disponible</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">Oui</span>
                                </li>

                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">View</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">Intracoastal View,Direct ew</span>
                                </li>

                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">Waterfront Description:</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">Intracoastal Front,Ocean Access</span>
                                </li>

                            </ul>
                        </div>
                        <!-- End additional-details area  -->

                        <div class=\"section property-features\">

                            <h4 class=\"s-property-title\">Features</h4>
                            <ul>
                                <li><a href=\"properties.html\">Swimming Pool</a></li>
                                <li><a href=\"properties.html\">3 Stories</a></li>
                                <li><a href=\"properties.html\">Central Cooling</a></li>
                                <li><a href=\"properties.html\">Jog Path 2</a></li>
                                <li><a href=\"properties.html\">2 Lawn</a></li>
                                <li><a href=\"properties.html\">Bike Path</a></li>
                            </ul>

                        </div>
                        <!-- End features area  -->

                        <div class=\"section property-video\">
                            <h4 class=\"s-property-title\">Video du proprieté</h4>
                            <div class=\"video-thumb\">
                                <a class=\"video-popup\" href=\"yout\" title=\"Virtual Tour\">
                                    <img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/property-video.jpg"), "html", null, true);
        echo "\" class=\"img-responsive wp-post-image\" alt=\"Exterior\">
                                </a>
                            </div>
                        </div>
                        <!-- End video area  -->



                        <div class=\"section property-share\">
                            <h4 class=\"s-property-title\">Partager avec vos amis </h4>
                            <div class=\"roperty-social\">
                                <ul>
                                    <li>
                                        <a title=\"Share this on dribbble \" href=\"#\"><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/social_big/dribbble_grey.png"), "html", null, true);
        echo "\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on facebok \" href=\"#\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/social_big/facebook_grey.png"), "html", null, true);
        echo "\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on delicious \" href=\"#\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/social_big/delicious_grey.png"), "html", null, true);
        echo "\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on tumblr \" href=\"#\"><img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/social_big/tumblr_grey.png"), "html", null, true);
        echo "\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on digg \" href=\"#\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/social_big/digg_grey.png"), "html", null, true);
        echo "\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on twitter \" href=\"#\"><img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/social_big/twitter_grey.png"), "html", null, true);
        echo "\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on linkedin \" href=\"#\"><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/social_big/linkedin_grey.png"), "html", null, true);
        echo "\"></a>
                                    </li>
                                    <li class=\"row\">
                                        <a name=\"reserver\" id=\"reserver\" title=\"Réserver ce bien \" class=\"btn button_reserver col-12 col-sm-6\" href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_connexion", array("idBien" => $this->getAttribute($this->getAttribute(($context["biens"] ?? null), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" role=\"button\">RÉSERVER</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End video area  -->

                    </div>
                </div>


                <div class=\"col-md-4 p0\">
                    <aside class=\"sidebar sidebar-property blog-asside-right\">
                        <div class=\"dealer-widget\">
                            <div class=\"dealer-content\">
                                <div class=\"inner-wrapper\">

                                    <div class=\"clear\">
                                        <div class=\"col-xs-4 col-sm-4 dealer-face\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face1.png"), "html", null, true);
        echo "\" class=\"img-circle\">
                                            </a>
                                        </div>
                                        <div class=\"col-xs-8 col-sm-8 \">
                                            <h3 class=\"dealer-name\">
                                                <a href=\"\">Nathan James</a>
                                                <span>Real Estate Agent</span>
                                            </h3>
                                            <div class=\"dealer-social-media\">
                                                <a class=\"twitter\" target=\"_blank\" href=\"\">
                                                    <i class=\"fa fa-twitter\"></i>
                                                </a>
                                                <a class=\"facebook\" target=\"_blank\" href=\"\">
                                                    <i class=\"fa fa-facebook\"></i>
                                                </a>
                                                <a class=\"gplus\" target=\"_blank\" href=\"\">
                                                    <i class=\"fa fa-google-plus\"></i>
                                                </a>
                                                <a class=\"linkedin\" target=\"_blank\" href=\"\">
                                                    <i class=\"fa fa-linkedin\"></i>
                                                </a>
                                                <a class=\"instagram\" target=\"_blank\" href=\"\">
                                                    <i class=\"fa fa-instagram\"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                    <div class=\"clear\">
                                        <ul class=\"dealer-contacts\">
                                            <li><i class=\"pe-7s-map-marker strong\"> </i> 9089 your adress her</li>
                                            <li><i class=\"pe-7s-mail strong\"> </i> email@yourcompany.com</li>
                                            <li><i class=\"pe-7s-call strong\"> </i> +1 908 967 5906</li>
                                        </ul>
                                        <p>Duis mollis blandit tempus porttitor curabiturDuis mollis blandit tempus porttitor curabitur , est non…</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class=\"panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Similar Properties</h3>
                            </div>
                            <div class=\"panel-body recent-property-widget\">
                                <ul>
                                    <li>
                                        <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                            <a href=\"single.html\"><img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-property-2.jpg"), "html", null, true);
        echo "\"></a>
                                            <span class=\"property-seeker\">
                                                    <b class=\"b-1\">A</b>
                                                    <b class=\"b-2\">S</b>
                                                </span>
                                        </div>
                                        <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                            <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                            <span class=\"property-price\">3000000\$</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col-md-3 col-sm-3  col-xs-3 blg-thumb p0\">
                                            <a href=\"single.html\"><img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-property-1.jpg"), "html", null, true);
        echo "\"></a>
                                            <span class=\"property-seeker\">
                                                    <b class=\"b-1\">A</b>
                                                    <b class=\"b-2\">S</b>
                                                </span>
                                        </div>
                                        <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                            <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                            <span class=\"property-price\">3000000\$</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                            <a href=\"single.html\"><img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-property-3.jpg"), "html", null, true);
        echo "\"></a>
                                            <span class=\"property-seeker\">
                                                    <b class=\"b-1\">A</b>
                                                    <b class=\"b-2\">S</b>
                                                </span>
                                        </div>
                                        <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                            <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                            <span class=\"property-price\">3000000\$</span>
                                        </div>
                                    </li>

                                    <li>
                                        <div class=\"col-md-3 col-sm-3 col-xs-3 blg-thumb p0\">
                                            <a href=\"single.html\"><img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-property-2.jpg"), "html", null, true);
        echo "\"></a>
                                            <span class=\"property-seeker\">
                                                    <b class=\"b-1\">A</b>
                                                    <b class=\"b-2\">S</b>
                                                </span>
                                        </div>
                                        <div class=\"col-md-8 col-sm-8 col-xs-8 blg-entry\">
                                            <h6> <a href=\"single.html\">Super nice villa </a></h6>
                                            <span class=\"property-price\">3000000\$</span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class=\"panel panel-default sidebar-menu wow fadeInRight animated\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Ads her </h3>
                            </div>
                            <div class=\"panel-body recent-property-widget\">
                                <img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/ads.jpg"), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"panel panel-default sidebar-menu wow fadeInRight animated\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Smart search</h3>
                            </div>
                            <div class=\"panel-body search-widget\">
                                <form action=\"\" class=\" form-inline\">
                                    <fieldset>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Key word\">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">

                                                <select id=\"lunchBegins\" class=\"selectpicker\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Select Your City\">

                                                        <option>New york, CA</option>
                                                        <option>Paris</option>
                                                        <option>Casablanca</option>
                                                        <option>Tokyo</option>
                                                        <option>Marraekch</option>
                                                        <option>kyoto , shibua</option>
                                                    </select>
                                            </div>
                                            <div class=\"col-xs-6\">

                                                <select id=\"basic\" class=\"selectpicker show-tick form-control\">
                                                        <option> -Status- </option>
                                                        <option>Rent </option>
                                                        <option>Boy</option>
                                                        <option>used</option>

                                                    </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class=\"padding-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">
                                                <label for=\"price-range\">Price range (\$):</label>
                                                <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[0,450]\" id=\"price-range\"><br />
                                                <b class=\"pull-left color\">2000\$</b>
                                                <b class=\"pull-right color\">100000\$</b>
                                            </div>
                                            <div class=\"col-xs-6\">
                                                <label for=\"property-geo\">Property geo (m2) :</label>
                                                <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[50,450]\" id=\"property-geo\"><br />
                                                <b class=\"pull-left color\">40m</b>
                                                <b class=\"pull-right color\">12000m</b>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class=\"padding-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">
                                                <label for=\"price-range\">Min baths :</label>
                                                <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-baths\"><br />
                                                <b class=\"pull-left color\">1</b>
                                                <b class=\"pull-right color\">120</b>
                                            </div>

                                            <div class=\"col-xs-6\">
                                                <label for=\"property-geo\">Min bed :</label>
                                                <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"600\" data-slider-step=\"5\" data-slider-value=\"[250,450]\" id=\"min-bed\"><br />
                                                <b class=\"pull-left color\">1</b>
                                                <b class=\"pull-right color\">120</b>

                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class=\"padding-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">
                                                <div class=\"checkbox\">
                                                    <label> <input type=\"checkbox\" checked> Fire Place</label>
                                                </div>
                                            </div>

                                            <div class=\"col-xs-6\">
                                                <div class=\"checkbox\">
                                                    <label> <input type=\"checkbox\"> Dual Sinks</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class=\"padding-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">
                                                <div class=\"checkbox\">
                                                    <label> <input type=\"checkbox\" checked> Swimming Pool</label>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-6\">
                                                <div class=\"checkbox\">
                                                    <label> <input type=\"checkbox\" checked> 2 Stories </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class=\"padding-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">
                                                <div class=\"checkbox\">
                                                    <label><input type=\"checkbox\"> Laundry Room </label>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-6\">
                                                <div class=\"checkbox\">
                                                    <label> <input type=\"checkbox\"> Emergency Exit</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class=\"padding-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-6\">
                                                <div class=\"checkbox\">
                                                    <label>  <input type=\"checkbox\" checked> Jog Path </label>
                                                </div>
                                            </div>
                                            <div class=\"col-xs-6\">
                                                <div class=\"checkbox\">
                                                    <label>  <input type=\"checkbox\"> 26' Ceilings </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class=\"padding-5\">
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <div class=\"checkbox\">
                                                    <label>  <input type=\"checkbox\"> Hurricane Shutters </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class=\"row\">
                                            <div class=\"col-xs-12\">
                                                <input class=\"button btn largesearch-btn\" value=\"Search\" type=\"submit\">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "reservation/approuver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 366,  516 => 345,  499 => 331,  483 => 318,  467 => 305,  414 => 255,  391 => 235,  385 => 232,  379 => 229,  373 => 226,  367 => 223,  361 => 220,  355 => 217,  349 => 214,  333 => 201,  285 => 160,  274 => 156,  262 => 151,  246 => 138,  231 => 126,  224 => 122,  211 => 112,  198 => 102,  185 => 96,  178 => 92,  169 => 86,  162 => 82,  153 => 76,  146 => 72,  133 => 62,  123 => 55,  117 => 54,  105 => 45,  101 => 44,  96 => 42,  92 => 41,  87 => 39,  83 => 38,  78 => 36,  74 => 35,  44 => 8,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reservation/approuver.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/reservation/approuver.html.twig");
    }
}
