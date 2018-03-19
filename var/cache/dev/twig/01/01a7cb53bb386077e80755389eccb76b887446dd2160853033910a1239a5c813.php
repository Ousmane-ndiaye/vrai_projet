<?php

/* admin/accueil.html.twig */
class __TwigTemplate_ea46664aabeccd3da7341480fff545441ec789321de69c953e14fd49be61acea extends Twig_Template
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
        $__internal_8f5f39e3b826d2faa270b214d321dbb6f77d4a3272a28f1cd8845cd11f89f408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5f39e3b826d2faa270b214d321dbb6f77d4a3272a28f1cd8845cd11f89f408->enter($__internal_8f5f39e3b826d2faa270b214d321dbb6f77d4a3272a28f1cd8845cd11f89f408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/accueil.html.twig"));

        $__internal_0348025b994ba9c7b6a6ff03728d08e1b5427b4d214909b821c1909e56db2e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0348025b994ba9c7b6a6ff03728d08e1b5427b4d214909b821c1909e56db2e10->enter($__internal_0348025b994ba9c7b6a6ff03728d08e1b5427b4d214909b821c1909e56db2e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5f39e3b826d2faa270b214d321dbb6f77d4a3272a28f1cd8845cd11f89f408->leave($__internal_8f5f39e3b826d2faa270b214d321dbb6f77d4a3272a28f1cd8845cd11f89f408_prof);

        
        $__internal_0348025b994ba9c7b6a6ff03728d08e1b5427b4d214909b821c1909e56db2e10->leave($__internal_0348025b994ba9c7b6a6ff03728d08e1b5427b4d214909b821c1909e56db2e10_prof);

    }

    // line 2
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_0a9d52b312826ae9b27e94f05a4a4425eff2d9acbcad5793bdb197665928f002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9d52b312826ae9b27e94f05a4a4425eff2d9acbcad5793bdb197665928f002->enter($__internal_0a9d52b312826ae9b27e94f05a4a4425eff2d9acbcad5793bdb197665928f002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_9d8563413c547ed1ec570df7c7dca59a7fe858e1d24db82626f3c726081253b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8563413c547ed1ec570df7c7dca59a7fe858e1d24db82626f3c726081253b5->enter($__internal_9d8563413c547ed1ec570df7c7dca59a7fe858e1d24db82626f3c726081253b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_9d8563413c547ed1ec570df7c7dca59a7fe858e1d24db82626f3c726081253b5->leave($__internal_9d8563413c547ed1ec570df7c7dca59a7fe858e1d24db82626f3c726081253b5_prof);

        
        $__internal_0a9d52b312826ae9b27e94f05a4a4425eff2d9acbcad5793bdb197665928f002->leave($__internal_0a9d52b312826ae9b27e94f05a4a4425eff2d9acbcad5793bdb197665928f002_prof);

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
{% block reservation %}
    {{ 'class=\" \"' }}
{% endblock %}

", "admin/accueil.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/admin/accueil.html.twig");
    }
}
