<?php

/* base1.html.twig */
class __TwigTemplate_cca6f01a21b5e2cc80bce31d064971559cc023f465f665e295e200d7b1738c9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'slidebar' => array($this, 'block_slidebar'),
            'accueil' => array($this, 'block_accueil'),
            'reservation' => array($this, 'block_reservation'),
            'main' => array($this, 'block_main'),
            'titre_page_li' => array($this, 'block_titre_page_li'),
            'titre_page_h1' => array($this, 'block_titre_page_h1'),
            'contenus' => array($this, 'block_contenus'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "</head>

<body>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 590
        echo "<!--/.body-->
";
        // line 591
        $this->displayBlock('scripts', $context, $blocks);
        // line 614
        echo "</body>

</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    <title>Soultana - Dashboard</title>
    ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/monstyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/print.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 20
        echo "    ";
        // line 21
        echo "
    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    ";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 114
        echo "

    ";
        // line 116
        $this->displayBlock('slidebar', $context, $blocks);
        // line 167
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    ";
        // line 168
        $this->displayBlock('main', $context, $blocks);
        // line 584
        echo "    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><span>SOULTANA </span>Admin</a>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-envelope\"></em><span class=\"label label-danger\">15</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-messages\">
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">3 mins ago</small>
                                        <a href=\"#\"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                        <br /><small class=\"text-muted\">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">1 hour ago</small>
                                        <a href=\"#\">New message from <strong>Jane Doe</strong>.</a>
                                        <br /><small class=\"text-muted\">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"all-button\">
                                    <a href=\"#\">
                                        <em class=\"fa fa-inbox\"></em> <strong>All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-bell\"></em><span class=\"label label-info\">5</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-alerts\">
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-envelope\"></em> 1 New Message
                                        <span class=\"pull-right text-muted small\">3 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-heart\"></em> 12 New Likes
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-user\"></em> 5 New Followers
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    ";
    }

    // line 116
    public function block_slidebar($context, array $blocks = array())
    {
        // line 117
        echo "    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/images/photo-profil/client-face2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"photo profil\">
            </div>
            <div class=\"profile-usertitle\" id=\"utilisateur\">
                <div class=\"profile-usertitle-name\" style=\"color: #30a5ff; font-size: 14px; font-weight: bold;\">Nom d'utilisateur</div>
                <div class=\"profile-usertitle-status\"><span class=\"indicator label-success\"></span>En ligne</div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"divider\"></div>
        <form role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            </div>
        </form>
        <ul class=\"nav menu\" id=\"menu_nav\">
            <li ";
        // line 135
        $this->displayBlock('accueil', $context, $blocks);
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_accueil");
        echo "\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li ";
        // line 138
        $this->displayBlock('reservation', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation");
        echo "\"><em class=\"fa fa-registered\">&nbsp;</em> Réservation</a></li>
            <li><a href=\"panels.html\" class=\"\"><em class=\"fa fa-clone\">&nbsp;</em> Alerts &amp; Panels</a></li>
            <li class=\"parent \">
                <a data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"\">
                    <em class=\"fa fa-navicon\">&nbsp;</em> Multilevel <span data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"icon pull-right\"><em class=\"fa fa-plus\"></em></span>
                </a>
                <ul class=\"children collapse\" id=\"sub-item-1\">
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 1
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 2
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 3
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href=\"";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    ";
    }

    // line 135
    public function block_accueil($context, array $blocks = array())
    {
        echo " class=\"active\" ";
    }

    // line 138
    public function block_reservation($context, array $blocks = array())
    {
        echo " class=\"active\" ";
    }

    // line 168
    public function block_main($context, array $blocks = array())
    {
        // line 169
        echo "        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\"> ";
        // line 176
        $this->displayBlock('titre_page_li', $context, $blocks);
        echo " </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\"> ";
        // line 182
        $this->displayBlock('titre_page_h1', $context, $blocks);
        echo " </h1>
            </div>
        </div>
        <!--/.row-->
        <div id=\"charge_page\">
            ";
        // line 187
        $this->displayBlock('contenus', $context, $blocks);
        // line 581
        echo "        </div>
        <!--/.contenus-->
    ";
    }

    // line 176
    public function block_titre_page_li($context, array $blocks = array())
    {
        echo " tableau de bord ";
    }

    // line 182
    public function block_titre_page_h1($context, array $blocks = array())
    {
        echo " Tableau de bord ";
    }

    // line 187
    public function block_contenus($context, array $blocks = array())
    {
        // line 188
        echo "            <div class=\"panel panel-container\">
                <div class=\"row\">
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-teal panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-shopping-cart color-blue\"></em>
                                <div class=\"large\">120</div>
                                <div class=\"text-muted\">New Orders</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-blue panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-comments color-orange\"></em>
                                <div class=\"large\">52</div>
                                <div class=\"text-muted\">Comments</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-orange panel-widget border-right\">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-users color-teal\"></em>
                                <div class=\"large\">24</div>
                                <div class=\"text-muted\">New Users</div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                        <div class=\"panel panel-red panel-widget \">
                            <div class=\"row no-padding\"><em class=\"fa fa-xl fa-search color-red\"></em>
                                <div class=\"large\">25.2k</div>
                                <div class=\"text-muted\">Page Views</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Site Traffic Overview
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <div class=\"canvas-wrapper\">
                                <canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class=\"row\">
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>New Orders</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\"><span class=\"percent\">92%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>Comments</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\"><span class=\"percent\">65%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>New Users</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\"><span class=\"percent\">56%</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body easypiechart-panel\">
                            <h4>Visitors</h4>
                            <div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\"><span class=\"percent\">27%</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"panel panel-default chat\">
                        <div class=\"panel-heading\">
                            Chat
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <ul>
                                <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
                                    <img src=\"http://placehold.it/60/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" /><span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-chat\">Send</button>
                            </span></div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            To-do List
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body\">
                            <ul class=\"todo-list\">
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-1\" />
                                        <label for=\"checkbox-1\">Make coffee</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-2\" />
                                        <label for=\"checkbox-2\">Check emails</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-3\" />
                                        <label for=\"checkbox-3\">Reply to Jane</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-4\" />
                                        <label for=\"checkbox-4\">Make more coffee</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-5\" />
                                        <label for=\"checkbox-5\">Work on the new design</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                                <li class=\"todo-list-item\">
                                    <div class=\"checkbox\">
                                        <input type=\"checkbox\" id=\"checkbox-6\" />
                                        <label for=\"checkbox-6\">Get feedback on design</label>
                                    </div>
                                    <div class=\"pull-right action-buttons\">
                                        <a href=\"#\" class=\"trash\">
                                            <em class=\"fa fa-trash\"></em>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"input-group\">
                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" /><span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
                            </span></div>
                        </div>
                    </div>
                </div>
                <!--/.col-->


                <div class=\"col-md-6\">
                    <div class=\"panel panel-default \">
                        <div class=\"panel-heading\">
                            Timeline
                            <ul class=\"pull-right panel-settings panel-button-tab-right\">
                                <li class=\"dropdown\">
                                    <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <em class=\"fa fa-cogs\"></em>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right\">
                                        <li>
                                            <ul class=\"dropdown-settings\">
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 1
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 2
                                                    </a>
                                                </li>
                                                <li class=\"divider\"></li>
                                                <li>
                                                    <a href=\"#\">
                                                        <em class=\"fa fa-cog\"></em> Settings 3
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                        <div class=\"panel-body timeline-container\">
                            <ul class=\"timeline\">
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-pushpin\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge primary\"><em class=\"glyphicon glyphicon-link\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-camera\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-paperclip\"></em></div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->
        ";
    }

    // line 591
    public function block_scripts($context, array $blocks = array())
    {
        // line 592
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/monscript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/print.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        window.onload = function() {
            var chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: \"rgba(0,0,0,.2)\",
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                scaleFontColor: \"#c5c7cc\"
            });
        };
    </script>
";
    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  799 => 601,  795 => 600,  791 => 599,  787 => 598,  783 => 597,  779 => 596,  775 => 595,  771 => 594,  767 => 593,  762 => 592,  759 => 591,  363 => 188,  360 => 187,  354 => 182,  348 => 176,  342 => 581,  340 => 187,  332 => 182,  323 => 176,  314 => 169,  311 => 168,  305 => 138,  299 => 135,  290 => 162,  261 => 138,  253 => 135,  235 => 120,  230 => 117,  227 => 116,  144 => 34,  141 => 33,  132 => 584,  130 => 168,  127 => 167,  125 => 116,  121 => 114,  118 => 33,  115 => 32,  104 => 21,  102 => 20,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  73 => 11,  70 => 10,  65 => 8,  62 => 7,  56 => 614,  54 => 591,  51 => 590,  49 => 32,  44 => 29,  41 => 10,  39 => 7,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base1.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/base1.html.twig");
    }
}
