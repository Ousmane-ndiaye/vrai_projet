<?php

/* RESERVATIONBundle::layout.html.twig */
class __TwigTemplate_222f1b63373fa5bc0bc39865f5c202b4370ec044aa56df3003d598931c66f297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a81a01c0d7fd3013f97ead02b784d6822609eb45c9f2d06b323d1b1fdc1dc8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81a01c0d7fd3013f97ead02b784d6822609eb45c9f2d06b323d1b1fdc1dc8bd->enter($__internal_a81a01c0d7fd3013f97ead02b784d6822609eb45c9f2d06b323d1b1fdc1dc8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle::layout.html.twig"));

        $__internal_2ef7a5d8fa85bafef2d63a521800e2e1ba4ed570d7c4b87b7ea2760fbd36685d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef7a5d8fa85bafef2d63a521800e2e1ba4ed570d7c4b87b7ea2760fbd36685d->enter($__internal_2ef7a5d8fa85bafef2d63a521800e2e1ba4ed570d7c4b87b7ea2760fbd36685d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
            .bs-searchbox input {
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
</html>

";
        
        $__internal_a81a01c0d7fd3013f97ead02b784d6822609eb45c9f2d06b323d1b1fdc1dc8bd->leave($__internal_a81a01c0d7fd3013f97ead02b784d6822609eb45c9f2d06b323d1b1fdc1dc8bd_prof);

        
        $__internal_2ef7a5d8fa85bafef2d63a521800e2e1ba4ed570d7c4b87b7ea2760fbd36685d->leave($__internal_2ef7a5d8fa85bafef2d63a521800e2e1ba4ed570d7c4b87b7ea2760fbd36685d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_479cfe564111c6929d021781ee4786f487e16368e529f72ce643448f9a621d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479cfe564111c6929d021781ee4786f487e16368e529f72ce643448f9a621d87->enter($__internal_479cfe564111c6929d021781ee4786f487e16368e529f72ce643448f9a621d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af7d36508555ba300d272c753cdb9663c9c11bf3ba5dcf0827ecda3a00604e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7d36508555ba300d272c753cdb9663c9c11bf3ba5dcf0827ecda3a00604e67->enter($__internal_af7d36508555ba300d272c753cdb9663c9c11bf3ba5dcf0827ecda3a00604e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_af7d36508555ba300d272c753cdb9663c9c11bf3ba5dcf0827ecda3a00604e67->leave($__internal_af7d36508555ba300d272c753cdb9663c9c11bf3ba5dcf0827ecda3a00604e67_prof);

        
        $__internal_479cfe564111c6929d021781ee4786f487e16368e529f72ce643448f9a621d87->leave($__internal_479cfe564111c6929d021781ee4786f487e16368e529f72ce643448f9a621d87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e397b88a1e89dc351c4595e40f82a90fa9224dfa912f879df896d2d89623cf81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e397b88a1e89dc351c4595e40f82a90fa9224dfa912f879df896d2d89623cf81->enter($__internal_e397b88a1e89dc351c4595e40f82a90fa9224dfa912f879df896d2d89623cf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3b756d3f4e7c5c349ad433b7ad88e24f175250a18f76c9aff9583058adde066b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b756d3f4e7c5c349ad433b7ad88e24f175250a18f76c9aff9583058adde066b->enter($__internal_3b756d3f4e7c5c349ad433b7ad88e24f175250a18f76c9aff9583058adde066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"GARO is a real-estate template\">
        <meta name=\"author\" content=\"Kimarotec\">
        <meta name=\"keyword\" content=\"html5, css, bootstrap, property, real-estate theme , bootstrap template\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fontello.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/icon-7-stroke/css/helper.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icheck.min_all.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/price-range.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.transitions.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/lightslider.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/monstyle.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_3b756d3f4e7c5c349ad433b7ad88e24f175250a18f76c9aff9583058adde066b->leave($__internal_3b756d3f4e7c5c349ad433b7ad88e24f175250a18f76c9aff9583058adde066b_prof);

        
        $__internal_e397b88a1e89dc351c4595e40f82a90fa9224dfa912f879df896d2d89623cf81->leave($__internal_e397b88a1e89dc351c4595e40f82a90fa9224dfa912f879df896d2d89623cf81_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_b47354519438c57adf9af4953155a321b0140e3b44804f9987b0f93dd678eec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47354519438c57adf9af4953155a321b0140e3b44804f9987b0f93dd678eec0->enter($__internal_b47354519438c57adf9af4953155a321b0140e3b44804f9987b0f93dd678eec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fe7da73199b5b7746156ef914872062316a737d7ca732c12eaf49761131a7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe7da73199b5b7746156ef914872062316a737d7ca732c12eaf49761131a7ee->enter($__internal_0fe7da73199b5b7746156ef914872062316a737d7ca732c12eaf49761131a7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
        ";
        
        $__internal_0fe7da73199b5b7746156ef914872062316a737d7ca732c12eaf49761131a7ee->leave($__internal_0fe7da73199b5b7746156ef914872062316a737d7ca732c12eaf49761131a7ee_prof);

        
        $__internal_b47354519438c57adf9af4953155a321b0140e3b44804f9987b0f93dd678eec0->leave($__internal_b47354519438c57adf9af4953155a321b0140e3b44804f9987b0f93dd678eec0_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_586fff68880557976978f71855582cc3c233bd137ad96a17c34f3bf9830dc471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586fff68880557976978f71855582cc3c233bd137ad96a17c34f3bf9830dc471->enter($__internal_586fff68880557976978f71855582cc3c233bd137ad96a17c34f3bf9830dc471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9cb6205da6c073e53a199730648ec425b09d9c33d0808edad77bf2af72a8b989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb6205da6c073e53a199730648ec425b09d9c33d0808edad77bf2af72a8b989->enter($__internal_9cb6205da6c073e53a199730648ec425b09d9c33d0808edad77bf2af72a8b989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 55
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/price-range.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lightslider.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/monfichier.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function() {

                \$('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function() {
                        \$('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>
        ";
        
        $__internal_9cb6205da6c073e53a199730648ec425b09d9c33d0808edad77bf2af72a8b989->leave($__internal_9cb6205da6c073e53a199730648ec425b09d9c33d0808edad77bf2af72a8b989_prof);

        
        $__internal_586fff68880557976978f71855582cc3c233bd137ad96a17c34f3bf9830dc471->leave($__internal_586fff68880557976978f71855582cc3c233bd137ad96a17c34f3bf9830dc471_prof);

    }

    public function getTemplateName()
    {
        return "RESERVATIONBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 70,  273 => 69,  268 => 67,  264 => 66,  260 => 65,  255 => 63,  251 => 62,  246 => 60,  242 => 59,  237 => 57,  233 => 56,  228 => 55,  224 => 53,  218 => 51,  209 => 50,  198 => 48,  189 => 47,  177 => 36,  173 => 35,  169 => 34,  165 => 33,  161 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  98 => 7,  89 => 6,  72 => 5,  59 => 89,  56 => 50,  54 => 47,  41 => 38,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"GARO is a real-estate template\">
        <meta name=\"author\" content=\"Kimarotec\">
        <meta name=\"keyword\" content=\"html5, css, bootstrap, property, real-estate theme , bootstrap template\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <link rel=\"stylesheet\" href=\"{{asset('assets/css/normalize.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/font-awesome.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontello.css')}}\">
        <link href=\"{{asset('assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/fonts/icon-7-stroke/css/helper.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/css/animate.css')}}\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap-select.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('bootstrap/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/icheck.min_all.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/price-range.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.carousel.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.theme.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.transitions.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/lightslider.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/responsive.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/monstyle.css')}}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <style>
            .bs-searchbox input {
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        {% block body %}

        {% endblock %}
        {% block javascripts %}
        <script src=\"{{asset('assets/js/modernizr-2.6.2.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/jquery-1.10.2.min.js')}}\"></script>
        {# <script src=\"{{asset('assets/js/jquery-3.3.1.min.js')}}\"></script> #}
        <script src=\"{{asset('bootstrap/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap-select.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap-hover-dropdown.js')}}\"></script>

        <script src=\"{{asset('assets/js/easypiechart.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.easypiechart.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/owl.carousel.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/wow.js')}}\"></script>

        <script src=\"{{asset('assets/js/icheck.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/price-range.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/js/lightslider.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/main.js')}}\"></script>
        <script src=\"{{asset('assets/js/monfichier.js')}}\"></script>
        <script>
            \$(document).ready(function() {

                \$('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function() {
                        \$('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>
        {% endblock %}
    </body>
</html>

", "RESERVATIONBundle::layout.html.twig", "/var/www/html/File_Rouge/soultana.sn/src/SNT/ReservationBundle/Resources/views/layout.html.twig");
    }
}
