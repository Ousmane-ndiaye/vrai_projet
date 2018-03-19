<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6398366dacbba040b2d92e0698ca9fe96a2f8f6edb0f8e2ffb6082eaea8ef4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6398366dacbba040b2d92e0698ca9fe96a2f8f6edb0f8e2ffb6082eaea8ef4c7->enter($__internal_6398366dacbba040b2d92e0698ca9fe96a2f8f6edb0f8e2ffb6082eaea8ef4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_02a7070ccab03f8e8e22522169270a0d71b30158c69bf0e8fb2def3e7a0fd04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a7070ccab03f8e8e22522169270a0d71b30158c69bf0e8fb2def3e7a0fd04d->enter($__internal_02a7070ccab03f8e8e22522169270a0d71b30158c69bf0e8fb2def3e7a0fd04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6398366dacbba040b2d92e0698ca9fe96a2f8f6edb0f8e2ffb6082eaea8ef4c7->leave($__internal_6398366dacbba040b2d92e0698ca9fe96a2f8f6edb0f8e2ffb6082eaea8ef4c7_prof);

        
        $__internal_02a7070ccab03f8e8e22522169270a0d71b30158c69bf0e8fb2def3e7a0fd04d->leave($__internal_02a7070ccab03f8e8e22522169270a0d71b30158c69bf0e8fb2def3e7a0fd04d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d3af1e1691530f4bc43fe7a227e7ed9f097d9234cf848f8c95c70338acdc5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3af1e1691530f4bc43fe7a227e7ed9f097d9234cf848f8c95c70338acdc5f2->enter($__internal_2d3af1e1691530f4bc43fe7a227e7ed9f097d9234cf848f8c95c70338acdc5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9ee2f3ccf2b206f664b8c79a10f12114f910ee0fb87dae05e22c287684f43d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee2f3ccf2b206f664b8c79a10f12114f910ee0fb87dae05e22c287684f43d16->enter($__internal_9ee2f3ccf2b206f664b8c79a10f12114f910ee0fb87dae05e22c287684f43d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ee2f3ccf2b206f664b8c79a10f12114f910ee0fb87dae05e22c287684f43d16->leave($__internal_9ee2f3ccf2b206f664b8c79a10f12114f910ee0fb87dae05e22c287684f43d16_prof);

        
        $__internal_2d3af1e1691530f4bc43fe7a227e7ed9f097d9234cf848f8c95c70338acdc5f2->leave($__internal_2d3af1e1691530f4bc43fe7a227e7ed9f097d9234cf848f8c95c70338acdc5f2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4974e246176ca8389f2f24001d6bca6427f0209090442c62a6acb0cd49b3304b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4974e246176ca8389f2f24001d6bca6427f0209090442c62a6acb0cd49b3304b->enter($__internal_4974e246176ca8389f2f24001d6bca6427f0209090442c62a6acb0cd49b3304b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5cd486de4f4dea17d40e583cf72769a154a9cfc1ea43d4bd98922757824fdfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd486de4f4dea17d40e583cf72769a154a9cfc1ea43d4bd98922757824fdfba->enter($__internal_5cd486de4f4dea17d40e583cf72769a154a9cfc1ea43d4bd98922757824fdfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5cd486de4f4dea17d40e583cf72769a154a9cfc1ea43d4bd98922757824fdfba->leave($__internal_5cd486de4f4dea17d40e583cf72769a154a9cfc1ea43d4bd98922757824fdfba_prof);

        
        $__internal_4974e246176ca8389f2f24001d6bca6427f0209090442c62a6acb0cd49b3304b->leave($__internal_4974e246176ca8389f2f24001d6bca6427f0209090442c62a6acb0cd49b3304b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb365cbdfa83f839c095f940334491005ccfb7f121cca26066e1ca391d635717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb365cbdfa83f839c095f940334491005ccfb7f121cca26066e1ca391d635717->enter($__internal_eb365cbdfa83f839c095f940334491005ccfb7f121cca26066e1ca391d635717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fef0aac6da2c41626ab7d60d948ffb8a1b2c5c803ee06d72232348ca79d0d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fef0aac6da2c41626ab7d60d948ffb8a1b2c5c803ee06d72232348ca79d0d60->enter($__internal_9fef0aac6da2c41626ab7d60d948ffb8a1b2c5c803ee06d72232348ca79d0d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9fef0aac6da2c41626ab7d60d948ffb8a1b2c5c803ee06d72232348ca79d0d60->leave($__internal_9fef0aac6da2c41626ab7d60d948ffb8a1b2c5c803ee06d72232348ca79d0d60_prof);

        
        $__internal_eb365cbdfa83f839c095f940334491005ccfb7f121cca26066e1ca391d635717->leave($__internal_eb365cbdfa83f839c095f940334491005ccfb7f121cca26066e1ca391d635717_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
