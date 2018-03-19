<?php

/* admin/reservation.html.twig */
class __TwigTemplate_71396e975402626e7dee552dd5b903725bfc04747646c179b90c3c0e8bd1de23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/reservation.html.twig", 1);
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
        echo "<div class=\"row\" id=\"charge_reservation\">
    <div class=\"col-md-12\" id=\"tableau\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                Liste des demandes de réservation
                <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-{1:inverse} table-inverse table-responsive\" id=\"liste_reservation\">
                    <thead class=\"thead-inverse\">
                        <tr id=\"th_1\">
                            <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Client</th>
                            <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Bien</th>
                            <th style=\"width: 5%; height: 20px;\" colspan=\"1\">Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id=\"th_2\">
                            <!-- CLIENT -->
                            <td style=\"width: 2%;\">#</td>
                            <td style=\"width: 17%;\">Prénom & Nom</td>
                            <td style=\"width: 23%;\"> E-mail</td>
                            <td style=\"width: 8%;\">Téléphone</td>
                            <!-- /.CLIENT -->
                            <!-- BIEN -->
                            <td style=\"width: 15%;\">Nom</td>
                            <td style=\"width: 10%;\">Image</td>
                            <td style=\"width: 10%;\">Adresse</td>
                            <td style=\"width: 10%;\">Montant</td>
                            <td style=\"width: 5%;\">&nbsp;</td>
                            <!-- /.BIEN -->
                        </tr>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 45
            echo "                        <tr>
                            <td scope=\"row\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nomClient", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_telephone", array()), "html", null, true);
            echo "</d>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nomBien", array()), "html", null, true);
            echo "</td>
                            <td class=\"bien_photo\"><img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["reservation"], "chemin", array())), "html", null, true);
            echo "\"/></td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "adresse", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "prixLoc", array()), "html", null, true);
            echo " f</td>
                            <td><a class=\"btn btn-primary voir_detail\" data-idreservation=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Reservation_id", array()), "html", null, true);
            echo "\" data-idbien=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Bien_id", array()), "html", null, true);
            echo "\" data-idclient=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_id", array()), "html", null, true);
            echo "\" title=\"Voir les détails\">voir</a></td>
                        </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
";
    }

    public function getTemplateName()
    {
        return "admin/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  146 => 54,  142 => 53,  138 => 52,  134 => 51,  130 => 50,  126 => 49,  122 => 48,  118 => 47,  114 => 46,  111 => 45,  94 => 44,  60 => 12,  57 => 11,  52 => 9,  49 => 8,  44 => 6,  41 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/reservation.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/reservation.html.twig");
    }
}
