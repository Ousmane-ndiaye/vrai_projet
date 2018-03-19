<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5a098a129dc67f773ee21314d1dbc7272caa03d718debfb3643a5bb3baf8c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5a098a129dc67f773ee21314d1dbc7272caa03d718debfb3643a5bb3baf8c8a->enter($__internal_b5a098a129dc67f773ee21314d1dbc7272caa03d718debfb3643a5bb3baf8c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cc660efb2e1670115ba2aa31bd5151d2d33ba3b20b5435046729d27d2a15c28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc660efb2e1670115ba2aa31bd5151d2d33ba3b20b5435046729d27d2a15c28a->enter($__internal_cc660efb2e1670115ba2aa31bd5151d2d33ba3b20b5435046729d27d2a15c28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5a098a129dc67f773ee21314d1dbc7272caa03d718debfb3643a5bb3baf8c8a->leave($__internal_b5a098a129dc67f773ee21314d1dbc7272caa03d718debfb3643a5bb3baf8c8a_prof);

        
        $__internal_cc660efb2e1670115ba2aa31bd5151d2d33ba3b20b5435046729d27d2a15c28a->leave($__internal_cc660efb2e1670115ba2aa31bd5151d2d33ba3b20b5435046729d27d2a15c28a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ad47a3ec3fbab463cf158d61566e99e974ccabc2da6a4c8bed3cce53d5a1f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad47a3ec3fbab463cf158d61566e99e974ccabc2da6a4c8bed3cce53d5a1f74->enter($__internal_3ad47a3ec3fbab463cf158d61566e99e974ccabc2da6a4c8bed3cce53d5a1f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_917a461f831e77d8db51f2efbfbde3fbec66a578e44e04d206c488165afc83e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917a461f831e77d8db51f2efbfbde3fbec66a578e44e04d206c488165afc83e2->enter($__internal_917a461f831e77d8db51f2efbfbde3fbec66a578e44e04d206c488165afc83e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_917a461f831e77d8db51f2efbfbde3fbec66a578e44e04d206c488165afc83e2->leave($__internal_917a461f831e77d8db51f2efbfbde3fbec66a578e44e04d206c488165afc83e2_prof);

        
        $__internal_3ad47a3ec3fbab463cf158d61566e99e974ccabc2da6a4c8bed3cce53d5a1f74->leave($__internal_3ad47a3ec3fbab463cf158d61566e99e974ccabc2da6a4c8bed3cce53d5a1f74_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d1fa6b7ae8da6fc9aac0a12fbd6b7403f59e5431eec5df084a8afd29f069a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1fa6b7ae8da6fc9aac0a12fbd6b7403f59e5431eec5df084a8afd29f069a6b->enter($__internal_1d1fa6b7ae8da6fc9aac0a12fbd6b7403f59e5431eec5df084a8afd29f069a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d0c348a777a34d46c1efaf1797664b467004be2848b82ec8bd2cc7da1a556c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0c348a777a34d46c1efaf1797664b467004be2848b82ec8bd2cc7da1a556c3->enter($__internal_6d0c348a777a34d46c1efaf1797664b467004be2848b82ec8bd2cc7da1a556c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6d0c348a777a34d46c1efaf1797664b467004be2848b82ec8bd2cc7da1a556c3->leave($__internal_6d0c348a777a34d46c1efaf1797664b467004be2848b82ec8bd2cc7da1a556c3_prof);

        
        $__internal_1d1fa6b7ae8da6fc9aac0a12fbd6b7403f59e5431eec5df084a8afd29f069a6b->leave($__internal_1d1fa6b7ae8da6fc9aac0a12fbd6b7403f59e5431eec5df084a8afd29f069a6b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
