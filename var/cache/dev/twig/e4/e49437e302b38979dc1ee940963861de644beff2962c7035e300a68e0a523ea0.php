<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_45bf5c7d21036b1fd2c456510a44c89889dbb06d472826a666f9502bdc6ffb24 extends Twig_Template
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
        $__internal_8ce7f38fcdad6ec7191d8abbefd55cb0f72f8db94bc979da56855e8cd8828259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce7f38fcdad6ec7191d8abbefd55cb0f72f8db94bc979da56855e8cd8828259->enter($__internal_8ce7f38fcdad6ec7191d8abbefd55cb0f72f8db94bc979da56855e8cd8828259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f0cb3064b229237a278dab7779859336fa455e0eb7653362800c242e6e38d03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cb3064b229237a278dab7779859336fa455e0eb7653362800c242e6e38d03c->enter($__internal_f0cb3064b229237a278dab7779859336fa455e0eb7653362800c242e6e38d03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8ce7f38fcdad6ec7191d8abbefd55cb0f72f8db94bc979da56855e8cd8828259->leave($__internal_8ce7f38fcdad6ec7191d8abbefd55cb0f72f8db94bc979da56855e8cd8828259_prof);

        
        $__internal_f0cb3064b229237a278dab7779859336fa455e0eb7653362800c242e6e38d03c->leave($__internal_f0cb3064b229237a278dab7779859336fa455e0eb7653362800c242e6e38d03c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
