<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_516e269c86ccf40cbe577d545e1c637ea0a44deb19c6abcabb7b750b11e3d9f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1955d496d55cccd8838de5c894f1f6a5b6394b0c279bb133464b93095d5842f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1955d496d55cccd8838de5c894f1f6a5b6394b0c279bb133464b93095d5842f->enter($__internal_b1955d496d55cccd8838de5c894f1f6a5b6394b0c279bb133464b93095d5842f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_bf4b2bf1e09a3423265b87fa8d9e53b3a88919f26e92c436e93de37bafc10fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4b2bf1e09a3423265b87fa8d9e53b3a88919f26e92c436e93de37bafc10fc6->enter($__internal_bf4b2bf1e09a3423265b87fa8d9e53b3a88919f26e92c436e93de37bafc10fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b1955d496d55cccd8838de5c894f1f6a5b6394b0c279bb133464b93095d5842f->leave($__internal_b1955d496d55cccd8838de5c894f1f6a5b6394b0c279bb133464b93095d5842f_prof);

        
        $__internal_bf4b2bf1e09a3423265b87fa8d9e53b3a88919f26e92c436e93de37bafc10fc6->leave($__internal_bf4b2bf1e09a3423265b87fa8d9e53b3a88919f26e92c436e93de37bafc10fc6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
