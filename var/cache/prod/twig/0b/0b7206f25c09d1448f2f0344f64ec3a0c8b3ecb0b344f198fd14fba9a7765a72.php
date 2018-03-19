<?php

/* admin/index.html.twig */
class __TwigTemplate_f483be5e3d968a9eea0efe2c631754c7bd97b7976853b7c63d976c41020e06f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/index.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/index.html.twig");
    }
}
