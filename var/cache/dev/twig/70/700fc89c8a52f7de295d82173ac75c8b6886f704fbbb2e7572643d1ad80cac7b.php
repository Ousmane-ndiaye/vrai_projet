<?php

/* base1.html.twig */
class __TwigTemplate_4cd5a20413dcb4641539b1ece8e02c7a22cf319bb455a0476a93efb01f7abb47 extends Twig_Template
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
        $__internal_d72c2e876f578999c5983e480d37c6ef387b38f1f34be2e12dfb8086223e1c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72c2e876f578999c5983e480d37c6ef387b38f1f34be2e12dfb8086223e1c37->enter($__internal_d72c2e876f578999c5983e480d37c6ef387b38f1f34be2e12dfb8086223e1c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_d70847091e599457cc688b9bbbbb8951af5b77b9f992769c192efeba17f50fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70847091e599457cc688b9bbbbb8951af5b77b9f992769c192efeba17f50fd4->enter($__internal_d70847091e599457cc688b9bbbbb8951af5b77b9f992769c192efeba17f50fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        // line 42
        echo "</head>

<body>
";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 659
        echo "<!--/.body-->
";
        // line 660
        $this->displayBlock('scripts', $context, $blocks);
        // line 702
        echo "</body>

</html>";
        
        $__internal_d72c2e876f578999c5983e480d37c6ef387b38f1f34be2e12dfb8086223e1c37->leave($__internal_d72c2e876f578999c5983e480d37c6ef387b38f1f34be2e12dfb8086223e1c37_prof);

        
        $__internal_d70847091e599457cc688b9bbbbb8951af5b77b9f992769c192efeba17f50fd4->leave($__internal_d70847091e599457cc688b9bbbbb8951af5b77b9f992769c192efeba17f50fd4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_248a58eedf89e1d7c3bcecb3e9b0ac3c813dadaca8bc1ac2279c5453f832a78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248a58eedf89e1d7c3bcecb3e9b0ac3c813dadaca8bc1ac2279c5453f832a78e->enter($__internal_248a58eedf89e1d7c3bcecb3e9b0ac3c813dadaca8bc1ac2279c5453f832a78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80b1d53b1d653bbe5e1e48365448953790674da92ca2ec90ad774e2b4517cdab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b1d53b1d653bbe5e1e48365448953790674da92ca2ec90ad774e2b4517cdab->enter($__internal_80b1d53b1d653bbe5e1e48365448953790674da92ca2ec90ad774e2b4517cdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title>Soultana - Dashboard</title>
    ";
        
        $__internal_80b1d53b1d653bbe5e1e48365448953790674da92ca2ec90ad774e2b4517cdab->leave($__internal_80b1d53b1d653bbe5e1e48365448953790674da92ca2ec90ad774e2b4517cdab_prof);

        
        $__internal_248a58eedf89e1d7c3bcecb3e9b0ac3c813dadaca8bc1ac2279c5453f832a78e->leave($__internal_248a58eedf89e1d7c3bcecb3e9b0ac3c813dadaca8bc1ac2279c5453f832a78e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce8461ccf1fa9841ddc9d6efe2f6370970b07e7a94a8fa7c820b0688e17cc2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8461ccf1fa9841ddc9d6efe2f6370970b07e7a94a8fa7c820b0688e17cc2be->enter($__internal_ce8461ccf1fa9841ddc9d6efe2f6370970b07e7a94a8fa7c820b0688e17cc2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a79175c030f140ed64bf9aa24fe16d9cc757d1cef1bc7eb2949fc66469a85d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79175c030f140ed64bf9aa24fe16d9cc757d1cef1bc7eb2949fc66469a85d26->enter($__internal_a79175c030f140ed64bf9aa24fe16d9cc757d1cef1bc7eb2949fc66469a85d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/contratdelocation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/print.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("table/vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("table/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("table/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("table/css/util.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("table/css/main.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->

    ";
        // line 33
        echo "    ";
        // line 34
        echo "
    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    ";
        
        $__internal_a79175c030f140ed64bf9aa24fe16d9cc757d1cef1bc7eb2949fc66469a85d26->leave($__internal_a79175c030f140ed64bf9aa24fe16d9cc757d1cef1bc7eb2949fc66469a85d26_prof);

        
        $__internal_ce8461ccf1fa9841ddc9d6efe2f6370970b07e7a94a8fa7c820b0688e17cc2be->leave($__internal_ce8461ccf1fa9841ddc9d6efe2f6370970b07e7a94a8fa7c820b0688e17cc2be_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_6487a0f2ab6036f5e52b2328c647875a65a7d4d3c5acf89ada74b93efa693c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6487a0f2ab6036f5e52b2328c647875a65a7d4d3c5acf89ada74b93efa693c04->enter($__internal_6487a0f2ab6036f5e52b2328c647875a65a7d4d3c5acf89ada74b93efa693c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c4529649f757665f44662ed4899be5239217523705e4e87c08f5b5338fa452c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4529649f757665f44662ed4899be5239217523705e4e87c08f5b5338fa452c->enter($__internal_5c4529649f757665f44662ed4899be5239217523705e4e87c08f5b5338fa452c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 128
        echo "

    ";
        // line 130
        $this->displayBlock('slidebar', $context, $blocks);
        // line 235
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    ";
        // line 236
        $this->displayBlock('main', $context, $blocks);
        // line 653
        echo "    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
";
        
        $__internal_5c4529649f757665f44662ed4899be5239217523705e4e87c08f5b5338fa452c->leave($__internal_5c4529649f757665f44662ed4899be5239217523705e4e87c08f5b5338fa452c_prof);

        
        $__internal_6487a0f2ab6036f5e52b2328c647875a65a7d4d3c5acf89ada74b93efa693c04->leave($__internal_6487a0f2ab6036f5e52b2328c647875a65a7d4d3c5acf89ada74b93efa693c04_prof);

    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        $__internal_c743065a27409a15a4b55eee77ab68e601afe911346813a6064e95a3dab5d8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c743065a27409a15a4b55eee77ab68e601afe911346813a6064e95a3dab5d8e5->enter($__internal_c743065a27409a15a4b55eee77ab68e601afe911346813a6064e95a3dab5d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_44794cae40df488d4ad4cfae54ba68a5190bf26030a4ed6dd1c2a2d0713ed240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44794cae40df488d4ad4cfae54ba68a5190bf26030a4ed6dd1c2a2d0713ed240->enter($__internal_44794cae40df488d4ad4cfae54ba68a5190bf26030a4ed6dd1c2a2d0713ed240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 47
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
                                        <br /><small class=\"text-muted\">1:24 pm - 25/03/2015</small>
                                    </div>
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
        
        $__internal_44794cae40df488d4ad4cfae54ba68a5190bf26030a4ed6dd1c2a2d0713ed240->leave($__internal_44794cae40df488d4ad4cfae54ba68a5190bf26030a4ed6dd1c2a2d0713ed240_prof);

        
        $__internal_c743065a27409a15a4b55eee77ab68e601afe911346813a6064e95a3dab5d8e5->leave($__internal_c743065a27409a15a4b55eee77ab68e601afe911346813a6064e95a3dab5d8e5_prof);

    }

    // line 130
    public function block_slidebar($context, array $blocks = array())
    {
        $__internal_7dc6b04f2e511ddb65e594039ded5fb7a0538ecd5f165b7b7d309a4f0e8b757c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc6b04f2e511ddb65e594039ded5fb7a0538ecd5f165b7b7d309a4f0e8b757c->enter($__internal_7dc6b04f2e511ddb65e594039ded5fb7a0538ecd5f165b7b7d309a4f0e8b757c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        $__internal_5725607a85fe2555c168c81b7d01552a10d31d3b22214e63504de21f5c7b3899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5725607a85fe2555c168c81b7d01552a10d31d3b22214e63504de21f5c7b3899->enter($__internal_5725607a85fe2555c168c81b7d01552a10d31d3b22214e63504de21f5c7b3899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        // line 131
        echo "    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/images/photo-profil/client-face2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"photo profil\">
            </div>
            <div class=\"profile-usertitle\" id=\"utilisateur\">
                <div class=\"profile-usertitle-name\" style=\"color: #30a5ff; font-size: 13px; font-weight: bold;\">Nom d'utilisateur</div>
                <div class=\"profile-usertitle-status\" style=\"\"><span class=\"indicator label-success\"></span>En ligne</div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"divider\"></div>
        <form role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            </div>
        </form>
        ";
        // line 180
        echo "        <ul class=\"nav menu\" id=\"menu_nav\">
            <li ";
        // line 181
        $this->displayBlock('accueil', $context, $blocks);
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_accueil");
        echo "\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li class=\"parent menu_bien\">
                <a data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"\">
                    <em class=\"fa fa-navicon\">&nbsp;</em> Bien <span data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"icon pull-right\"><em class=\"fa fa-plus\"></em></span>
                </a>
                <ul class=\"children collapse\" id=\"sub-item-1\">
                    <li>
                        <a class=\"lesSousBien\" id=\"villeDesBiens\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Ville
                        </a>
                    </li>
                    <li>
                        <a class=\"lesSousBien\" id=\"quartierDesBiens\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Quartier
                        </a>
                    </li>
                    <li>
                        <a class=\"lesSousBien\" id=\"typeBienDesBiens\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Type de bien
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li ";
        // line 206
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
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    ";
        
        $__internal_5725607a85fe2555c168c81b7d01552a10d31d3b22214e63504de21f5c7b3899->leave($__internal_5725607a85fe2555c168c81b7d01552a10d31d3b22214e63504de21f5c7b3899_prof);

        
        $__internal_7dc6b04f2e511ddb65e594039ded5fb7a0538ecd5f165b7b7d309a4f0e8b757c->leave($__internal_7dc6b04f2e511ddb65e594039ded5fb7a0538ecd5f165b7b7d309a4f0e8b757c_prof);

    }

    // line 181
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_3dce4eacb5a9da508d894e5af2c365071dcf220af571f9ac4515df617bbacb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dce4eacb5a9da508d894e5af2c365071dcf220af571f9ac4515df617bbacb46->enter($__internal_3dce4eacb5a9da508d894e5af2c365071dcf220af571f9ac4515df617bbacb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_9f453db5d63a6c3cd256c71c9ba679310e20740d2fb7c399ddaa1131261ef80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f453db5d63a6c3cd256c71c9ba679310e20740d2fb7c399ddaa1131261ef80d->enter($__internal_9f453db5d63a6c3cd256c71c9ba679310e20740d2fb7c399ddaa1131261ef80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        echo " class=\"active\" ";
        
        $__internal_9f453db5d63a6c3cd256c71c9ba679310e20740d2fb7c399ddaa1131261ef80d->leave($__internal_9f453db5d63a6c3cd256c71c9ba679310e20740d2fb7c399ddaa1131261ef80d_prof);

        
        $__internal_3dce4eacb5a9da508d894e5af2c365071dcf220af571f9ac4515df617bbacb46->leave($__internal_3dce4eacb5a9da508d894e5af2c365071dcf220af571f9ac4515df617bbacb46_prof);

    }

    // line 206
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_c8ce6486ba7928ba5f075a0de37a702db9fefb61b44dd976138de52ae28d0681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ce6486ba7928ba5f075a0de37a702db9fefb61b44dd976138de52ae28d0681->enter($__internal_c8ce6486ba7928ba5f075a0de37a702db9fefb61b44dd976138de52ae28d0681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_7539da083534921396a9e63e7d4e353b4bfda250e5e919a60207b405a2dd18e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7539da083534921396a9e63e7d4e353b4bfda250e5e919a60207b405a2dd18e3->enter($__internal_7539da083534921396a9e63e7d4e353b4bfda250e5e919a60207b405a2dd18e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        echo " class=\"active\" ";
        
        $__internal_7539da083534921396a9e63e7d4e353b4bfda250e5e919a60207b405a2dd18e3->leave($__internal_7539da083534921396a9e63e7d4e353b4bfda250e5e919a60207b405a2dd18e3_prof);

        
        $__internal_c8ce6486ba7928ba5f075a0de37a702db9fefb61b44dd976138de52ae28d0681->leave($__internal_c8ce6486ba7928ba5f075a0de37a702db9fefb61b44dd976138de52ae28d0681_prof);

    }

    // line 236
    public function block_main($context, array $blocks = array())
    {
        $__internal_d0bd0104de7d99d27c3471a25a86fb1dfba91d096bac7aa670c0828ed88a46a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bd0104de7d99d27c3471a25a86fb1dfba91d096bac7aa670c0828ed88a46a9->enter($__internal_d0bd0104de7d99d27c3471a25a86fb1dfba91d096bac7aa670c0828ed88a46a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_9a77531c80206656c47808a81d82899d59bbae4a0b74abca3637b01d69d56465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a77531c80206656c47808a81d82899d59bbae4a0b74abca3637b01d69d56465->enter($__internal_9a77531c80206656c47808a81d82899d59bbae4a0b74abca3637b01d69d56465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 237
        echo "        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\"> ";
        // line 244
        $this->displayBlock('titre_page_li', $context, $blocks);
        echo " </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\"> ";
        // line 250
        $this->displayBlock('titre_page_h1', $context, $blocks);
        echo " </h1>
            </div>
        </div>
        <!--/.row-->
        <div id=\"charge_page\">
            ";
        // line 255
        $this->displayBlock('contenus', $context, $blocks);
        // line 650
        echo "        </div>
        <!--/.contenus-->
    ";
        
        $__internal_9a77531c80206656c47808a81d82899d59bbae4a0b74abca3637b01d69d56465->leave($__internal_9a77531c80206656c47808a81d82899d59bbae4a0b74abca3637b01d69d56465_prof);

        
        $__internal_d0bd0104de7d99d27c3471a25a86fb1dfba91d096bac7aa670c0828ed88a46a9->leave($__internal_d0bd0104de7d99d27c3471a25a86fb1dfba91d096bac7aa670c0828ed88a46a9_prof);

    }

    // line 244
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_e3ac30b388d02501cfbf7742e732583b1ad4e2eadb1cd7178a93353b3cfd8ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ac30b388d02501cfbf7742e732583b1ad4e2eadb1cd7178a93353b3cfd8ded->enter($__internal_e3ac30b388d02501cfbf7742e732583b1ad4e2eadb1cd7178a93353b3cfd8ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_c02cd4729a572e2b68a7b51c64a277077ffb957fc160bdbb0d12f1c394398196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02cd4729a572e2b68a7b51c64a277077ffb957fc160bdbb0d12f1c394398196->enter($__internal_c02cd4729a572e2b68a7b51c64a277077ffb957fc160bdbb0d12f1c394398196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        echo " tableau de bord ";
        
        $__internal_c02cd4729a572e2b68a7b51c64a277077ffb957fc160bdbb0d12f1c394398196->leave($__internal_c02cd4729a572e2b68a7b51c64a277077ffb957fc160bdbb0d12f1c394398196_prof);

        
        $__internal_e3ac30b388d02501cfbf7742e732583b1ad4e2eadb1cd7178a93353b3cfd8ded->leave($__internal_e3ac30b388d02501cfbf7742e732583b1ad4e2eadb1cd7178a93353b3cfd8ded_prof);

    }

    // line 250
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_b581d5ffb26d82f7cd5ada594b4a216085030d8f506b2fe89755faa2b48866a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b581d5ffb26d82f7cd5ada594b4a216085030d8f506b2fe89755faa2b48866a8->enter($__internal_b581d5ffb26d82f7cd5ada594b4a216085030d8f506b2fe89755faa2b48866a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_67d4ec1119c888105be9bbc01dd6acf1eecd819a6b8f56122547d59cbb41e392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d4ec1119c888105be9bbc01dd6acf1eecd819a6b8f56122547d59cbb41e392->enter($__internal_67d4ec1119c888105be9bbc01dd6acf1eecd819a6b8f56122547d59cbb41e392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        echo " Tableau de bord ";
        
        $__internal_67d4ec1119c888105be9bbc01dd6acf1eecd819a6b8f56122547d59cbb41e392->leave($__internal_67d4ec1119c888105be9bbc01dd6acf1eecd819a6b8f56122547d59cbb41e392_prof);

        
        $__internal_b581d5ffb26d82f7cd5ada594b4a216085030d8f506b2fe89755faa2b48866a8->leave($__internal_b581d5ffb26d82f7cd5ada594b4a216085030d8f506b2fe89755faa2b48866a8_prof);

    }

    // line 255
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_4edec5bfafe384e2cdbc116f64ab09974b8f080c149db9cf7aa8741ae0bb6975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4edec5bfafe384e2cdbc116f64ab09974b8f080c149db9cf7aa8741ae0bb6975->enter($__internal_4edec5bfafe384e2cdbc116f64ab09974b8f080c149db9cf7aa8741ae0bb6975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_58229ca4962df1a23ee28a0da87f8e0564642e2b7b88e7295f69acd4e4d8b256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58229ca4962df1a23ee28a0da87f8e0564642e2b7b88e7295f69acd4e4d8b256->enter($__internal_58229ca4962df1a23ee28a0da87f8e0564642e2b7b88e7295f69acd4e4d8b256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 256
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
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                        </div>
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
        
        $__internal_58229ca4962df1a23ee28a0da87f8e0564642e2b7b88e7295f69acd4e4d8b256->leave($__internal_58229ca4962df1a23ee28a0da87f8e0564642e2b7b88e7295f69acd4e4d8b256_prof);

        
        $__internal_4edec5bfafe384e2cdbc116f64ab09974b8f080c149db9cf7aa8741ae0bb6975->leave($__internal_4edec5bfafe384e2cdbc116f64ab09974b8f080c149db9cf7aa8741ae0bb6975_prof);

    }

    // line 660
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_02cdd39a81df9c893f973b2fbd5c74a4afbe627c6479e70ab97c81fb6b538c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cdd39a81df9c893f973b2fbd5c74a4afbe627c6479e70ab97c81fb6b538c1e->enter($__internal_02cdd39a81df9c893f973b2fbd5c74a4afbe627c6479e70ab97c81fb6b538c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_2f4f9ee97fe82f9eecdc9cf3836410023c8378aa6eeef10dedc7da330a947ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4f9ee97fe82f9eecdc9cf3836410023c8378aa6eeef10dedc7da330a947ff5->enter($__internal_2f4f9ee97fe82f9eecdc9cf3836410023c8378aa6eeef10dedc7da330a947ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 661
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/monscript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/biens_sousbiens.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/print.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("table/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("table/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <!--===============================================================================================-->
    <script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("table/vendor/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
    <script>

    </script>
    <!--===============================================================================================-->
    <script src=\"admin/table/js/main.js')}}\"></script>
    <script>
        window.onload = function() {
            var chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: \"rgba(0,0,0,.2)\",
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                scaleFontColor: \"#c5c7cc\"
            });
            \$('.js-pscroll').each(function() {
                var ps = new PerfectScrollbar(this);

                \$(window).on('resize', function() {
                    ps.update();
                });
            });
        };
    </script>
";
        
        $__internal_2f4f9ee97fe82f9eecdc9cf3836410023c8378aa6eeef10dedc7da330a947ff5->leave($__internal_2f4f9ee97fe82f9eecdc9cf3836410023c8378aa6eeef10dedc7da330a947ff5_prof);

        
        $__internal_02cdd39a81df9c893f973b2fbd5c74a4afbe627c6479e70ab97c81fb6b538c1e->leave($__internal_02cdd39a81df9c893f973b2fbd5c74a4afbe627c6479e70ab97c81fb6b538c1e_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1025 => 677,  1020 => 675,  1015 => 673,  1010 => 671,  1006 => 670,  1002 => 669,  998 => 668,  994 => 667,  990 => 666,  986 => 665,  982 => 664,  978 => 663,  974 => 662,  969 => 661,  960 => 660,  557 => 256,  548 => 255,  530 => 250,  512 => 244,  500 => 650,  498 => 255,  490 => 250,  481 => 244,  472 => 237,  463 => 236,  445 => 206,  427 => 181,  412 => 230,  383 => 206,  353 => 181,  350 => 180,  333 => 134,  328 => 131,  319 => 130,  229 => 47,  220 => 46,  205 => 653,  203 => 236,  200 => 235,  198 => 130,  194 => 128,  191 => 46,  182 => 45,  165 => 34,  163 => 33,  157 => 28,  153 => 27,  148 => 25,  143 => 23,  138 => 21,  132 => 18,  128 => 17,  124 => 16,  120 => 15,  116 => 14,  112 => 13,  108 => 12,  103 => 11,  94 => 10,  83 => 8,  74 => 7,  62 => 702,  60 => 660,  57 => 659,  55 => 45,  50 => 42,  47 => 10,  45 => 7,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block title %}
    <title>Soultana - Dashboard</title>
    {% endblock %}
    {% block stylesheets %}
    <link href=\"{{asset('admin/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/datepicker3.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/monstyle.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/contratdelocation.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/print.min.css')}}\" rel=\"stylesheet\">

    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('table/vendor/animate/animate.css')}}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('table/vendor/select2/select2.min.css')}}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('table/vendor/perfect-scrollbar/perfect-scrollbar.css')}}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('table/css/util.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('table/css/main.css')}}\">
    <!--===============================================================================================-->

    {# <script type=\"text/javascript\" src=\"{{asset('DataTables/datatables.min.js')}}\"></script>
    <link rel=\"stylesheet\" href=\"{{asset('DataTables/datatables.min.css')}}\" type=\"text/css\"/> #}
    {# <script src=\"{{asset('admin/js/jquery-1.11.1.min.js')}}\"></script> #}

    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    {% endblock %}
</head>

<body>
{% block body %}
    {% block header %}
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
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
                                        <br /><small class=\"text-muted\">1:24 pm - 25/03/2015</small>
                                    </div>
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
    {% endblock %}


    {% block slidebar %}
    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"{{asset('admin/images/photo-profil/client-face2.png')}}\" class=\"img-responsive\" alt=\"photo profil\">
            </div>
            <div class=\"profile-usertitle\" id=\"utilisateur\">
                <div class=\"profile-usertitle-name\" style=\"color: #30a5ff; font-size: 13px; font-weight: bold;\">Nom d'utilisateur</div>
                <div class=\"profile-usertitle-status\" style=\"\"><span class=\"indicator label-success\"></span>En ligne</div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"divider\"></div>
        <form role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            </div>
        </form>
        {# PAGINATION
        For this pagination to work properly, we need to be sure to set
        the paginateBase variable in the template we are including the
        pagination in.

        {% set paginateBase = \"/blog/p\" %}

        {% if pageInfo.totalPages > 1 %}
        <ul>
            {% if pageInfo.currentPage != \"1\"  %}
                <li><a href=\"{{ paginateBase ~ '1' }}\">First Page</a></li>
            {% endif %}

            {% if pageInfo.prevUrl %}
                <li><a href=\"{{ pageInfo.prevUrl }}\">Previous Page</a></li>
            {% endif %}

            {% for pageNumber in 1..pageInfo.totalPages %}
                <li {% if pageInfo.currentPage == pageNumber %}class=\"active-page\"{% endif %}>
                    <a href=\"{{ paginateBase ~ pageNumber }}\">{{ pageNumber }}</a>
                </li>
            {% endfor %}

            {% if pageInfo.nextUrl %}
                <li><a href=\"{{ pageInfo.nextUrl }}\">Next Page</a></li>
            {% endif %}

            {% if pageInfo.currentPage != pageInfo.total %}
                <li><a href=\"{{ paginateBase ~ pageInfo.total }}\">Last Page</a></li>
            {% endif %}
        </ul>
        {% endif %} #}
        <ul class=\"nav menu\" id=\"menu_nav\">
            <li {% block accueil %} class=\"active\" {% endblock %} ><a href=\"{{path('admin_accueil')}}\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li class=\"parent menu_bien\">
                <a data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"\">
                    <em class=\"fa fa-navicon\">&nbsp;</em> Bien <span data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"icon pull-right\"><em class=\"fa fa-plus\"></em></span>
                </a>
                <ul class=\"children collapse\" id=\"sub-item-1\">
                    <li>
                        <a class=\"lesSousBien\" id=\"villeDesBiens\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Ville
                        </a>
                    </li>
                    <li>
                        <a class=\"lesSousBien\" id=\"quartierDesBiens\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Quartier
                        </a>
                    </li>
                    <li>
                        <a class=\"lesSousBien\" id=\"typeBienDesBiens\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Type de bien
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li {% block reservation %} class=\"active\" {% endblock %}><a href=\"{{path('admin_reservation')}}\"><em class=\"fa fa-registered\">&nbsp;</em> Réservation</a></li>
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
            <li><a href=\"{{path('admin_index')}}\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    {% endblock %}
    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    {% block main %}
        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\"> {% block titre_page_li %} tableau de bord {% endblock %} </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\"> {% block titre_page_h1 %} Tableau de bord {% endblock %} </h1>
            </div>
        </div>
        <!--/.row-->
        <div id=\"charge_page\">
            {% block contenus %}
            <div class=\"panel panel-container\">
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
                            <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                        </div>
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
        {% endblock %}
        </div>
        <!--/.contenus-->
    {% endblock %}
    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
{% endblock %}
<!--/.body-->
{% block scripts %}
    <script src=\"{{asset('admin/js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/chart.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/chart-data.js')}}\"></script>
    <script src=\"{{asset('admin/js/easypiechart.js')}}\"></script>
    <script src=\"{{asset('admin/js/easypiechart-data.js')}}\"></script>
    <script src=\"{{asset('admin/js/bootstrap-datepicker.js')}}\"></script>
    <script src=\"{{asset('admin/js/custom.js')}}\"></script>
    <script src=\"{{asset('admin/js/monscript.js')}}\"></script>
    <script src=\"{{asset('admin/js/biens_sousbiens.js')}}\"></script>
    <script src=\"{{asset('admin/js/print.min.js')}}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{asset('table/vendor/bootstrap/js/popper.js')}}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{asset('table/vendor/select2/select2.min.js')}}\"></script>
    <!--===============================================================================================-->
    <script src=\"{{asset('table/vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}\"></script>
    <script>

    </script>
    <!--===============================================================================================-->
    <script src=\"admin/table/js/main.js')}}\"></script>
    <script>
        window.onload = function() {
            var chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: \"rgba(0,0,0,.2)\",
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                scaleFontColor: \"#c5c7cc\"
            });
            \$('.js-pscroll').each(function() {
                var ps = new PerfectScrollbar(this);

                \$(window).on('resize', function() {
                    ps.update();
                });
            });
        };
    </script>
{% endblock %}
</body>

</html>", "base1.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/base1.html.twig");
    }
}
