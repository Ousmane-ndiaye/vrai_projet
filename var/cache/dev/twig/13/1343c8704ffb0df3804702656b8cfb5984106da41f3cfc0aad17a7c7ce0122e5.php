<?php

/* :reservation:approuver.html.twig */
class __TwigTemplate_a90e39dcb0c8425530c551b2560819c4530034dd0bb76c5f0dabd152de6cb6ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:approuver.html.twig", 1);
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
        $__internal_6be6785f35eca4a736ff61ba8f34032cbb6cb4cb19d6d74819556fad0947d050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be6785f35eca4a736ff61ba8f34032cbb6cb4cb19d6d74819556fad0947d050->enter($__internal_6be6785f35eca4a736ff61ba8f34032cbb6cb4cb19d6d74819556fad0947d050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:approuver.html.twig"));

        $__internal_d3587e8fd6433f69b4cca809859fc7f3f112cf4f26512783c3543973b86ce2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3587e8fd6433f69b4cca809859fc7f3f112cf4f26512783c3543973b86ce2fb->enter($__internal_d3587e8fd6433f69b4cca809859fc7f3f112cf4f26512783c3543973b86ce2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:approuver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6be6785f35eca4a736ff61ba8f34032cbb6cb4cb19d6d74819556fad0947d050->leave($__internal_6be6785f35eca4a736ff61ba8f34032cbb6cb4cb19d6d74819556fad0947d050_prof);

        
        $__internal_d3587e8fd6433f69b4cca809859fc7f3f112cf4f26512783c3543973b86ce2fb->leave($__internal_d3587e8fd6433f69b4cca809859fc7f3f112cf4f26512783c3543973b86ce2fb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_07d56edf6daaf66266da1f66fe35bf656d01e71e40e8988460e2e76c2082cb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d56edf6daaf66266da1f66fe35bf656d01e71e40e8988460e2e76c2082cb77->enter($__internal_07d56edf6daaf66266da1f66fe35bf656d01e71e40e8988460e2e76c2082cb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e86d897342c694fcbd66f2745f63e2042f17dc3d2463d48bcd9303f09ffa51c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86d897342c694fcbd66f2745f63e2042f17dc3d2463d48bcd9303f09ffa51c2->enter($__internal_e86d897342c694fcbd66f2745f63e2042f17dc3d2463d48bcd9303f09ffa51c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation";
        
        $__internal_e86d897342c694fcbd66f2745f63e2042f17dc3d2463d48bcd9303f09ffa51c2->leave($__internal_e86d897342c694fcbd66f2745f63e2042f17dc3d2463d48bcd9303f09ffa51c2_prof);

        
        $__internal_07d56edf6daaf66266da1f66fe35bf656d01e71e40e8988460e2e76c2082cb77->leave($__internal_07d56edf6daaf66266da1f66fe35bf656d01e71e40e8988460e2e76c2082cb77_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_b7c9043509eb87c2438219547a77466c6c01f78ea73970c5af486be415dc1660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c9043509eb87c2438219547a77466c6c01f78ea73970c5af486be415dc1660->enter($__internal_b7c9043509eb87c2438219547a77466c6c01f78ea73970c5af486be415dc1660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_341cde64836b3123dc457da7a639526ded765546b3fa74cc5a5915ec75b47358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341cde64836b3123dc457da7a639526ded765546b3fa74cc5a5915ec75b47358->enter($__internal_341cde64836b3123dc457da7a639526ded765546b3fa74cc5a5915ec75b47358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 4
        echo "    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"page-head-content\">
                    <h1 class=\"page-title\">Superbe ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo "</h1>
                            <span class=\"property-price pull-right\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "prixLoc", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "surface", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "nbreChambre", array()), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "parking", array()) == false)) {
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "nbreSallebain", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "description", array()), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "meuble", array()) == false)) {
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
        if (($this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "balcon", array()) == false)) {
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
        if (($this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "parking", array()) == false)) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_connexion", array("idBien" => $this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), 0, array(), "array"), "id", array()))), "html", null, true);
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
        
        $__internal_341cde64836b3123dc457da7a639526ded765546b3fa74cc5a5915ec75b47358->leave($__internal_341cde64836b3123dc457da7a639526ded765546b3fa74cc5a5915ec75b47358_prof);

        
        $__internal_b7c9043509eb87c2438219547a77466c6c01f78ea73970c5af486be415dc1660->leave($__internal_b7c9043509eb87c2438219547a77466c6c01f78ea73970c5af486be415dc1660_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:approuver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 366,  546 => 345,  529 => 331,  513 => 318,  497 => 305,  444 => 255,  421 => 235,  415 => 232,  409 => 229,  403 => 226,  397 => 223,  391 => 220,  385 => 217,  379 => 214,  363 => 201,  315 => 160,  304 => 156,  292 => 151,  276 => 138,  261 => 126,  254 => 122,  241 => 112,  228 => 102,  215 => 96,  208 => 92,  199 => 86,  192 => 82,  183 => 76,  176 => 72,  163 => 62,  153 => 55,  147 => 54,  135 => 45,  131 => 44,  126 => 42,  122 => 41,  117 => 39,  113 => 38,  108 => 36,  104 => 35,  74 => 8,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Réservation{% endblock %}
{% block contenus %}
    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"page-head-content\">
                    <h1 class=\"page-title\">Superbe {{ biens[0].nomTypeBien }} </h1>
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
                                    <li data-thumb=\"{{asset('assets/img/property-1/property1.jpg')}}\">
                                        <img src=\"{{asset('assets/img/property-1/property1.jpg')}}\" />
                                    </li>
                                    <li data-thumb=\"{{asset('assets/img/property-1/property2.jpg')}}\">
                                        <img src=\"{{asset('assets/img/property-1/property3.jpg')}}\" />
                                    </li>
                                    <li data-thumb=\"{{asset('assets/img/property-1/property3.jpg')}}\">
                                        <img src=\"{{asset('assets/img/property-1/property3.jpg')}}\" />
                                    </li>
                                    <li data-thumb=\"{{asset('assets/img/property-1/property4.jpg')}}\">
                                        <img src=\"{{asset('assets/img/property-1/property4.jpg')}}\" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class=\"single-property-wrapper\">
                        <div class=\"single-property-header\">
                            <h1 class=\"property-title pull-left\">{{ biens[0].nomTypeBien }} à {{ biens[0].adresse }}</h1>
                            <span class=\"property-price pull-right\">{{ biens[0].prixLoc }} f</span>
                        </div>

                        <div class=\"property-meta entry-meta clearfix \">

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-tag\">
                                        <img src=\"{{asset('assets/img/icon/sale-orange.png')}}\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Status</span>
                                <span class=\"property-info-value\">À Louer</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info icon-area\">
                                        <img src=\"{{asset('assets/img/icon/room-orange.png')}}\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Surface</span>
                                <span class=\"property-info-value\">{{ biens[0].surface }}<b class=\"property-info-unit\"></b></span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-bed\">
                                        <img src=\"{{asset('assets/img/icon/bed-orange.png')}}\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Chambre à coucher</span>
                                <span class=\"property-info-value\">{{ biens[0].nbreChambre }}</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-bed\">
                                        <img src=\"{{asset('assets/img/icon/cars-orange.png')}}\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Garage</span>
                                <span class=\"property-info-value\">{% if biens[0].parking == false %}0{% else %}1{% endif %}</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-bath\">
                                        <img src=\"{{asset('assets/img/icon/os-orange.png')}}\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Bathrooms</span>
                                <span class=\"property-info-value\">3.5</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-garage\">
                                        <img src=\"{{asset('assets/img/icon/room-orange.png')}}\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Garages</span>
                                <span class=\"property-info-value\">2</span>
                                </span>
                            </div>

                            <div class=\"col-xs-6 col-sm-3 col-md-3 p-b-15\">
                                <span class=\"property-info-icon icon-garage\">
                                        <img src=\"{{asset('assets/img/icon/shawer-orange.png')}}\">
                                    </span>
                                <span class=\"property-info-entry\">
                                        <span class=\"property-info-label\">Salle de bain</span>
                                <span class=\"property-info-value\">{{ biens[0].nbreSallebain }}</span>
                                </span>
                            </div>


                        </div>
                        <!-- .property-meta -->

                        <div class=\"section\">
                            <h4 class=\"s-property-title\">Description</h4>
                            <div class=\"s-property-content\">
                                <p>
                                    {{ biens[0].description }}
                                </p>
                            </div>
                        </div>
                        <!-- End description area  -->

                        <div class=\"section additional-details\">

                            <h4 class=\"s-property-title\">Details Additionels</h4>

                            <ul class=\"additional-details-list clearfix\">
                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">Meublé</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">{% if biens[0].meuble == false %}Non{% else %}Oui{% endif %}</span>
                                </li>

                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">Balcon</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">{% if biens[0].balcon == false %}Non{% else %}Oui{% endif %}</span>
                                </li>
                                <li>
                                    <span class=\"col-xs-6 col-sm-4 col-md-4 add-d-title\">Parking</span>
                                    <span class=\"col-xs-6 col-sm-8 col-md-8 add-d-entry\">{% if biens[0].parking == false %}Non{% else %}Oui{% endif %}</span>
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
                                    <img src=\"{{asset('assets/img/property-video.jpg')}}\" class=\"img-responsive wp-post-image\" alt=\"Exterior\">
                                </a>
                            </div>
                        </div>
                        <!-- End video area  -->



                        <div class=\"section property-share\">
                            <h4 class=\"s-property-title\">Partager avec vos amis </h4>
                            <div class=\"roperty-social\">
                                <ul>
                                    <li>
                                        <a title=\"Share this on dribbble \" href=\"#\"><img src=\"{{asset('assets/img/social_big/dribbble_grey.png')}}\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on facebok \" href=\"#\"><img src=\"{{asset('assets/img/social_big/facebook_grey.png')}}\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on delicious \" href=\"#\"><img src=\"{{asset('assets/img/social_big/delicious_grey.png')}}\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on tumblr \" href=\"#\"><img src=\"{{asset('assets/img/social_big/tumblr_grey.png')}}\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on digg \" href=\"#\"><img src=\"{{asset('assets/img/social_big/digg_grey.png')}}\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on twitter \" href=\"#\"><img src=\"{{asset('assets/img/social_big/twitter_grey.png')}}\"></a>
                                    </li>
                                    <li>
                                        <a title=\"Share this on linkedin \" href=\"#\"><img src=\"{{asset('assets/img/social_big/linkedin_grey.png')}}\"></a>
                                    </li>
                                    <li class=\"row\">
                                        <a name=\"reserver\" id=\"reserver\" title=\"Réserver ce bien \" class=\"btn button_reserver col-12 col-sm-6\" href=\"{{path('reservation_connexion',{'idBien':biens[0].id})}}\" role=\"button\">RÉSERVER</a>
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
                                                <img src=\"{{asset('assets/img/client-face1.png')}}\" class=\"img-circle\">
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
                                            <a href=\"single.html\"><img src=\"{{asset('assets/img/demo/small-property-2.jpg')}}\"></a>
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
                                            <a href=\"single.html\"><img src=\"{{asset('assets/img/demo/small-property-1.jpg')}}\"></a>
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
                                            <a href=\"single.html\"><img src=\"{{asset('assets/img/demo/small-property-3.jpg')}}\"></a>
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
                                            <a href=\"single.html\"><img src=\"{{asset('assets/img/demo/small-property-2.jpg')}}\"></a>
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
                                <img src=\"{{asset('assets/img/ads.jpg')}}\">
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
{% endblock %}", ":reservation:approuver.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/reservation/approuver.html.twig");
    }
}
