<?php

/* RESERVATIONBundle:Reservation:index.html.twig */
class __TwigTemplate_a3d56a9cbed28a8cba1385591976ed3f42b877aa192906084a88b453904057f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RESERVATIONBundle:Reservation:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caccfd7ec0b2d305a771796731faa6e1677aece4129d9ffe392417e18ecfae20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caccfd7ec0b2d305a771796731faa6e1677aece4129d9ffe392417e18ecfae20->enter($__internal_caccfd7ec0b2d305a771796731faa6e1677aece4129d9ffe392417e18ecfae20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Reservation:index.html.twig"));

        $__internal_28311c43a4bdb075025472a718f52432e83e5cd505637d8f3ac2ee30c4b110c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28311c43a4bdb075025472a718f52432e83e5cd505637d8f3ac2ee30c4b110c7->enter($__internal_28311c43a4bdb075025472a718f52432e83e5cd505637d8f3ac2ee30c4b110c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caccfd7ec0b2d305a771796731faa6e1677aece4129d9ffe392417e18ecfae20->leave($__internal_caccfd7ec0b2d305a771796731faa6e1677aece4129d9ffe392417e18ecfae20_prof);

        
        $__internal_28311c43a4bdb075025472a718f52432e83e5cd505637d8f3ac2ee30c4b110c7->leave($__internal_28311c43a4bdb075025472a718f52432e83e5cd505637d8f3ac2ee30c4b110c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fd149b87ea5e70ab1d297b47525357f10015a8833ab274d2dc174e18d87da0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd149b87ea5e70ab1d297b47525357f10015a8833ab274d2dc174e18d87da0f->enter($__internal_0fd149b87ea5e70ab1d297b47525357f10015a8833ab274d2dc174e18d87da0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efe6ad69a392db957d85eaa6a79273b256cfd9484ddb106e830f577410422412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe6ad69a392db957d85eaa6a79273b256cfd9484ddb106e830f577410422412->enter($__internal_efe6ad69a392db957d85eaa6a79273b256cfd9484ddb106e830f577410422412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "RESERVATIONBundle:Reservation:index";
        
        $__internal_efe6ad69a392db957d85eaa6a79273b256cfd9484ddb106e830f577410422412->leave($__internal_efe6ad69a392db957d85eaa6a79273b256cfd9484ddb106e830f577410422412_prof);

        
        $__internal_0fd149b87ea5e70ab1d297b47525357f10015a8833ab274d2dc174e18d87da0f->leave($__internal_0fd149b87ea5e70ab1d297b47525357f10015a8833ab274d2dc174e18d87da0f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f0908dcd1e5a2794378328574b7f272858a3822ac17cec978963a8abe69f041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0908dcd1e5a2794378328574b7f272858a3822ac17cec978963a8abe69f041->enter($__internal_6f0908dcd1e5a2794378328574b7f272858a3822ac17cec978963a8abe69f041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_272bd0f90eee7eb664eebafa74d5961a93230522527df4226d412335fcb3265b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272bd0f90eee7eb664eebafa74d5961a93230522527df4226d412335fcb3265b->enter($__internal_272bd0f90eee7eb664eebafa74d5961a93230522527df4226d412335fcb3265b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Reservation:index page</h1>
";
        
        $__internal_272bd0f90eee7eb664eebafa74d5961a93230522527df4226d412335fcb3265b->leave($__internal_272bd0f90eee7eb664eebafa74d5961a93230522527df4226d412335fcb3265b_prof);

        
        $__internal_6f0908dcd1e5a2794378328574b7f272858a3822ac17cec978963a8abe69f041->leave($__internal_6f0908dcd1e5a2794378328574b7f272858a3822ac17cec978963a8abe69f041_prof);

    }

    public function getTemplateName()
    {
        return "RESERVATIONBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}RESERVATIONBundle:Reservation:index{% endblock %}

{% block body %}
<h1>Welcome to the Reservation:index page</h1>
{% endblock %}
", "RESERVATIONBundle:Reservation:index.html.twig", "/var/www/html/File_Rouge/soultana.sn/src/SNT/ReservationBundle/Resources/views/Reservation/index.html.twig");
    }
}
