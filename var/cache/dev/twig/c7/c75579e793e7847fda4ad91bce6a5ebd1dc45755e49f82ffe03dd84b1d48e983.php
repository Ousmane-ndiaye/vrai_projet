<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cab0e8da9123b0eb881ccb6512c9ece45ecf7182aab7f2d33dd6367e0b8b045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cab0e8da9123b0eb881ccb6512c9ece45ecf7182aab7f2d33dd6367e0b8b045->enter($__internal_2cab0e8da9123b0eb881ccb6512c9ece45ecf7182aab7f2d33dd6367e0b8b045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_dab28c1b4c41b86c135a1666c7b2e96f26d55c6c67667c6c06400d273cb68e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab28c1b4c41b86c135a1666c7b2e96f26d55c6c67667c6c06400d273cb68e04->enter($__internal_dab28c1b4c41b86c135a1666c7b2e96f26d55c6c67667c6c06400d273cb68e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cab0e8da9123b0eb881ccb6512c9ece45ecf7182aab7f2d33dd6367e0b8b045->leave($__internal_2cab0e8da9123b0eb881ccb6512c9ece45ecf7182aab7f2d33dd6367e0b8b045_prof);

        
        $__internal_dab28c1b4c41b86c135a1666c7b2e96f26d55c6c67667c6c06400d273cb68e04->leave($__internal_dab28c1b4c41b86c135a1666c7b2e96f26d55c6c67667c6c06400d273cb68e04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90ccc046d8ee42f053d1d7639674fdd583a041f05e437b05010efc4485e1a381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ccc046d8ee42f053d1d7639674fdd583a041f05e437b05010efc4485e1a381->enter($__internal_90ccc046d8ee42f053d1d7639674fdd583a041f05e437b05010efc4485e1a381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8003a6a5cb702d85435d8a23d066490b7264efab7811307b15e88508f54f4693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8003a6a5cb702d85435d8a23d066490b7264efab7811307b15e88508f54f4693->enter($__internal_8003a6a5cb702d85435d8a23d066490b7264efab7811307b15e88508f54f4693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8003a6a5cb702d85435d8a23d066490b7264efab7811307b15e88508f54f4693->leave($__internal_8003a6a5cb702d85435d8a23d066490b7264efab7811307b15e88508f54f4693_prof);

        
        $__internal_90ccc046d8ee42f053d1d7639674fdd583a041f05e437b05010efc4485e1a381->leave($__internal_90ccc046d8ee42f053d1d7639674fdd583a041f05e437b05010efc4485e1a381_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6a5f155d829264f5b0bdf816c98cdb79f8294b6d930cc7427f902bc4ccc5b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a5f155d829264f5b0bdf816c98cdb79f8294b6d930cc7427f902bc4ccc5b2e->enter($__internal_c6a5f155d829264f5b0bdf816c98cdb79f8294b6d930cc7427f902bc4ccc5b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6eb51720bf06730b8090cdafe531df584f9ce4517c10ec2853e6a8dc00be02a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb51720bf06730b8090cdafe531df584f9ce4517c10ec2853e6a8dc00be02a1->enter($__internal_6eb51720bf06730b8090cdafe531df584f9ce4517c10ec2853e6a8dc00be02a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6eb51720bf06730b8090cdafe531df584f9ce4517c10ec2853e6a8dc00be02a1->leave($__internal_6eb51720bf06730b8090cdafe531df584f9ce4517c10ec2853e6a8dc00be02a1_prof);

        
        $__internal_c6a5f155d829264f5b0bdf816c98cdb79f8294b6d930cc7427f902bc4ccc5b2e->leave($__internal_c6a5f155d829264f5b0bdf816c98cdb79f8294b6d930cc7427f902bc4ccc5b2e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
