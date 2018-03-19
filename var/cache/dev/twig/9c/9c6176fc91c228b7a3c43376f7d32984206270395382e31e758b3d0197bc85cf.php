<?php

/* :reservation:index.html.twig */
class __TwigTemplate_5165123f1ce604fc509cc5736164d4bfe37af9e34b0a16dc78fb87b4df26d37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d607243cd40016ec9acbfe0595ac790586864667d1752215065044fd6a9cbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d607243cd40016ec9acbfe0595ac790586864667d1752215065044fd6a9cbbf->enter($__internal_7d607243cd40016ec9acbfe0595ac790586864667d1752215065044fd6a9cbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_ba3e8c8652fb5d64f6fbd42fac4d03eb17bc7807c7de960731e34d2aab4f0bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3e8c8652fb5d64f6fbd42fac4d03eb17bc7807c7de960731e34d2aab4f0bd4->enter($__internal_ba3e8c8652fb5d64f6fbd42fac4d03eb17bc7807c7de960731e34d2aab4f0bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d607243cd40016ec9acbfe0595ac790586864667d1752215065044fd6a9cbbf->leave($__internal_7d607243cd40016ec9acbfe0595ac790586864667d1752215065044fd6a9cbbf_prof);

        
        $__internal_ba3e8c8652fb5d64f6fbd42fac4d03eb17bc7807c7de960731e34d2aab4f0bd4->leave($__internal_ba3e8c8652fb5d64f6fbd42fac4d03eb17bc7807c7de960731e34d2aab4f0bd4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4ec877f486c2ce0c87e452ade274cf8c196238fc4d78713e04c237d406a369a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ec877f486c2ce0c87e452ade274cf8c196238fc4d78713e04c237d406a369a->enter($__internal_b4ec877f486c2ce0c87e452ade274cf8c196238fc4d78713e04c237d406a369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3dec1c811b0f8693dc36a6c4ce612953508df05ba4b719292fae5452cfad18e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dec1c811b0f8693dc36a6c4ce612953508df05ba4b719292fae5452cfad18e2->enter($__internal_3dec1c811b0f8693dc36a6c4ce612953508df05ba4b719292fae5452cfad18e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_3dec1c811b0f8693dc36a6c4ce612953508df05ba4b719292fae5452cfad18e2->leave($__internal_3dec1c811b0f8693dc36a6c4ce612953508df05ba4b719292fae5452cfad18e2_prof);

        
        $__internal_b4ec877f486c2ce0c87e452ade274cf8c196238fc4d78713e04c237d406a369a->leave($__internal_b4ec877f486c2ce0c87e452ade274cf8c196238fc4d78713e04c237d406a369a_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Accueil{% endblock %}", ":reservation:index.html.twig", "/var/www/html/File_Rouge/soultana.sn/app/Resources/views/reservation/index.html.twig");
    }
}
