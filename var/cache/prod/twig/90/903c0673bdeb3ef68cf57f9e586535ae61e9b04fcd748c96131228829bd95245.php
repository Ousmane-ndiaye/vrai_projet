<?php

/* admin/accueil.html.twig */
class __TwigTemplate_b78715f1202fed1460887d2a034e7b635900b49aa663f0843d13ed9d8b605036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/accueil.html.twig", 1);
        $this->blocks = array(
            'reservation' => array($this, 'block_reservation'),
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
    public function block_reservation($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/accueil.html.twig";
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
        return new Twig_Source("", "admin/accueil.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/accueil.html.twig");
    }
}
