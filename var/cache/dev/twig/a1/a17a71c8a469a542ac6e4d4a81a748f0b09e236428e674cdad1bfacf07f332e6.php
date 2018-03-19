<?php

/* :admin:reservation.html.twig */
class __TwigTemplate_3ed7906d5f2e409372f9203a2d1ec3ea3762cd307c7b0ed0de42fb4a403491d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", ":admin:reservation.html.twig", 1);
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
        $__internal_cacd97ae89f8dcfa33f474215f9e369e2e4015aeaf9a661a462a12c8d09e3984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacd97ae89f8dcfa33f474215f9e369e2e4015aeaf9a661a462a12c8d09e3984->enter($__internal_cacd97ae89f8dcfa33f474215f9e369e2e4015aeaf9a661a462a12c8d09e3984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:reservation.html.twig"));

        $__internal_fadd88203fee147a208425c75e771cf413467d4cbd54b3db79a9c7b2e8eee7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadd88203fee147a208425c75e771cf413467d4cbd54b3db79a9c7b2e8eee7db->enter($__internal_fadd88203fee147a208425c75e771cf413467d4cbd54b3db79a9c7b2e8eee7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cacd97ae89f8dcfa33f474215f9e369e2e4015aeaf9a661a462a12c8d09e3984->leave($__internal_cacd97ae89f8dcfa33f474215f9e369e2e4015aeaf9a661a462a12c8d09e3984_prof);

        
        $__internal_fadd88203fee147a208425c75e771cf413467d4cbd54b3db79a9c7b2e8eee7db->leave($__internal_fadd88203fee147a208425c75e771cf413467d4cbd54b3db79a9c7b2e8eee7db_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_c6ac60b0194a9637e835db87642a76bfcecaf885290ae199791bd2abb39a8165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ac60b0194a9637e835db87642a76bfcecaf885290ae199791bd2abb39a8165->enter($__internal_c6ac60b0194a9637e835db87642a76bfcecaf885290ae199791bd2abb39a8165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_5cbe8b965d059fff12c141848d4ce2af39c69e9b14744aa90aef477c9f16186d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbe8b965d059fff12c141848d4ce2af39c69e9b14744aa90aef477c9f16186d->enter($__internal_5cbe8b965d059fff12c141848d4ce2af39c69e9b14744aa90aef477c9f16186d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_5cbe8b965d059fff12c141848d4ce2af39c69e9b14744aa90aef477c9f16186d->leave($__internal_5cbe8b965d059fff12c141848d4ce2af39c69e9b14744aa90aef477c9f16186d_prof);

        
        $__internal_c6ac60b0194a9637e835db87642a76bfcecaf885290ae199791bd2abb39a8165->leave($__internal_c6ac60b0194a9637e835db87642a76bfcecaf885290ae199791bd2abb39a8165_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_b79e80e01811984d1d2ebe6abb7f28a39d9e1cdea514c346833de3086efa51b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79e80e01811984d1d2ebe6abb7f28a39d9e1cdea514c346833de3086efa51b3->enter($__internal_b79e80e01811984d1d2ebe6abb7f28a39d9e1cdea514c346833de3086efa51b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_bbc9c1a2a38b68a744863fbdb5dfb769db8704c41939502c4b24a11d32849668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc9c1a2a38b68a744863fbdb5dfb769db8704c41939502c4b24a11d32849668->enter($__internal_bbc9c1a2a38b68a744863fbdb5dfb769db8704c41939502c4b24a11d32849668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    Réservation
";
        
        $__internal_bbc9c1a2a38b68a744863fbdb5dfb769db8704c41939502c4b24a11d32849668->leave($__internal_bbc9c1a2a38b68a744863fbdb5dfb769db8704c41939502c4b24a11d32849668_prof);

        
        $__internal_b79e80e01811984d1d2ebe6abb7f28a39d9e1cdea514c346833de3086efa51b3->leave($__internal_b79e80e01811984d1d2ebe6abb7f28a39d9e1cdea514c346833de3086efa51b3_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_2a1af8e11a58630335c6215ef5081b46c5dabdb629299fb1a9fd04c9706279eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1af8e11a58630335c6215ef5081b46c5dabdb629299fb1a9fd04c9706279eb->enter($__internal_2a1af8e11a58630335c6215ef5081b46c5dabdb629299fb1a9fd04c9706279eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_568f7df38f135e4ae5fa5675be5db8aedaa9427cb03f2263eb1cd3b4e63e9bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568f7df38f135e4ae5fa5675be5db8aedaa9427cb03f2263eb1cd3b4e63e9bd4->enter($__internal_568f7df38f135e4ae5fa5675be5db8aedaa9427cb03f2263eb1cd3b4e63e9bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    Gestion des réservations
";
        
        $__internal_568f7df38f135e4ae5fa5675be5db8aedaa9427cb03f2263eb1cd3b4e63e9bd4->leave($__internal_568f7df38f135e4ae5fa5675be5db8aedaa9427cb03f2263eb1cd3b4e63e9bd4_prof);

        
        $__internal_2a1af8e11a58630335c6215ef5081b46c5dabdb629299fb1a9fd04c9706279eb->leave($__internal_2a1af8e11a58630335c6215ef5081b46c5dabdb629299fb1a9fd04c9706279eb_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_f29b0da85471cd2a387de0f037e671ff5145aa27f78a680633c38db2077ce978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29b0da85471cd2a387de0f037e671ff5145aa27f78a680633c38db2077ce978->enter($__internal_f29b0da85471cd2a387de0f037e671ff5145aa27f78a680633c38db2077ce978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_c67e1fcd91a0baf368355d0b788046a19d762bff2a5506422b37c31b088b954a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67e1fcd91a0baf368355d0b788046a19d762bff2a5506422b37c31b088b954a->enter($__internal_c67e1fcd91a0baf368355d0b788046a19d762bff2a5506422b37c31b088b954a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
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
        
        $__internal_c67e1fcd91a0baf368355d0b788046a19d762bff2a5506422b37c31b088b954a->leave($__internal_c67e1fcd91a0baf368355d0b788046a19d762bff2a5506422b37c31b088b954a_prof);

        
        $__internal_f29b0da85471cd2a387de0f037e671ff5145aa27f78a680633c38db2077ce978->leave($__internal_f29b0da85471cd2a387de0f037e671ff5145aa27f78a680633c38db2077ce978_prof);

    }

    public function getTemplateName()
    {
        return ":admin:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 57,  200 => 54,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  180 => 49,  176 => 48,  172 => 47,  168 => 46,  165 => 45,  148 => 44,  114 => 12,  105 => 11,  94 => 9,  85 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
    Réservation
{% endblock %}
{% block titre_page_h1 %}
    Gestion des réservations
{% endblock %}
{% block contenus %}
<div class=\"row\" id=\"charge_reservation\">
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
                        {% for reservation in reservations %}
                        <tr>
                            <td scope=\"row\">{{ loop.index }}</td>
                            <td>{{ reservation.nomClient }}</td>
                            <td>{{ reservation.Client_email }}</td>
                            <td>{{ reservation.Client_telephone }}</d>
                            <td>{{ reservation.nomBien}}</td>
                            <td class=\"bien_photo\"><img src=\"{{ asset(reservation.chemin) }}\"/></td>
                            <td>{{ reservation.adresse}}</td>
                            <td>{{ reservation.prixLoc}} f</td>
                            <td><a class=\"btn btn-primary voir_detail\" data-idreservation=\"{{ reservation.Reservation_id }}\" data-idbien=\"{{ reservation.Bien_id }}\" data-idclient=\"{{ reservation.Client_id }}\" title=\"Voir les détails\">voir</a></td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
{% endblock %}", ":admin:reservation.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/reservation.html.twig");
    }
}
