<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_9ccef2ccdcd63730e4b49d5d36d4335b8121e225508512d987be3b6fceeda176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c1e4102cf536cf13c9861e06901fbee4f03505e6c8384b3858ee1df38220916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1e4102cf536cf13c9861e06901fbee4f03505e6c8384b3858ee1df38220916->enter($__internal_2c1e4102cf536cf13c9861e06901fbee4f03505e6c8384b3858ee1df38220916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a796d9c369d340d2b1dbbe6231f4ab77200e30d7112a8fed8ea222b6f48df965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a796d9c369d340d2b1dbbe6231f4ab77200e30d7112a8fed8ea222b6f48df965->enter($__internal_a796d9c369d340d2b1dbbe6231f4ab77200e30d7112a8fed8ea222b6f48df965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1e4102cf536cf13c9861e06901fbee4f03505e6c8384b3858ee1df38220916->leave($__internal_2c1e4102cf536cf13c9861e06901fbee4f03505e6c8384b3858ee1df38220916_prof);

        
        $__internal_a796d9c369d340d2b1dbbe6231f4ab77200e30d7112a8fed8ea222b6f48df965->leave($__internal_a796d9c369d340d2b1dbbe6231f4ab77200e30d7112a8fed8ea222b6f48df965_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19b10a7e6a91904214f1b58e13189d31062fa2994dc845a03e94084a33b7ea85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b10a7e6a91904214f1b58e13189d31062fa2994dc845a03e94084a33b7ea85->enter($__internal_19b10a7e6a91904214f1b58e13189d31062fa2994dc845a03e94084a33b7ea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3396d5e1b569ed212500248eefa5667e2d4209a143dde6886c462fdcd9bacc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3396d5e1b569ed212500248eefa5667e2d4209a143dde6886c462fdcd9bacc24->enter($__internal_3396d5e1b569ed212500248eefa5667e2d4209a143dde6886c462fdcd9bacc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3396d5e1b569ed212500248eefa5667e2d4209a143dde6886c462fdcd9bacc24->leave($__internal_3396d5e1b569ed212500248eefa5667e2d4209a143dde6886c462fdcd9bacc24_prof);

        
        $__internal_19b10a7e6a91904214f1b58e13189d31062fa2994dc845a03e94084a33b7ea85->leave($__internal_19b10a7e6a91904214f1b58e13189d31062fa2994dc845a03e94084a33b7ea85_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
