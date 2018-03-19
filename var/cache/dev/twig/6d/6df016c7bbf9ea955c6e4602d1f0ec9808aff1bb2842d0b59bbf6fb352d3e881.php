<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_323b2966172868e9fb6ee50a4848e1c2f8e704e45e025f4a0402b4007e304a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323b2966172868e9fb6ee50a4848e1c2f8e704e45e025f4a0402b4007e304a4c->enter($__internal_323b2966172868e9fb6ee50a4848e1c2f8e704e45e025f4a0402b4007e304a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d36ea7578e0a3b7607cac4a502a8b8867db2e6265d3d6cb3e08f1c975204a204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36ea7578e0a3b7607cac4a502a8b8867db2e6265d3d6cb3e08f1c975204a204->enter($__internal_d36ea7578e0a3b7607cac4a502a8b8867db2e6265d3d6cb3e08f1c975204a204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323b2966172868e9fb6ee50a4848e1c2f8e704e45e025f4a0402b4007e304a4c->leave($__internal_323b2966172868e9fb6ee50a4848e1c2f8e704e45e025f4a0402b4007e304a4c_prof);

        
        $__internal_d36ea7578e0a3b7607cac4a502a8b8867db2e6265d3d6cb3e08f1c975204a204->leave($__internal_d36ea7578e0a3b7607cac4a502a8b8867db2e6265d3d6cb3e08f1c975204a204_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34b6df7b64935cbe86ddc8edf022555f692e0c4f413850f2a3dc8ec1fc84f3a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b6df7b64935cbe86ddc8edf022555f692e0c4f413850f2a3dc8ec1fc84f3a5->enter($__internal_34b6df7b64935cbe86ddc8edf022555f692e0c4f413850f2a3dc8ec1fc84f3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_13b30198b863755d87a3b9c2f462431d823c70d3bf24bb444d1fd58fa16a3143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b30198b863755d87a3b9c2f462431d823c70d3bf24bb444d1fd58fa16a3143->enter($__internal_13b30198b863755d87a3b9c2f462431d823c70d3bf24bb444d1fd58fa16a3143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_13b30198b863755d87a3b9c2f462431d823c70d3bf24bb444d1fd58fa16a3143->leave($__internal_13b30198b863755d87a3b9c2f462431d823c70d3bf24bb444d1fd58fa16a3143_prof);

        
        $__internal_34b6df7b64935cbe86ddc8edf022555f692e0c4f413850f2a3dc8ec1fc84f3a5->leave($__internal_34b6df7b64935cbe86ddc8edf022555f692e0c4f413850f2a3dc8ec1fc84f3a5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b6f8a6bc959ac66d9eda272f5a3ff8c40963e33bef7c4d657c77022cf0ede50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6f8a6bc959ac66d9eda272f5a3ff8c40963e33bef7c4d657c77022cf0ede50->enter($__internal_3b6f8a6bc959ac66d9eda272f5a3ff8c40963e33bef7c4d657c77022cf0ede50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f3e58889b2b1d37091ac0716c35f910df52d83c306567c6df260ffc8f85ffd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e58889b2b1d37091ac0716c35f910df52d83c306567c6df260ffc8f85ffd5d->enter($__internal_f3e58889b2b1d37091ac0716c35f910df52d83c306567c6df260ffc8f85ffd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f3e58889b2b1d37091ac0716c35f910df52d83c306567c6df260ffc8f85ffd5d->leave($__internal_f3e58889b2b1d37091ac0716c35f910df52d83c306567c6df260ffc8f85ffd5d_prof);

        
        $__internal_3b6f8a6bc959ac66d9eda272f5a3ff8c40963e33bef7c4d657c77022cf0ede50->leave($__internal_3b6f8a6bc959ac66d9eda272f5a3ff8c40963e33bef7c4d657c77022cf0ede50_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ccd49387c9a2e167e9e0ab9b470e643ea775c76c7431c004c29fa5a06762a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccd49387c9a2e167e9e0ab9b470e643ea775c76c7431c004c29fa5a06762a89->enter($__internal_9ccd49387c9a2e167e9e0ab9b470e643ea775c76c7431c004c29fa5a06762a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f4875bdc396d72bb45d91cd75b113418dcb121a2a8bf2d0a1b1fb572eae71c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4875bdc396d72bb45d91cd75b113418dcb121a2a8bf2d0a1b1fb572eae71c8->enter($__internal_1f4875bdc396d72bb45d91cd75b113418dcb121a2a8bf2d0a1b1fb572eae71c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1f4875bdc396d72bb45d91cd75b113418dcb121a2a8bf2d0a1b1fb572eae71c8->leave($__internal_1f4875bdc396d72bb45d91cd75b113418dcb121a2a8bf2d0a1b1fb572eae71c8_prof);

        
        $__internal_9ccd49387c9a2e167e9e0ab9b470e643ea775c76c7431c004c29fa5a06762a89->leave($__internal_9ccd49387c9a2e167e9e0ab9b470e643ea775c76c7431c004c29fa5a06762a89_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
