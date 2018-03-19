<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f7d9f8e8fbcea9b3c8677f32fbe40fda8a081396a22a0e80f2a6a54f024dde09 extends Twig_Template
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
        $__internal_6366ad5b2c930cb102157190becfa21ffe8fbb3bdbec5a1ea44bfd3b7dc68755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6366ad5b2c930cb102157190becfa21ffe8fbb3bdbec5a1ea44bfd3b7dc68755->enter($__internal_6366ad5b2c930cb102157190becfa21ffe8fbb3bdbec5a1ea44bfd3b7dc68755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_946093f5dc882e3556c0f4737e6a7da0f23e790f9110596caf1784415431c069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946093f5dc882e3556c0f4737e6a7da0f23e790f9110596caf1784415431c069->enter($__internal_946093f5dc882e3556c0f4737e6a7da0f23e790f9110596caf1784415431c069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6366ad5b2c930cb102157190becfa21ffe8fbb3bdbec5a1ea44bfd3b7dc68755->leave($__internal_6366ad5b2c930cb102157190becfa21ffe8fbb3bdbec5a1ea44bfd3b7dc68755_prof);

        
        $__internal_946093f5dc882e3556c0f4737e6a7da0f23e790f9110596caf1784415431c069->leave($__internal_946093f5dc882e3556c0f4737e6a7da0f23e790f9110596caf1784415431c069_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
