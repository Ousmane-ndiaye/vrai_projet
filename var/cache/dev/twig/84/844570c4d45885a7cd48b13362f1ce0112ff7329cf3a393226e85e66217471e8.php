<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7f21d83872aba57bf1ac0392c812da05cf9586237a715124737115776e823ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f21d83872aba57bf1ac0392c812da05cf9586237a715124737115776e823ff->enter($__internal_a7f21d83872aba57bf1ac0392c812da05cf9586237a715124737115776e823ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d1172df937c1f9c1f589c356214da7e8c55c77f49b9fe9be466c78bd2cfbb383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1172df937c1f9c1f589c356214da7e8c55c77f49b9fe9be466c78bd2cfbb383->enter($__internal_d1172df937c1f9c1f589c356214da7e8c55c77f49b9fe9be466c78bd2cfbb383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a7f21d83872aba57bf1ac0392c812da05cf9586237a715124737115776e823ff->leave($__internal_a7f21d83872aba57bf1ac0392c812da05cf9586237a715124737115776e823ff_prof);

        
        $__internal_d1172df937c1f9c1f589c356214da7e8c55c77f49b9fe9be466c78bd2cfbb383->leave($__internal_d1172df937c1f9c1f589c356214da7e8c55c77f49b9fe9be466c78bd2cfbb383_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8409c545823a17e32ea9a713b4e6d48d5f253860738aa3660495cf7e43ef790f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8409c545823a17e32ea9a713b4e6d48d5f253860738aa3660495cf7e43ef790f->enter($__internal_8409c545823a17e32ea9a713b4e6d48d5f253860738aa3660495cf7e43ef790f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e0f778daa4a9b90cf8a001a1a43b967bc8b66ea4bc5ccc8776045a84877e62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0f778daa4a9b90cf8a001a1a43b967bc8b66ea4bc5ccc8776045a84877e62a->enter($__internal_4e0f778daa4a9b90cf8a001a1a43b967bc8b66ea4bc5ccc8776045a84877e62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4e0f778daa4a9b90cf8a001a1a43b967bc8b66ea4bc5ccc8776045a84877e62a->leave($__internal_4e0f778daa4a9b90cf8a001a1a43b967bc8b66ea4bc5ccc8776045a84877e62a_prof);

        
        $__internal_8409c545823a17e32ea9a713b4e6d48d5f253860738aa3660495cf7e43ef790f->leave($__internal_8409c545823a17e32ea9a713b4e6d48d5f253860738aa3660495cf7e43ef790f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
