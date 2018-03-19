<?php

/* :admin:index.html.twig */
class __TwigTemplate_946b988a10d7a375c92e0055fd9f8c4dd70f20b56ae50d2c684b937e36a2bd52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", ":admin:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05bf83b9ea724c21a1fb9a1e10385762676056c33d325887508fc7992db9ca2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bf83b9ea724c21a1fb9a1e10385762676056c33d325887508fc7992db9ca2a->enter($__internal_05bf83b9ea724c21a1fb9a1e10385762676056c33d325887508fc7992db9ca2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_b77a813db0c5cb85994008560f35ec723d82ff6fbadf161d47be34a3b489bc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77a813db0c5cb85994008560f35ec723d82ff6fbadf161d47be34a3b489bc9c->enter($__internal_b77a813db0c5cb85994008560f35ec723d82ff6fbadf161d47be34a3b489bc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bf83b9ea724c21a1fb9a1e10385762676056c33d325887508fc7992db9ca2a->leave($__internal_05bf83b9ea724c21a1fb9a1e10385762676056c33d325887508fc7992db9ca2a_prof);

        
        $__internal_b77a813db0c5cb85994008560f35ec723d82ff6fbadf161d47be34a3b489bc9c->leave($__internal_b77a813db0c5cb85994008560f35ec723d82ff6fbadf161d47be34a3b489bc9c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_edb8fb94b8d1af632d2f2b01a7eb93fd92050582a98b2d0e69d8db36ab21054b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb8fb94b8d1af632d2f2b01a7eb93fd92050582a98b2d0e69d8db36ab21054b->enter($__internal_edb8fb94b8d1af632d2f2b01a7eb93fd92050582a98b2d0e69d8db36ab21054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_43362c91695eeda1f6f93c597989d7134b6196f11dfc928bb523f212426228d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43362c91695eeda1f6f93c597989d7134b6196f11dfc928bb523f212426228d2->enter($__internal_43362c91695eeda1f6f93c597989d7134b6196f11dfc928bb523f212426228d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            <div class=\"panel-heading\">Connexion</div>
            <div class=\"panel-body\">
                <form action=\"#\" method=\"post\" data-form=\"form_connexion\">
                    <div class=\"alert alert-danger cacher\" id=\"form_connexion\">
                        <ul>
                        </ul>
                    </div>
                    <fieldset>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" data-champ=\"E-mail\" autofocus=\"\">
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" data-champ=\"Mot de passe\" value=\"\">
                        </div>
                        <div class=\"checkbox\">
                            <label>
                                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Se souvenir de moi
                            </label>
                        </div>
                        <div class=\"text-left\">
                            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_43362c91695eeda1f6f93c597989d7134b6196f11dfc928bb523f212426228d2->leave($__internal_43362c91695eeda1f6f93c597989d7134b6196f11dfc928bb523f212426228d2_prof);

        
        $__internal_edb8fb94b8d1af632d2f2b01a7eb93fd92050582a98b2d0e69d8db36ab21054b->leave($__internal_edb8fb94b8d1af632d2f2b01a7eb93fd92050582a98b2d0e69d8db36ab21054b_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}
    <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            <div class=\"panel-heading\">Connexion</div>
            <div class=\"panel-body\">
                <form action=\"#\" method=\"post\" data-form=\"form_connexion\">
                    <div class=\"alert alert-danger cacher\" id=\"form_connexion\">
                        <ul>
                        </ul>
                    </div>
                    <fieldset>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" data-champ=\"E-mail\" autofocus=\"\">
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" data-champ=\"Mot de passe\" value=\"\">
                        </div>
                        <div class=\"checkbox\">
                            <label>
                                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Se souvenir de moi
                            </label>
                        </div>
                        <div class=\"text-left\">
                            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", ":admin:index.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/index.html.twig");
    }
}
