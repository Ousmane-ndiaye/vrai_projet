<?php

/* RESERVATIONBundle:Default:index.html.twig */
class __TwigTemplate_76eba2022b4542c215ae0eb31fdadb6088cfdd99120253745feb5bd1a372463e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RESERVATIONBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32cf4bb1eae5ce0ecee8e5d02a46339bec957b04c223b4d479216d1f01c04a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cf4bb1eae5ce0ecee8e5d02a46339bec957b04c223b4d479216d1f01c04a72->enter($__internal_32cf4bb1eae5ce0ecee8e5d02a46339bec957b04c223b4d479216d1f01c04a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $__internal_2bb886504fbb4aac2d42fa4ad0eaa4f2cbf0ded6ffcdfda141d017660d90c18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb886504fbb4aac2d42fa4ad0eaa4f2cbf0ded6ffcdfda141d017660d90c18c->enter($__internal_2bb886504fbb4aac2d42fa4ad0eaa4f2cbf0ded6ffcdfda141d017660d90c18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32cf4bb1eae5ce0ecee8e5d02a46339bec957b04c223b4d479216d1f01c04a72->leave($__internal_32cf4bb1eae5ce0ecee8e5d02a46339bec957b04c223b4d479216d1f01c04a72_prof);

        
        $__internal_2bb886504fbb4aac2d42fa4ad0eaa4f2cbf0ded6ffcdfda141d017660d90c18c->leave($__internal_2bb886504fbb4aac2d42fa4ad0eaa4f2cbf0ded6ffcdfda141d017660d90c18c_prof);

    }

    public function getTemplateName()
    {
        return "RESERVATIONBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
", "RESERVATIONBundle:Default:index.html.twig", "/var/www/html/File_Rouge/soultana.sn/src/SNT/ReservationBundle/Resources/views/Default/index.html.twig");
    }
}
